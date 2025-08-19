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
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    die("Por favor, inicie sesión para enviar respuestas.");
}

$usuario_id = $_SESSION['usuario_id'];  // Obtener el ID del usuario logueado
$pregunta1 = $_POST['pregunta1'];
$pregunta2 = $_POST['pregunta2'];
$pregunta1 = $_POST['pregunta3'];
$pregunta1 = $_POST['pregunta4'];
$pregunta1 = $_POST['pregunta5'];
$pregunta1 = $_POST['pregunta6'];
$pregunta1 = $_POST['pregunta7'];
$pregunta1 = $_POST['pregunta8'];
$pregunta1 = $_POST['pregunta9'];
$pregunta1 = $_POST['pregunta10'];
$pregunta1 = $_POST['pregunta11'];
$pregunta1 = $_POST['pregunta12'];
$pregunta1 = $_POST['pregunta13'];

// Guardar las respuestas en la base de datos
$sql = "INSERT INTO respuestas (usuario_id, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8,pregunta9,pregunta10,pregunta11,pregunta12,pregunta13, ) 
        VALUES ('$usuario_id', '$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4','$pregunta5','$pregunta6','$pregunta7','$pregunta8','$pregunta9','$pregunta10','$pregunta11','$pregunta12','$pregunta13' )";

if ($conn->query($sql) === TRUE) {
    echo "Respuestas guardadas exitosamente.";
} else {
    echo "Error al guardar las respuestas: " . $conn->error;
}

$conn->close();
?>
