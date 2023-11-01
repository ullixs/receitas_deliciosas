create database receitasdeliciosas;
use receitasdeliciosas;
    
    create table receita (
        id_receita int not null auto_increment primary key,
        duracao int not null,
        titulo varchar(100) not null,
        modo_de_preparo text not null,
        data_publicação date not null
    );

    create table ingrediente (
        id_ingrediente int not null auto_increment primary key,
        nome_ingrediente varchar(100) not null,
        qtde_ingrediente int not null,
        preco_ingrediente decimal(5,2)
    );

    create table usuario (
        id_usuario int not null auto_increment primary key,
        nome varchar(100) not null,
        email varchar(100) not null,
        senha varchar(100) not null,
        data_nascimento date not null,
        qtde_receita int not null
    );
    create table receita_usuario (
        id_receita_fk int not null auto_increment primary key,
        id_usuario_fk int,
        foreign key (id_receita_fk) references receita(id_receita)
    );

    create table categoria (
        id_categoria int not null auto_increment primary key,
        hashtag varchar(100),
        categoria int
    );
    create table receita_categor (
        id_receita_fk int not null auto_increment primary key,
        id_categoria_fk int,
        foreign key (id_receita_fk) references receita(id_receita)
    );
    
    create table dificul (
        id_dificuldade int not null auto_increment primary key,
        dificuldade int not null
    );
    create table receita_dificuldade (
        id_receita_fk int not null auto_increment primary key,
        id_dificuldade_fk int,
        foreign key (id_receita_fk) references receita(id_receita)
    );
