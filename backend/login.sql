CREATE DATABASE login_db; 

USE login_db ; 

CREATE TABLE masuk (
    username VARCHAR(25), NOT NULL
    npm VARCHAR(10), NOT NULL
    password VARCHAR(15), NOT NULL
); 

INSERT INTO users (username, npm, password) VALUE("yahya", "25", "$2b$12$2501Hash" )