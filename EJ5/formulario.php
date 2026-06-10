<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$destinatario = "xx@xx.com ";
$asunto = "Prueba";
$cuerpo = '
<html>
<head>
 <title>Envio de mail</title>
</head>
<body>
<h1>Hola!</h1>
<p>
<b>Esto es una prueba</b>.
xxxxxxxxxxxxxxxxxxxxxxxxxxx
x
</p>
</body>
</html>
';

// Para enviar un correo HTML
//debe establecerse la cabecera Content-type
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859- 1\r\n";
//dirección del remitente concatenada con otras direcciones
$headers .= "From: NN <nn@nn.com>\r\n";
//dirección de respuesta distinta que la del remitente
$headers .= "Reply-To: ss@ss.com\r\n";
//direcciones que reciben copia
$headers .= "Cc: yy@yy.com\r\n";
//direcciones que reciben copia oculta
$headers .= "Bcc: zz@zz.com, pp@pp.com\r\n";

mail($destinatario,$asunto,$cuerpo, $headers);
?>

<form action="enviar.php" method="post">
<fieldset>
<p><label> Nombre <input type="text" name="nombre" size="25" /></label></p>
<p><label> Email <input type="text" name="email" size="25" /> </label></p>
Comentario
<p><label><textarea name="texto" cols="32" rows="6"></textarea></label></p>
<input type="submit" value="Enviar"/>
</fieldset>
</form>

</body>
</html>