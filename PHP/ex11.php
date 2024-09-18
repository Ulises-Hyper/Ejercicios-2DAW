<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $cadena = isset($_POST["cadena"]) ? $_POST["cadena"] : '';
    ?>

    <form action="ex11.php" method="post">
        <label>Introdueix una paraula o cadena</label>
        <input type="text" name="cadena">
        <button type="submit">Enviar</button>
    </form>

    <?php

        function invertirCadena($str){
            $length = strlen($str);
            for ($i = ($length - 1); $i >= 0; $i--) {
                echo $str[$i];
            }
        }

        invertirCadena($cadena);

    ?>
</body>

</html>