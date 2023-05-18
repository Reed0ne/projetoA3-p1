CREATE DATABASE projeto_A3;

CREATE TABLE login (
nome VARCHAR(500), 
login VARCHAR(25), 
senha VARCHAR(20),
PRIMARY KEY (login)
);

INSERT INTO login (nome, login, senha)
	VALUES 
		('Administrador', 'admin', 'admin123');
		