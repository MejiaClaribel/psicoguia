CREATE DATABASE PsicoGuia;
USE PsicoGuia;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    sexo VARCHAR(10) not NULL,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE respuestas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    pregunta1 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta2 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta3 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta4 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta5 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta6 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta7 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta8 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta9 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta10 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta11 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta12 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    pregunta13 ENUM('Sí', 'No', 'Tal vez') NOT NULL,
    fecha_respuesta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
