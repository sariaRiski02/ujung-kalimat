-- Active: 1706086887586@@127.0.0.1@3306
CREATE DATABASE belajar_database_laravel
USE belajar_database_laravel

create Table categories (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY, name VARCHAR(100) NOT NULL, description VARCHAR(100), created_at TIMESTAMP
)