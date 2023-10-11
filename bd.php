<?php
$servername = "localhost"; 
$username = "anto";
$password = "Lara1983-";
$database = "pag";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$sql = "INSERT INTO usuarios (nombre, apellido, mail, usuario, contraseña) VALUES ('$nombre', '$apellido', '$mail', '$usuario', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

$conn->close();
?>
