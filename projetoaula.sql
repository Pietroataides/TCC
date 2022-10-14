create database projetoaula;

use projetoaula;

create table usuarios (
codigo int primary key auto_increment,
nome varchar(50),
email varchar(40),
senha varchar(20),
nascimento date,
tempo time
);

select * from usuarios;

