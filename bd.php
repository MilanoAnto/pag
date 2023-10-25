<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "anto";
$password = "Lara1983-";
$database = "pag";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los valores del formulario de manera segura
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Utilizar una sentencia preparada para proteger contra inyecciones de SQL
$stmt = $conn->prepare("INSERT INTO Usuarios (nombre, apellido, mail, usuario, contraseña) VALUES (nombre, apellido, mail, usuario, contraseña)");
$stmt->bind_param("sssss", $nombre, $apellido, $mail, $usuario, $contraseña);

if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $stmt->error;
}

// Cerrar la conexión y liberar los recursos
$stmt->close();
$conn->close();
?>
