CREATE DATABASE login_db;
USE login_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(50) NOT NULL, 
    npm VARCHAR(20) NOT NULL, 
    password VARCHAR(100) NOT NULL
);

-- Simpan kata sandi yang telah di-hash
INSERT INTO users (username, npm, password ) VALUES ('yahya', '25', "$2b$12$deya2501Hash");

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(50) NOT NULL, 
    npm VARCHAR(20) NOT NULL, 
    password VARCHAR(100) NOT NULL
);
INSERT INTO users (username, npm, password ) VALUES ('kucing', '12345', "$2b$12$kucing12345Hash");


