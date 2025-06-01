CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password TEXT NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user'
);