create database inkspiral;

use inkspiral;

create table usuario(
    id_usu int(10) AUTO_INCREMENT,
    nombre_usu varchar(50),
    email_usu varchar(100),
    contrasena varchar(255),
    categoria varchar(10);
);

create table proyectos(
    id_proyecto int(10) AUTO_INCREMENT,
    nombre_proyecto varchar(200),
    sub_nombre_proyecto varchar(200),
    descripcion text,
    imagen_proyecto LONGBLOB,
    portada_proyecto LONGBLOB,
    productora varchar(50),
    "+18" boolean,
    autor varchar(50),
    ano_lanzamiento date,
    capitulos double(10000,2),
    vistas int;
)
CREATE TABLE generos (
    id_genero INT(10) AUTO_INCREMENT,
    nombre_genero VARCHAR(50)
);

CREATE TABLE proyectos_generos (
    id_proyecto INT(10),
    id_genero INT(10),
    PRIMARY KEY (id_proyecto, id_genero),
    FOREIGN KEY (id_proyecto) REFERENCES proyectos(id_proyecto),
    FOREIGN KEY (id_genero) REFERENCES generos(id_genero)
);
CREATE TABLE favoritos (
    id_favorito INT(10) AUTO_INCREMENT,
    id_usu INT(10),
    id_proyecto INT(10),
    PRIMARY KEY (id_favorito),
    FOREIGN KEY (id_usu) REFERENCES usuario(id_usu),
    FOREIGN KEY (id_proyecto) REFERENCES proyectos(id_proyecto)
);