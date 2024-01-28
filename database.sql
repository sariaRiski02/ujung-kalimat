-- Active: 1706086887586@@127.0.0.1@3306
CREATE DATABASE belajar_database_laravel
USE belajar_database_laravel

create Table categories (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY, name VARCHAR(100) NOT NULL, description VARCHAR(100), created_at TIMESTAMP
)

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY, name VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL
)

ALTER TABLE users MODIFY COLUMN id int AUTO_INCREMENT

DESC users

select * from users

CREATE DATABASE ujung_kalimat

use ujung_kalimat

CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    name VARCHAR(100) NOT NULL, 
    email VARCHAR(100) UNIQUE NOT NULL, 
    password VARCHAR(100) NOT NULL
)

use ujung_kalimat

SELECT * FROM users