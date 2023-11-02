CREATE database receitasdeliciosas;
use receitasdeliciosas;
    
    CREATE TABLE receita (
        id_receita INT NOT NULL auto_increment primary key,
        duracao INT NOT NULL,
        titulo VARCHAR(100) NOT NULL,
        modo_de_preparo text NOT NULL,
        data_publicação date NOT NULL
    );

    CREATE TABLE ingrediente (
        id_ingrediente INT NOT NULL auto_increment primary key,
        nome_ingrediente VARCHAR(100) NOT NULL,
        qtde_ingrediente INT NOT NULL,
        preco_ingrediente decimal(5,2)
    );

    CREATE TABLE usuario (
        id_usuario INT NOT NULL auto_increment primary key,
        nome VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        senha VARCHAR(100) NOT NULL,
        data_nascimento date NOT NULL,
        qtde_receita INT NOT NULL
    );
    CREATE TABLE receita_usuario (
        id_receita_fk INT NOT NULL auto_increment primary key,
        id_usuario_fk INT,
        foreign key (id_receita_fk) references receita(id_receita),
        foreign key (id_usuario_fk) references receita(id_receita)
    );

    CREATE TABLE categoria (
        id_categoria INT NOT NULL auto_increment primary key,
        hashtag VARCHAR(100),
        categoria INT
    );
    CREATE TABLE receita_categoria (
        id_receita_fk INT NOT NULL auto_increment primary key,
        id_categoria_fk INT,
        foreign key (id_receita_fk) references receita(id_receita),
        foreign key (id_categoria_fk) references receita(id_receita)
    );
    
    CREATE TABLE dificuldade (
        id_dificuldade INT NOT NULL auto_increment primary key,
        dificuldade INT NOT NULL
    );
    CREATE TABLE receita_dificuldade (
        id_receita_fk INT NOT NULL auto_increment primary key,
        id_dificuldade_fk INT,
        foreign key (id_receita_fk) references receita(id_receita),
        foreign key (id_dificuldade_fk) references receita(id_receita)
    );
