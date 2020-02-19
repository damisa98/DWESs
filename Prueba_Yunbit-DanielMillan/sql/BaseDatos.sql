CREATE DATABASE pruebas_practicas;

USE pruebas_practicas;

CREATE TABLE TEST_CLIENTS(
	id int AUTO_INCREMENT,
    name varchar(255),
    address varchar(255),
    descripcion text,
    telf varchar(255),
    type char(1),
    constraint pk_TEST_CLIENTS primary key(id)
);

/*

Usuario: pruebajr
Contraseña: pruebajr

Para la creación del usuario me meti dentro de la base de datos , luego le di a privilegios, y cree el usuario 
con el nombre le puse local, le meti la contraseña y ya crearlo


*/