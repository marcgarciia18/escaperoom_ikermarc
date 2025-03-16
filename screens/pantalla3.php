<?php
session_start(); 
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 4; // Asegurar que el contador de intentos esté en 4
    $_SESSION['pista_index'] = 0; // Inicializar el índice de la pista
}
$pistas = [
    "Pista: La serie es sobre la monarquía británica.",
    "Pista: Brilla y hace destacar a la reina.",
    "Pista: La corona en inglés es..."
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuesta = $_POST['respuesta'];
    if (strtolower($respuesta) === 'the crown') {
        header('Location: pantalla4.php');
        exit;
    } else {
        $_SESSION['intentos']--;
        if ($_SESSION['intentos'] === 0) {
            header('Location: has-perdido.php');
            exit;
        } else {
            $pista = $pistas[$_SESSION['pista_index']];
            $_SESSION['pista_index'] = ($_SESSION['pista_index'] + 1) % count($pistas); // Cambiar a la siguiente pista
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room Netflix - Nivel 3</title>
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
            <div class="hero-content text-center">
                <h2 class="hero-title">Nivel 3</h2>
                <h2 class="hero-subtitle">¿Qué serie de Netflix, basada en la vida de la reina Isabel II, explora los conflictos políticos, personales y sociales de la monarquía británica durante su reinado, y ha sido aclamada por su precisión histórica y actuaciones?</h2>
                <img src="../img/pregunta3.jpg" alt="Pregunta 1" class="pregunta-img">
                <form method="POST" action="">
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