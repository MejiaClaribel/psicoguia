
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

        @keyframes crecer {
            0% {
                transform: scale(0.5); /* Inicia pequeño */
                opacity: 0;            /* Inicia transparente */
            }
            100% {
                transform: scale(1);   /* Tamaño normal */
                opacity: 1;            /* Totalmente visible */
            }
        }

        .modal-content {
            background-color: rgba(255, 255, 255, 0.527); /* Fondo blanco semi-transparente */
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            text-align: center; /* Centrar el texto */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra para mejor apariencia */
            animation: crecer 0.5s ease-out forwards; /* Aplicamos la animación */
        }
        
        button {
            background-color: #dd9c90;
            border: none;
            color: rgba(255, 255, 255, 0.534);
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #8acefc93;
        }
    </style>
</head>
<body>
    <div class="modal-content">
        
        <h2>¡Bienvenido a PsicoGuia!</h2>
        <p>Gracias por visitarnos. PsicoGuia te ofrece una experiencia única para explorar tu bienestar emocional. Haz clic en el botón para comenzar.</p>
        <form method="post">
            <button type="submit" name="continuar">Continuar</button>
        </form>
    </div>
</body>
</html>

<?php
include 'db.php';  // Conectar a la base de datos
session_start();  // Iniciar la sesión

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    die("Por favor, inicie sesión para acceder al formulario.");
}

$usuario_id = $_SESSION['usuario_id'];

// Comprobar si el usuario ya ha respondido el formulario
$sql = "SELECT * FROM respuestas WHERE usuario_id='$usuario_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si el usuario ya ha respondido, mostrar las respuestas
    while($row = $result->fetch_assoc()) {
        echo "Ya has respondido: <br>";
        echo "Respuesta 1: " . $row['pregunta1'] . "<br>";
        echo "Respuesta 2: " . $row['pregunta2'] . "<br><br>";
        echo "Respuesta 3: " . $row['pregunta3'] . "<br><br>";
        echo "Respuesta 4: " . $row['pregunta4'] . "<br><br>";
        echo "Respuesta 5: " . $row['pregunta5'] . "<br><br>";
        echo "Respuesta 6: " . $row['pregunta6'] . "<br><br>";
        echo "Respuesta 7: " . $row['pregunta7'] . "<br><br>";
        echo "Respuesta 8: " . $row['pregunta8'] . "<br><br>";
        echo "Respuesta 9: " . $row['pregunta9'] . "<br><br>";
        echo "Respuesta 10: " . $row['pregunta10'] . "<br><br>";
        echo "Respuesta 11: " . $row['pregunta11'] . "<br><br>";
        echo "Respuesta 12: " . $row['pregunta12'] . "<br><br>";
        echo "Respuesta 13: " . $row['pregunta13'] . "<br><br>";
    }
} else {
    // Si el usuario no ha respondido, mostrar el formulario para responder
    ?>
    <form action="respuestas.php" method="POST">
                <legend>Responde las siguientes preguntas</legend>
                    <p>1. ¿Te sientes ansioso con frecuencia?</p>
                    <input type="radio" id="ansiedad-si" name="ansiedad" value="si" required>
                    <label for="ansiedad-si">Sí</label><br>
                    <input type="radio" id="ansiedad-no" name="ansiedad" value="no">
                    <label for="ansiedad-no">No</label><br>
                    <input type="radio" id="ansiedad-talvez" name="ansiedad" value="talvez">
                    <label for="ansiedad-talvez">No lo se</label><br><br>

                    <p>2. ¿Te cuesta dormir por las noches?</p>
                    <input type="radio" id="insomnio-si" name="insomnio" value="si" required>
                    <label for="insomnio-si">Sí</label><br>
                    <input type="radio" id="insomnio-no" name="insomnio" value="no">
                    <label for="insomnio-no">No</label><br>
                    <input type="radio" id="insomnio-talvez" name="insomnio" value="talvez">
                    <label for="insomnio-talvez">No lo se</label><br><br>

                    <p>3. ¿Te sientes comodo con tu circulo social actual?</p>
                    <input type="radio" id="social-si" name="social" value="si" required>
                    <label for="social-si">Sí</label><br>
                    <input type="radio" id="social-no" name="social" value="no">
                    <label for="social-no">No</label><br>
                    <input type="radio" id="social-talvez" name="social" value="talvez">
                    <label for="social-talvez">No lo se</label><br><br>

                    <p>4. ¿Confias en tu juicio personal?</p>
                    <input type="radio" id="personal-si" name="personal" value="si" required>
                    <label for="personal-si">Sí</label><br>
                    <input type="radio" id="personal-no" name="personal" value="no">
                    <label for="personal-no">No</label><br>
                    <input type="radio" id="personal-talvez" name="personal" value="talvez">
                    <label for="personal-talvez">No lo se</label><br><br>

                    <p>5. ¿Te consideras una buena persona?</p>
                    <input type="radio" id="juicio-si" name="juicio" value="si" required>
                    <label for="juicio-si">Sí</label><br>
                    <input type="radio" id="juicio-no" name="juicio" value="no">
                    <label for="juicio-no">No</label><br>
                    <input type="radio" id="juicio-talvez" name="juicio" value="talvez">
                    <label for="juicio-talvez">No lo se</label><br><br>

                    <p>6. ¿Te sientes preocupado por algo especifico en este momento?</p>
                    <input type="radio" id="preocupacion-si" name="preocupacion" value="si" required>
                    <label for="preocupacion-si">Sí</label><br>
                    <input type="radio" id="preocupacion-no" name="preocupacion" value="no">
                    <label for="preocupacion-no">No</label><br>
                    <input type="radio" id="preocupacion-talvez" name="preocupacion" value="talvez">
                    <label for="perocupacion-talvez">No lo se</label><br><br>

                    <p>7. ¿Tienes a alguien cercano con quien hablar de tus problemas personales?</p>
                    <input type="radio" id="cercano-si" name="cercano" value="si" required>
                    <label for="cercano-si">Sí</label><br>
                    <input type="radio" id="cercano-no" name="cercano"value="no">
                    <label for="cercano-no">No</label><br>
                    <input type="radio" id="cercano-talvez" name="cercano" value="talvez">
                    <label for="cercano-talvez">No lo se</label><br><br>

                    <p>8. ¿Tienes dificulates para concentrarte en tus tareas diarias?</p>
                    <input type="radio" id="diario-si" name="diario" value="si" required>
                    <label for="diario-si">Sí</label><br>
                    <input type="radio" id="diario-no" name="diario" value="no">
                    <label for="diario-no">No</label><br>
                    <input type="radio" id="diario-talvez" name="diario" value="talvez">
                    <label for="diario-talvez">No lo se</label><br><br>

                    <p>9. ¿Has notado cambios recientes en tu apetito o habitos alimenticios?</p>
                    <input type="radio" id="alimento-si" name="alimento" value="si" required>
                    <label for="alimento-si">Sí</label><br>
                    <input type="radio" id="alimento-no" name="alimento" value="no">
                    <label for="alimento-no">No</label><br>
                    <input type="radio" id="alimento-talvez" name="alimento" value="talvez">
                    <label for="alimento-talvez">No lo se</label><br><br>

                    <p>10. ¿Te sientes sobrecargado por tus responsabilidades?</p>
                    <input type="radio" id="responsabilidad-si" name="responsabilidad" value="si" required>
                    <label for="responsabilidad-si">Sí</label><br>
                    <input type="radio" id="responsabilidad-no" name="responsabilidad" value="no">
                    <label for="responsabilidad-no">No</label><br>
                    <input type="radio" id="responsabilidad-talvez" name="responsabilidad" value="talvez">
                    <label for="responsabilidad-talvez">No lo se</label><br><br>

                    <p>11. ¿Consideras tener un buen control sobre tus emociones?</p>
                    <input type="radio" id="controlemocion-si" name="controlemocion" value="si" required>
                    <label for="controlemocion-si">Sí</label><br>
                    <input type="radio" id="controlemocion-no" name="controlemocion" value="no">
                    <label for="controlemocion-no">No</label><br>
                    <input type="radio" id="controlemocion-talvez" name="controlemocion" value="talvez">
                    <label for="controlemocion-talvez">No lo se</label><br><br>

                    <p>12. ¿Consideras tener un control sano sobre tus pensamientos?</p>
                    <input type="radio" id="controlpensamiento-si" name="controlpensamiento" value="si" required>
                    <label for="controlpensamiento-si">Sí</label><br>
                    <input type="radio" id="controlpensamiento-no" name="controlpensamiento" value="no">
                    <label for="controlpensamiento-no">No</label><br>
                    <input type="radio" id="controlpensamiento-talvez" name="controlpensamiento" value="talvez">
                    <label for="controlpensamiento-talvez">No lo se</label><br><br>

                    <p>13. ¿Tienes alguna razon/motivacion especifica para asistir a terapia?</p>
                    <input type="radio" id="razon-si" name="razon" value="si" required>
                    <label for="razon-si">Sí</label><br>
                    <input type="radio" id="razon-no" name="razon" value="no">
                    <label for="razon-no">No</label><br>
                    <input type="radio" id="razon-talvez" name="razon" value="talvez">
                    <label for="razon-talvez">No lo se</label><br><br>

        <input type="submit" value="Enviar respuestas">
    </form>
    <?php
}

$conn->close();
?>
