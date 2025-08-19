<?php
$servername = "azul";
$username = "root";
$password = "alvarado2205";  
$dbname = "SQL-PsicoGuia"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
