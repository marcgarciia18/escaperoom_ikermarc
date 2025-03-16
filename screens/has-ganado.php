<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Has Ganado!</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css"> 
</head>
<body>
    <div id="has-ganado" class="netflix-bg">
        <nav class="navbar">
            <div class="container">
            </div>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <h2 class="hero-title">¡Felicidades, has ganado!</h2>
                <p class="hero-subtitle">Has resuelto todos los acertijos y completado el escape room.</p>
                <a href="../index.php" class="btn btn-danger">Volver al Inicio</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
    <script src="../scripts.js"></script>
</body>
</html>