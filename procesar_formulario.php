<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $ansiedad = htmlspecialchars($_POST['ansiedad']);
    $insomnio = htmlspecialchars($_POST['insomnio']);
    $social = htmlspecialchars($_POST['social']);
    $personal = htmlspecialchars($_POST['personal']);
    $buena_persona = htmlspecialchars($_POST['buena_persona']);
    $trabajar_terapia = htmlspecialchars($_POST['trabajar_terapia']);

 
    $data = "Nombre: $nombre\nCorreo: $email\n";
    $data .= "Ansiedad: $ansiedad\nInsomnio: $insomnio\n";
    $data .= "Comodidad con círculo social: $social\n";
    $data .= "Confianza en juicio personal: $personal\n";
    $data .= "Se considera buena persona: $buena_persona\n";
    $data .= "Sabe qué quiere trabajar en terapia: $trabajar_terapia\n\n";

  
    file_put_contents('registros.txt', $data, FILE_APPEND | LOCK_EX);

  
    header("Location: index.html"); 
    exit();
}
?>