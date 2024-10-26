<?php
// Configuración de la base de datos
$host = 'localhost';
$db = 'formulario_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Teléfono</th><th>Correo</th><th>Dirección</th><th>Edad</th><th>Género</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["apellido"]. "</td><td>" . $row["telefono"]. "</td><td>" . $row["correo"]. "</td><td>" . $row["direccion"]. "</td><td>" . $row["edad"]. "</td><td>" . $row["genero"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
