CREATE DATABASE session_db;

USE session_db;

CREATE TABLE  users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) UNIQUE NOT NULL,
    password VARCHAR(50) NOT NULL,
    role VARCHAR(20)
);

INSERT INTO users(username, role, password) VALUES ('user1', 'Administrador', 'ABCDE12345678');
INSERT INTO users(username, role, password) VALUES ('user2', 'Funcionario', 'bABCDE992345678');
INSERT INTO users(username, role, password) VALUES ('user3', 'Cliente', 'vABCDE12345678');
INSERT INTO users(username, role, password) VALUES ('user4', 'Cliente', 'kABCDE14345678');
INSERT INTO users(username, role, password) VALUES ('user5', 'Cliente', 'xbABCDE10345678');
