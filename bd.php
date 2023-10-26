<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "18.118.253.245";
$username = "anto";
$password = "Lara1983-";
$database = "pag";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    // Registrar el error en un archivo de registro
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
$apellido = mysqli_real_escape_string($conn, $_POST['apellido']);
$mail = mysqli_real_escape_string($conn, $_POST['mail']);
$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$contraseña = mysqli_real_escape_string($conn, $_POST['contraseña']);

$sql = "INSERT INTO usuarios (nombre, apellido, mail, usuario, contrasena) VALUES ('$nombre', '$apellido', '$mail', '$usuario', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    // Registrar el error en un archivo de registro
    echo "Error al registrar: " . $conn->error;
}

$conn->close();
?>
