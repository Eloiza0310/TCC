create database tcc;
use tcc;

create table login(
codigo int primary key auto_increment,
nome_usuario varchar(100),
senha varchar(10)
);
create table cadastro(
codigo int primary key auto_increment,
usuario varchar(100),
senha varchar(100)
);