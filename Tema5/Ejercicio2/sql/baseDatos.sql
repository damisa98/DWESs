CREATE TABLE IF NOT EXISTS oferta(
	id int(11) NOT null AUTO_INCREMENT,
    titulo varchar(200) not null,
    imagen varchar(100) not null,
    descripcion varchar(50) not null,
    PRIMARY KEY(id)
)ENGINE=INNODB;