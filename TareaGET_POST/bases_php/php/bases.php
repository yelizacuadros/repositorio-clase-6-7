<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor - Datos Recibidos</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

    <header>
        <h1>Universidad de Guayaquil</h1>
        <p>Procesamiento de Datos del Lado del Servidor</p>
    </header>

    <div class="container">
        <h2>Datos Recibidos en el Servidor (Método POST)</h2>
        
        <?php
        // Validamos si el formulario fue enviado mediante el método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recibimos los datos de manera segura con htmlspecialchars
            $nombre = htmlspecialchars($_POST['nombre']);
            $apellido = htmlspecialchars($_POST['apellido']);
            $numero = htmlspecialchars($_POST['numero']);
            $correo = htmlspecialchars($_POST['correo']);
            
            echo "<div class='alert alert-post'>";
            echo "👤 <strong>Nombre:</strong> " . $nombre . "<br>";
            echo "👤 <strong>Apellido:</strong> " . $apellido . "<br>";
            echo "📞 <strong>Número de Teléfono:</strong> " . $numero . "<br>";
            echo "📧 <strong>Correo electrónico:</strong> " . $correo;
            echo "</div>";
        } else {
            echo "<p>No se han recibido datos por el método POST.</p>";
        }
        ?>

        <br>
        <a href="../index.php" class="btn-regresar">⬅️ Volver al Formulario</a>
    </div>

</body>
</html>