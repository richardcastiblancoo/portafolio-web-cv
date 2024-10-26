CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono VARCHAR(20),
    correo VARCHAR(100) NOT NULL,
    direccion VARCHAR(100),
    edad INT,
    genero ENUM('masculino', 'femenino', 'otro')
);
