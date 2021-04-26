CREATE DATABASE ucode_web;
CREATE USER 'anevodnich'@'localhost' IDENTIFIED BY 'securepass';
GRANT ALL ON ucode_web.* TO 'anevodnich'@'localhost';