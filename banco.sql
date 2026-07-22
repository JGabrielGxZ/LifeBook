create database lifebook;
use lifebook;
create table usuarios(
    id int primary key auto_increment,
    email varchar(500) not null unique,
    senha varchar(200) not null,
    nome varchar(500) not null,
    nickname varchar(200) not null unique,
    foto_perfil varchar(255) default 'imagens/defaultAvatar.png'
);
select * from usuarios;
/*delete from usuarios where id=3;
drop database lifebook;
