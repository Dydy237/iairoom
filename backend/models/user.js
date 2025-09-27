const { getPool } = require('../db');

class User {
  static async create(username, email, hashedPassword, role = 'tenant', phone = null, propertyAddress = null, propertyType = null, numRooms = null) {
    const pool = getPool();
    const [result] = await pool.execute(
      'INSERT INTO users (username, email, password, role, phone, property_address, property_type, num_rooms) VALUES (?, ?, ?, ?, ?, ?, ?, ?)',
      [username, email, hashedPassword, role, phone, propertyAddress, propertyType, numRooms]
    );
    return result.insertId;
  }

  static async findByEmail(email) {
    const pool = getPool();
    const [rows] = await pool.execute(
      'SELECT * FROM users WHERE email = ?',
      [email]
    );
    return rows[0];
  }
}

module.exports = User;
