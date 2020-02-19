create table usuarios(
    id int(255) auto_increment not null,
    nombre varchar(100) not null,
    apellidos varchar(100) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    fecha date not null,
    constraint pk_usuarios primary key(id),
    constraint uq_email unique(email)
    )ENGINE=INNODB;

create table notas(
    id int(255) auto_increment not null,
    usuario_id int(255) not null,
    titulo varchar(255) not null,
    descripcion MEDIUMTEXT,
    fecha date not null,
    constraint pk_entradas primary key(id),
    constraint fk_entradas_usuario foreign key(usuario_id) references usuarios(id)
)ENGINE=INNODB;