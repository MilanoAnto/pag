<?php
/*$servername = "localhost"; 
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

$sql = "INSERT INTO Usuarios (nombre, apellido, mail, usuario, contraseña) VALUES ('$usuario', '$nombre', '$apellido', '$mail',  '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

$conn->close(); */

error_reporting(E_ERROR);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "anto";
$password = "Lara1983-";
$database = "web";

$conn = new mysqli($servername, $username, $password, $database);

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$sql = "INSERT INTO Usuarios (nombre, apellido, mail, usuario, contraseña) VALUES ('$usuario', '$nombre', '$apellido', '$mail',  '$contraseña')";

if ($conn->query($sql)) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
