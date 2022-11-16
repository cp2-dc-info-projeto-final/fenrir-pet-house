DROP USER IF EXISTS 'fenrir'@'localhost';
CREATE USER 'fenrir'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON fenrir.* TO 'fenrir'@'localhost';

CREATE TABLE administrador ( 
    cod_admin int NOT NULL AUTO_INCREMENT, 
    nome varchar(30) NOT NULL, 
    email varchar(30) NOT NULL, 
    data_nasc varchar(10) NOT NULL,
    senha varchar(30) NOT NULL,
    primary key(cod_admin) 
);

CREATE USER 'cliente'@'localhost' IDENTIFIED BY 'cliente';

CREATE TABLE cliente ( 
    cod_cliente int NOT NULL AUTO_INCREMENT, 
    nome varchar(30) NOT NULL, 
    email varchar(30) NOT NULL, 
    data_nasc varchar(10) NOT NULL,
    senha varchar(30) NOT NULL,
    primary key(cod_cliente) 
);


CREATE USER 'func'@'localhost' IDENTIFIED BY 'func';

CREATE TABLE funcionario ( 
    cod_func int NOT NULL AUTO_INCREMENT, 
    nome varchar(30) NOT NULL, 
    email varchar(30) NOT NULL, 
    data_nasc varchar(10) NOT NULL,
    senha varchar(30) NOT NULL,
    primary key(cod_func) 
);
