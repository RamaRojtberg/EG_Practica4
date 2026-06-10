<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $destino = "ramirorojtberg@gmail.com";
    $asunto = "Comentario";

    $cuerpo = "
    <html>
    <body>
    <h2>Nueva consulta</h2>

    <p><strong>Nombre:</strong> {$_POST['nombre']}</p>
    <p><strong>Email:</strong> {$_POST['email']}</p>
    <p><strong>Consulta:</strong> {$_POST['texto']}</p>

    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: " . $_POST['email'] . "\r\n";

    mail($destino, $asunto, $cuerpo, $headers);

    echo "Su consulta ha sido enviada.";
    
    ?>
</body>
</html>