CREATE DATABASE IF NOT EXISTS sword;
CREATE USER IF NOT EXISTS 'anevodnich'@'localhost' IDENTIFIED BY 'securepass';
GRANT ALL ON sword.* TO 'anevodnich'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
USE sword;
CREATE TABLE IF NOT EXISTS users(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(20) NOT NULL UNIQUE,
    password VARCHAR(20) NOT NULL,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(25) NOT NULL,
    status ENUM('admin','user') DEFAULT 'user' NOT NULL
);