<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Esta es la página secundaria</h1>
    <h2>Deseas volver a la principal?</h2>

    
    <?php
    echo "Hasta ahora visitaste " .($_SESSION["contador"])." páginas";
    ?>
    <br>
    <br>
    <a href="ejercicio4.php">Volver</a> 
</body>
</html>