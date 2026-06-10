<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Esta es la página de inicio</h1>
    
    <?php
    if (!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 1;
    }else{
    $_SESSION["contador"]++;
    } ?>

    <h2>Llevas visitadas <?php echo $_SESSION["contador"]; ?> páginas</h2>

    <a href= "ejercicio4-2dapagina.php">Otra pagina</a>

    <a href="ejercicio4-resetear.php">Click aquí si desea resetear el contador</a>
</body>
</html>