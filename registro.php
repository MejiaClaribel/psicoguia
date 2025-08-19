<!DOCTYPE html>
<html lang="es">
include 'index.html';
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Psicoguía</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center; 
            align-items: center;    
        }

<?php
include 'db.php';  // Conexión a la base de datos

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Encriptar la contraseña

// Insertar en la base de datos
$sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: formulario_preguntas.php");
exit();

?>

