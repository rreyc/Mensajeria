CREATE DATABASE mensajeria;

CREATE USER mensajerialocalhost IDENTIFIED BY 'mensajeria';

USE mensajeria;
CREATE TABLE usuarios (
  id INT(3) auto_increment,
  nombre VARCHAR(30) NOT NULL ,
  apellido1 VARCHAR(30) NOT NULL ,
  apellido2 VARCHAR(30),
  login VARCHAR(16) NOT NULL ,
  password VARCHAR(30) NOT NULL,
  CONSTRAINT id_pk PRIMARY KEY (id),
  CONSTRAINT login_uk UNIQUE (login)
  );
  GRANT ALL ON mensajeria.* TO 'mensajeria'@'localhost';



CREATE TABLE mensajes (
  id_mensaje INT(5) auto_increment,
  mensaje VARCHAR (500) NOT NULL,
  id_usuario INT(3) NOT NULL,
  CONSTRAINT id_pk PRIMARY KEY (id_mensaje),
  CONSTRAINT id_fk FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);






