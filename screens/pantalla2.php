<?php
session_start(); 
if (!isset($_SESSION['fase']) || $_SESSION['fase'] < 1) {
    header('Location: ../index.php'); 
    exit;
}
if ($_SESSION['fase'] != 1) {
    echo "<script>alert('Acción prohibida'); window.location.href = '../index.php';</script>";
    exit;
}
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 4; // Asegurar que el contador de intentos esté en 4
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuesta = $_POST['respuesta'];
    if (strtolower($respuesta) === 'stranger things') {
        $_SESSION['fase'] = 2; 
        header('Location: pantalla3.php');
        exit;
    } else {
        $_SESSION['intentos']--;

        if ($_SESSION['intentos'] === 0) {
            header('Location: has-perdido.php');
            exit;
        } else {
            $pista = "Pista: La serie trata sobre eventos sobrenaturales en un pequeño pueblo.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room Netflix - Nivel 2</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <link rel="shortcut icon" href="../logo2.png" type="image/x-icon">
</head>
<body>
    <div id="nivel2" class="netflix-bg">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo2.png" alt="Netflix Logo" class="netflix-logo">
                </a>
            </div>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <h2 class="hero-title">Nivel 2</h2>
                <h2 class="hero-subtitle">Cual es la serie mas vista de todos los tiempos</h2>
                <img src="../img/pregunta2.jpg" alt="Pregunta 2" class="pregunta-img">
                <form method="POST" action="pantalla2.php">
                    <div class="form-group">
                        <input type="text" name="respuesta" class="form-control" placeholder="Escribe tu respuesta aquí">
                    </div>
                    <button type="submit" class="btn btn-danger">Enviar</button>
                </form>
                <p class="intentos">Intentos restantes: <?php echo $_SESSION['intentos']; ?></p>
                <?php if (isset($pista)) { echo "<p class='pista'>$pista</p>"; } ?>
            </div>
        </div>
    </div>
    <script src="../scripts.js"></script>
</body>
</html>