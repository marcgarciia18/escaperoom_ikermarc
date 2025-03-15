<?php
session_start(); 
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 4; // Asegurar que el contador de intentos esté en 4
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuesta = $_POST['respuesta'];

    if ($respuesta === 'correcta') {
        header('Location: has-ganado.php');
        exit;
    } else {
        $_SESSION['intentos']--;

        if ($_SESSION['intentos'] === 0) {
            header('Location: has-perdido.php');
            exit;
        } else {
            $pista = "Pista: El nombre comienza con 'C'.";
        }
    }
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
    <div id="nivel1" class="netflix-bg">
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo2.png" alt="Netflix Logo" class="netflix-logo">
                </a>
            </div>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <h2 class="hero-title">Nivel 4: Fase Final</h2>
                <h2 class="hero-subtitle">En la película El Club de la Lucha, ¿cuál es el verdadero nombre del personaje interpretado por Edward Norton, que sufre de insomnio y crea un alter ego llamado Tyler Durden para escapar de su vida monótona?</h2>
                <img src="../img/pregunta4.jpg" alt="Pregunta 1" class="pregunta-img">
                <form method="POST" action="">
                    <div class="opciones">
                        <label class="btn-opcion">
                            <input type="radio" name="respuesta" value="incorrecta"> Jack
                        </label>
                        <label class="btn-opcion">
                            <input type="radio" name="respuesta" value="incorrecta"> Robert Paulson
                        </label>
                        <label class="btn-opcion">
                            <input type="radio" name="respuesta" value="correcta"> Cornelius
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