<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $correo = htmlspecialchars($_POST['correo']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $sexo = htmlspecialchars($_POST['sexo']);

 
    $data = "Nombre: $nombre\nApellido: $apellido\nCorreo: $correo\nTeléfono: $telefono\nSexo: $sexo\n\n";

   
    file_put_contents('registros.txt', $data, FILE_APPEND | LOCK_EX);

    
    header("Location: index.html"); 
    exit();
}
?>