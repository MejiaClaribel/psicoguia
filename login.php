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
include 'db.php';  // Incluir la conexión a la base de datos
session_start();  // Iniciar la sesión

// Recibir datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Buscar el usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Verificar la contraseña
    if (password_verify($password, $user['password'])) {
        // Iniciar la sesión
        $_SESSION['usuario_id'] = $user['id'];

        // Redirigir al formulario de preguntas
        header("Location: formulario_preguntas.php");
        exit();  // Asegurarse de que el código se detiene después de la redirección
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "El usuario no existe.";
}

$conn->close();
?>