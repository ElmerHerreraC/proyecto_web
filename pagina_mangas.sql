create database pagina_mangas;

use pagina_mangas;

create table usuario(
    id_usu int(10),
    nombre_usu varchar(50),
    email_usu varchar(100),
    contrasena varchar(255),
    categoria varchar(10);
);

create table proyectos(
    id_proyecto int(10),
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
    id_genero INT(10),
    nombre_genero VARCHAR(50)
);

CREATE TABLE proyectos_generos (
    id_proyecto INT(10),
    id_genero INT(10),
    PRIMARY KEY (id_proyecto, id_genero),
    FOREIGN KEY (id_proyecto) REFERENCES proyectos(id_proyecto),
    FOREIGN KEY (id_genero) REFERENCES generos(id_genero)
);