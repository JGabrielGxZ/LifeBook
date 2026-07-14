create database lifebook;

use lifebook;

create table usuarios(
id int primary key auto_increment,
email varchar(500) not null,
senha varchar(200) not null,
nome varchar(500) not null,
nickname varchar(200) not null
);

select * from usuarios;