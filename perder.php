<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Has Perdido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="text-align: center; margin-top: 50px;">
        <h1 style="color: #c0392b;">¡Oh no, has perdido! 😢</h1>
        <p>Te has quedado sin vidas y no has podido adivinar la palabra.</p>
        <br>
        <form action="index.php" method="POST">
            <button type="submit" name="reiniciar" value="1" style="padding: 10px 20px; background-color: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Jugar de nuevo</button>
        </form>
    </div>
</body>
</html>