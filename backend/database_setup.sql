-- Create ecommerce database if it doesn't exist
CREATE DATABASE IF NOT EXISTS ecommerce;

-- Use the ecommerce database
USE ecommerce;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert a test user (username: admin, password: admin123)
INSERT INTO users (username, password, email) 
VALUES ('admin', '$2y$10$8nOLXJw6l5h/Fl/kHUjq9OcF1JlS35ZDKyssS3wMqKBGEVXNgtKWO', 'admin@example.com')
ON DUPLICATE KEY UPDATE id=id; 