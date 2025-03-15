<?php
session_start(); 
session_destroy(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room Netflix - Has Perdido</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <link rel="shortcut icon" href="../logo2.png" type="image/x-icon">
</head>
<body>
    <div id="has-perdido" class="netflix-bg">
        <div class="hero">
            <div class="hero-content">
                <h2 class="hero-title">¡Has perdido!</h2>
                <p class="hero-subtitle">No te rindas, inténtalo de nuevo :D.</p>
                <a href="../index.php" class="btn btn-danger">Reintentar</a>
            </div>
        </div>
    </div>
</body>
</html>