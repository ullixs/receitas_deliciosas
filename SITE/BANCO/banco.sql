CREATE database receitasdeliciosas;
use receitasdeliciosas;
    
    CREATE TABLE receita (
        id_receita INT NOT NULL auto_increment PRIMARY KEY,
        duracao INT NOT NULL,
        titulo VARCHAR(100) NOT NULL,
        modo_de_preparo text NOT NULL,
        data_publicação date NOT NULL
    );

    CREATE TABLE ingrediente (
        id_ingrediente INT NOT NULL auto_increment PRIMARY KEY,
        nome_ingrediente VARCHAR(100) NOT NULL,
        qtde_ingrediente INT NOT NULL,
        preco_ingrediente DECIMAL(5,2)
    );

    CREATE TABLE usuario (
        id_usuario INt  auto_increment PRIMARY KEY,
        nome VARCHAR(100)  ,
        email VARCHAR(100) NOT NULL ,
        senha VARCHAR(100) NOT NULL  ,
        data_nascimento date ,
        qtde_receita INT 
    );
    CREATE TABLE receita_usuario (
        id_receita_fk INT NOT NULL auto_increment PRIMARY KEY,
        id_usuario_fk INT,
        FOREIGN KEY (id_receita_fk) REFERENCES receita(id_receita),
        FOREIGN KEY (id_usuario_fk) REFERENCES receita(id_receita)
    );

    CREATE TABLE categoria (
        id_categoria INT NOT NULL auto_increment PRIMARY KEY,
        hashtag VARCHAR(100),
        categoria INT
    );
    CREATE TABLE receita_categoria (
        id_receita_fk INT NOT NULL auto_increment PRIMARY KEY,
        id_categoria_fk INT,
        FOREIGN KEY (id_receita_fk) REFERENCES receita(id_receita),
        FOREIGN KEY (id_categoria_fk) REFERENCES receita(id_receita)
    );
    
    CREATE TABLE dificuldade (
        id_dificuldade INT NOT NULL auto_increment PRIMARY KEY,
        dificuldade INT NOT NULL
    );
    CREATE TABLE receita_dificuldade (
        id_receita_fk INT NOT NULL auto_increment PRIMARY KEY,
        id_dificuldade_fk INT,
        FOREIGN KEY (id_receita_fk) REFERENCES receita(id_receita),
        FOREIGN KEY (id_dificuldade_fk) REFERENCES receita(id_receita)
    );