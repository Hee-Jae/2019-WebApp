CREATE DATABASE webapp;
USE webapp;

CREATE TABLE question(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20),
    content TEXT,
    password VARCHAR(20) NOT NULL,
    lecture_id INT NOT NULL,
    slide INT NOT NULL
);

CREATE TABLE answer(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    q_id INT NOT NULL,
    name VARCHAR(20),
    content TEXT,
    password VARCHAR(20) NOT NULL
);