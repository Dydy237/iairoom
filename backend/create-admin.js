require('dotenv').config();
const mysql = require('mysql2/promise');
const bcrypt = require('bcryptjs');

async function createAdmin() {
  try {
    // Connect to MySQL (without database to create it if needed)
    const tempConnection = await mysql.createConnection({
      host: process.env.DB_HOST,
      user: process.env.DB_USER,
      password: process.env.DB_PASSWORD
    });

    // Create database if not exists
    await tempConnection.execute(`CREATE DATABASE IF NOT EXISTS \`${process.env.DB_NAME}\``);
    await tempConnection.end();

    // Now connect to the database
    const connection = await mysql.createConnection({
      host: process.env.DB_HOST,
      user: process.env.DB_USER,
      password: process.env.DB_PASSWORD,
      database: process.env.DB_NAME
    });

    // Create users table if not exists
    await connection.execute(`
      CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) UNIQUE NOT NULL,
        email VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        role ENUM('tenant', 'landlord', 'admin') NOT NULL DEFAULT 'tenant',
        phone VARCHAR(20),
        property_address VARCHAR(255),
        property_type VARCHAR(50),
        num_rooms INT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
      )
    `);

    // Check if admin already exists
    const [rows] = await connection.execute('SELECT * FROM users WHERE role = ?', ['admin']);
    if (rows.length > 0) {
      console.log('Admin user already exists.');
      await connection.end();
      return;
    }

    // Hash password
    const hashedPassword = await bcrypt.hash('admin123', 10);

    // Insert admin user
    await connection.execute(
      'INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)',
      ['admin', 'admin@iairoom.com', hashedPassword, 'admin']
    );

    console.log('Admin user created successfully.');
    console.log('Email: admin@iairoom.com');
    console.log('Password: admin123');

    await connection.end();
  } catch (error) {
    console.error('Error creating admin:', error);
  }
}

createAdmin();
