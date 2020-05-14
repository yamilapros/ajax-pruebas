CREATE DATABASE IF NOT EXISTS ajax;
USE ajax;
CREATE TABLE personas(
    id int(255) auto_increment not null,
    nombre varchar(100) not null,
    pais varchar(100) not null,
    edad int(10),
    CONSTRAINT pk_personas PRIMARY KEY (id)
);

INSERT INTO personas VALUES (null, 'Juan', 'Perú', 23);
INSERT INTO personas VALUES (null, 'Marcela', 'Argentina', 18);
INSERT INTO personas VALUES (null, 'Dani', 'España', 56);
INSERT INTO personas VALUES (null, 'Marcia', 'Chile', 34);