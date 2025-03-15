<?php
session_start(); 
$_SESSION['fase'] = 0; 
$_SESSION['intentos'] = 4; // Reiniciar el contador de intentos a 4
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room Netflix</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css">
    <link rel="shortcut icon" href="./logo2.png" type="image/x-icon">
</head>
<body>
    <div class="netflix-intro">
        <img src="img/netflix_logo.png" alt="Netflix Logo" class="netflix-logo">
    </div>
    <div id="inicio" class="netflix-bg">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/logo2.png" alt="Netflix Logo" class="netflix-logo">
                </a>
            </div>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Bienvenido a Escape Room Netflix</h1>
                <p class="hero-subtitle">¿Estás listo para resolver el misterio?</p>
                <a href="./screens/index.php" class="btn btn-danger btn-lg">Comenzar</a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                document.querySelector('.netflix-intro').style.display = 'none';
            }, 5000);
        });
    </script>
    <script src="./scripts.js"></script>
</body>
</html>