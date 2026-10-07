CREATE DATABASE db_jogadores; 

USE db_jogadores;

CREATE TABLE jogadores (
    id int AUTO_INCREMENT NOT NULL,
    nome varchar(100) NOT NULL,
    posicao varchar(5),
    CONSTRAINT pk_jogadores PRIMARY KEY (id)
);