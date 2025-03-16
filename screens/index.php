<?php
session_start(); 
if (!isset($_SESSION['fase']) || $_SESSION['fase'] < 0) {
    header('Location: ../index.php'); 
    exit;
}
if ($_SESSION['fase'] != 0) {
    echo "<script>alert('Acción prohibida'); window.location.href = '../index.php';</script>";
    exit;
}
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 4; // Asegurar que el contador de intentos esté en 4
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuesta = $_POST['respuesta'];
    if ($respuesta === 'correcta') {
        $_SESSION['fase'] = 1; 
        header('Location: pantalla2.php');
        exit;
    } else {
        $_SESSION['intentos']--;

        if ($_SESSION['intentos'] === 0) {
            header('Location: has-perdido.php');
            exit;
        } else {
            $pista = "Pista: La serie es sobre un grupo de atracadores.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room Netflix - Nivel 1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <link rel="shortcut icon" href="../logo2.png" type="image/x-icon">
</head>
<body>
    <div id="nivel1" class="netflix-bg">
        <nav class="navbar">
            <div class="container">
            </div>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <h2 class="hero-title">Nivel 1</h2>
                <h2 class="hero-subtitle">¿Qué serie de Netflix se convirtió en un fenómeno mundial por su trama sobre un grupo de atracadores que asaltan la Fábrica Nacional de Moneda y Timbre de España?</h2>
                <img src="../img/pregunta1.webp" alt="Pregunta 1" class="pregunta-img">
                <form method="POST" action="index.php">
                    <div class="opciones">
                        <label class="btn-opcion">
                            <input type="radio" name="respuesta" value="correcta">
                            <span>La Casa de Papel</span>
                        </label>
                        <label class="btn-opcion">
                            <input type="radio" name="respuesta" value="incorrecta">
                            <span>Narcos</span>
                        </label>
                        <label class="btn-opcion">
                            <input type="radio" name="respuesta" value="incorrecta">
                            <span>Elite</span>
                        </label>
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