create database inkspiral;

use inkspiral;

CREATE TABLE usuario (
    id_usu INT(10) AUTO_INCREMENT,
    nombre_usu VARCHAR(50),
    email_usu VARCHAR(100),
    contrasena VARCHAR(255),
    categoria VARCHAR(10),
    PRIMARY KEY (id_usu)
);

CREATE TABLE proyectos (
    id_proyecto INT(10) AUTO_INCREMENT,
    nombre_proyecto VARCHAR(200),
    sub_nombre_proyecto VARCHAR(200),
    descripcion TEXT,
    imagen_proyecto LONGBLOB,
    portada_proyecto LONGBLOB,
    productora VARCHAR(50),
    mas18 BOOLEAN,
    autor VARCHAR(50),
    ano_lanzamiento DATE,
    capitulos DOUBLE(255, 2),
    vistas INT,
    PRIMARY KEY (id_proyecto)
);

CREATE TABLE generos (
    id_genero INT(10) AUTO_INCREMENT,
    nombre_genero VARCHAR(50),
    PRIMARY KEY (id_genero)
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

INSERT INTO usuario (nombre_usu,email_usu,contrasena,categoria) VALUES
('ElmerCenario','elmercancer0907@gmail.com','12345678','admin'),
('prueba','prueba@gmail.com','123','admin');

INSERT INTO generos (nombre_genero) VALUES
    ('Comedia'),
    ('Romance'),
    ('Acción'),
    ('Fantasía'),
    ('Drama'),
    ('Aventura'),
    ('Misterio'),
    ('Ciencia Ficción'),
    ('Thriller'),
    ('Suspenso'),
    ('Horror'),
    ('Supernatural'),
    ('Magia'),
    ('Psicológico'),
    ('Deportes'),
    ('Escolar'),
    ('Harem'),
    ('Slice of Life'),
    ('Recuentos de la Vida'),
    ('Histórico'),
    ('Samurai'),
    ('Artes Marciales'),
    ('Musical'),
    ('Mecha'),
    ('Gore'),
    ('Cyberpunk'),
    ('Superpoderes'),
    ('Espacial'),
    ('Vampiros'),
    ('Ecchi'),
    ('Seinen'),
    ('Shoujo'),
    ('Shounen'),
    ('Josei'),
    ('Kodomo'),
    ('Distopía'),
    ('Terror'),
    ('Historia Alternativa'),
    ('Superhéroes'),
    ('Vida Cotidiana'),
    ('Yuri'),
    ('Girls Love'),
    ('BL');