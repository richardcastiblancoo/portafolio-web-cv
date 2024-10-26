<?php
// Configuración de la base de datos
$host = 'localhost';
$db = 'formulario_db';
$user = 'root'; // Cambia si tienes un usuario diferente
$pass = ''; // Cambia si tienes una contraseña

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];

// Preparar y bindear
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, telefono, correo, direccion, edad, genero) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssis", $nombre, $apellido, $telefono, $correo, $direccion, $edad, $genero);

// Ejecutar
if ($stmt->execute()) {
    echo "Nuevo registro creado exitosamente.";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar conexiones
$stmt->close();
$conn->close();
?>
