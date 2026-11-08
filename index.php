<?php
session_start();
// Añadidas las 3 nuevas palabras al final del array
$palabras = ['elefante', 'jirafa', 'hipopotamo', 'rinoceronte', 'cocodrilo', 'camello', 'chimpance', 'javascript', 'servidor', 'github'];

if (!isset($_SESSION['palabra'])) {
    $_SESSION['palabra'] = $palabras[array_rand($palabras)];
    $_SESSION['vidas'] = 6;
    $_SESSION['letras_acertadas'] = str_repeat('?', strlen($_SESSION['palabra']));
    $_SESSION['letras_usadas'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['letra'])) {
    $letra = strtolower($_POST['letra']);
    if (in_array($letra, $_SESSION['letras_usadas'])) {
        $mensaje = "Ya has usado la letra '$letra'. Intenta con otra.<br>";
    } else { 
        $_SESSION['letras_usadas'][] = $letra;
        if (strpos($_SESSION['palabra'], $letra) !== false) {
            for ($i = 0; $i < strlen($_SESSION['palabra']); $i++) { 
                if ($_SESSION['palabra'][$i] == $letra) {
                    $_SESSION['letras_acertadas'][$i] = $letra;
                }
            }
        } else {
            $_SESSION['vidas']--;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ahorcado</title>
    <!-- Enlace al archivo CSS añadido por el Desarrollador A -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Juego del Ahorcado</h1>
    <?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>
    <p>Palabra secreta: <?php echo $_SESSION['letras_acertadas']; ?></p>
    <p>Vidas restantes: <?php echo $_SESSION['vidas']; ?></p>
    
    <!-- Lógica de redirección a ganar.php y perder.php añadida por el Desarrollador B -->
    <?php if ($_SESSION['letras_acertadas'] == $_SESSION['palabra']): ?>
        <script>window.location.href = 'ganar.php';</script>
    <?php elseif ($_SESSION['vidas'] <= 0): ?>
        <script>window.location.href = 'perder.php';</script>
    <?php else: ?>
        <form method="post">
            <label for="letra">Introduce una letra:</label>
            <input type="text" name="letra" id="letra" maxlength="1" required>
            <button type="submit">Adivinar</button>
        </form>
    <?php endif; ?>
    
    <p>Letras usadas: <?php echo implode(', ', $_SESSION['letras_usadas']); ?></p>
</body>
</html>