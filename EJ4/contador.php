<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Archivo para acumular el numero de visitas 
    $archivo = "contador.dat"; 
    // Abrir el archivo para lectura  
    $abrir = fopen($archivo, "r"); 
    // Leer el contenido del archivo 
    $cont = fread($abrir, filesize($archivo)); 
    // Cerrar el archivo 
    fclose($abrir); 
    // Abrir nuevamente el archivo para escritura 
    $abrir = fopen($archivo, "w"); 
    // Agregar 1 visita 
    $cont = $cont + 1; 
    // Guardar la modificación  
    $guardar = fwrite($abrir, $cont); 
    // Cerrar el archivo 
    fclose($abrir); 
    // Mostrar el total de visitas  
    echo "<font face='arial' size='3'>Cantidad de visitas:".$cont."</font>"; 
    ?>
</body>
</html>