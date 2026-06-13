<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad de Guayaquil - Tarea GET y POST en PHP</title>
    <link rel="stylesheet" href="bases_php/css/estilos.css">
</head>
<body>

    <header>
        <h1>Universidad de Guayaquil</h1>
        <p>Demostración de Métodos GET y POST en PHP</p>
    </header>

    <nav>
        <a href="index.php?seccion=Inicio">Inicio</a>
        <a href="index.php?seccion=Unidades">Unidades</a>
        <a href="index.php?seccion=Contacto">Contacto</a>
    </nav>

    <div class="container">
        <h2>Sección Activa (Respuesta GET)</h2>
        <?php
        // Validamos si se ha enviado la variable 'seccion' por GET
        if (isset($_GET['seccion'])) {
            $seccion_seleccionada = htmlspecialchars($_GET['seccion']);
            echo "<div class='alert'>📌 Se ha seleccionado la sección: <strong>" . $seccion_seleccionada . "</strong></div>";
        } else {
            echo "<p>Por favor, haz clic en un enlace del menú superior para probar el método GET.</p>";
        }
        ?>
    </div>

    <div class="container">
        <h2>Formulario de Contacto (Método POST)</h2>
        <form action="bases_php/php/bases.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Ingresa tu primer nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required placeholder="Ingresa tu apellido">
            </div>
            <div class="form-group">
                <label for="numero">Número de Teléfono:</label>
                <input type="text" id="numero" name="numero" required placeholder="Ej. 0999999999">
            </div>
            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" required placeholder="ejemplo@correo.com">
            </div>
            <button type="submit">Enviar Información</button>
        </form>
    </div>

    <script src="bases_php/js/script.js"></script>
</body>
</html>