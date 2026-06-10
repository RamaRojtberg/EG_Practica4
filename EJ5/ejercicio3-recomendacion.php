<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $amigo = $_POST['amigo'];

    $asunto = "Te recomiendo visitar este sitio";

    $mensaje = "
    Hola: $nombre ($email) te recomienda visitar nuestro sitio web.

    https://www.google.com

    Saludos.";

    $headers = "From: $email\r\n";

    mail($amigo, $asunto, $mensaje, $headers);

    echo "La recomendación fue enviada correctamente.";

    ?>
</body>
</html>