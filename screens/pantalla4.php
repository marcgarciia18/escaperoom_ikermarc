<?php
session_start(); 
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 4; // Asegurar que el contador de intentos esté en 4
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room Netflix - Nivel 4</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div id="nivel4" class="netflix-bg">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo2.png" alt="Netflix Logo" class="netflix-logo">
                </a>
            </div>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <h2 class="hero-title">Nivel 4: Juego de Memoria</h2>
                <div class="memory-game">
                    <div class="memory-card" data-framework="a">
                        <img class="front-face" src="../img/1.jpg" alt="A" />
                        <img class="back-face" src="../img/pregunta4/back.jpeg" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="a">
                        <img class="front-face" src="../img/1.jpg" alt="A" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="b">
                        <img class="front-face" src="../img/b.png" alt="B" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="b">
                        <img class="front-face" src="../img/b.png" alt="B" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="c">
                        <img class="front-face" src="../img/c.png" alt="C" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="c">
                        <img class="front-face" src="../img/c.png" alt="C" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="d">
                        <img class="front-face" src="../img/d.png" alt="D" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="d">
                        <img class="front-face" src="../img/d.png" alt="D" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="e">
                        <img class="front-face" src="../img/e.png" alt="E" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="e">
                        <img class="front-face" src="../img/e.png" alt="E" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="f">
                        <img class="front-face" src="../img/f.png" alt="F" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="f">
                        <img class="front-face" src="../img/f.png" alt="F" />
                        <img class="back-face" src="../img/back.png" alt="Back" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../scripts.js"></script>
</body>
</html>