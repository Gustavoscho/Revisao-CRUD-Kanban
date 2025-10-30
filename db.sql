CREATE DATABASE crudkanban;
USE crudkanban;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
);

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    status ENUM('a fazer', 'em progresso', 'feito') DEFAULT 'a fazer',
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

