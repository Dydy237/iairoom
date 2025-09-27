const mysql = require('mysql2/promise');
require('dotenv').config();

let pool;

// Create database and table if not exists
async function initializeDatabase() {
  try {
    // Drop and recreate database to avoid constraint issues
    const tempConnection = await mysql.createConnection({
      host: process.env.DB_HOST,
      user: process.env.DB_USER,
      password: process.env.DB_PASSWORD
    });
    await tempConnection.execute(`DROP DATABASE IF EXISTS \`${process.env.DB_NAME}\``);
    await tempConnection.execute(`CREATE DATABASE \`${process.env.DB_NAME}\``);
    await tempConnection.end();

    // Now create the pool with the database
    pool = mysql.createPool({
      host: process.env.DB_HOST,
      user: process.env.DB_USER,
      password: process.env.DB_PASSWORD,
      database: process.env.DB_NAME,
      waitForConnections: true,
      connectionLimit: 10,
      queueLimit: 0
    });

    // Create users table
    await pool.execute(`
      CREATE TABLE users (
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
    console.log('Database and table initialized successfully.');
  } catch (error) {
    console.error('Error initializing database:', error);
    throw error;
  }
}

module.exports = { getPool: () => { if (!pool) throw new Error('Database not initialized. Please check your .env file and ensure MySQL is running.'); return pool; }, initializeDatabase };
