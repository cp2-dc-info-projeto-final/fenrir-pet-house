CREATE USER 'fenrir'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON fenrirpet.* TO 'fenrir'@'localhost';

CREATE TABLE cliente ( 
    cod_cliente int NOT NULL AUTO_INCREMENT, 
    nome varchar(220) NOT NULL, 
    email varchar(220) NOT NULL, 
    data_nasc varchar(10) NOT NULL, 
    senha varchar(220) NOT NULL, 
    primary key(cod_cliente) 
);

CREATE TABLE func ( 
    cod_func int NOT NULL AUTO_INCREMENT, 
    nome varchar(220) NOT NULL, 
    email varchar(220) NOT NULL, 
    data_nasc varchar(10) NOT NULL, 
    senha varchar(220) NOT NULL,
    cpf varchar(14) NOT NULL
    primary key(cod_func) 
);

CREATE TABLE adm ( 
    cod_adm int NOT NULL AUTO_INCREMENT, 
    nome varchar(220) NOT NULL, 
    email varchar(220) NOT NULL, 
    data_nasc varchar(10) NOT NULL, 
    senha varchar(220) NOT NULL,
    cpf varchar(14) NOT NULL
    primary key(cod_adm) 
);