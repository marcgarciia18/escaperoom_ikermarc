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
            </div>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <h2 class="hero-title">Nivel 4: Juego de Memoria</h2>
                <div class="memory-game">
                    <div class="memory-card" data-framework="a">
                        <img class="front-face" src="../img/memory/1.jpg" alt="A" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="a">
                        <img class="front-face" src="../img/memory/1.jpg" alt="A" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="b">
                        <img class="front-face" src="../img/memory/2.jpg" alt="B" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />
                    </div>
                    <div class="memory-card" data-framework="b">
                        <img class="front-face" src="../img/memory/2.jpg" alt="B" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />

                    </div>
                    <div class="memory-card" data-framework="c">
                        <img class="front-face" src="../img/memory/3.jpg" alt="C" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />

                    </div>
                    <div class="memory-card" data-framework="c">
                        <img class="front-face" src="../img/memory/3.jpg" alt="C" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />

                    </div>
                    <div class="memory-card" data-framework="d">
                        <img class="front-face" src="../img/memory/4.jpeg" alt="D" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />

                    </div>
                    <div class="memory-card" data-framework="d">
                        <img class="front-face" src="../img/memory/4.jpeg" alt="D" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />

                    </div>
                    <div class="memory-card" data-framework="e">
                        <img class="front-face" src="../img/memory/5.jpg" alt="E" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />

                    </div>
                    <div class="memory-card" data-framework="e">
                        <img class="front-face" src="../img/memory/5.jpg" alt="E" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />

                    </div>
                    <div class="memory-card" data-framework="f">
                        <img class="front-face" src="../img/memory/6.jpg" alt="F" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />

                    </div>
                    <div class="memory-card" data-framework="f">
                        <img class="front-face" src="../img/memory/6.jpg" alt="F" />
                        <img class="back-face" src="../img/memory/back.jpg" alt="Back" />

                    </div>
                </div>
            </div>
        </div>  
    </div>
    <script src="../scripts.js"></script>
</body>
</html>