CREATE DATABASE sistema_turnos;

USE sistema_turnos;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE turnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    tipo_masaje VARCHAR NOT NULL,
    usuario_id INT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
CREATE TABLE consultas{
    id INT AUTO_INCREMENT PRIMARY KEY,
    mensaje VARCHAR(500) NOT NULL,
    usuario_id INT,
    correo_id INT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (correo_id) REFERENCES usuarios(correo)

    

}
