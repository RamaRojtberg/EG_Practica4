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
    $asunto = "Presupuesto";

    $cuerpo = "
    <html>
    <body>
    <h2>Nueva consulta</h2>

    <p><strong>Nombre:</strong> Juan Gimenez</p>
    <p><strong>Email:</strong> juang22@gmail.com</p>
    <p><strong>Consulta:</strong> Deseo presupuestar un pedido.</p>

    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: juang22@gmail.com\r\n";

    mail($destino, $asunto, $cuerpo, $headers);

    echo "Su consulta ha sido enviada.";
    
    ?>
</body>
</html>