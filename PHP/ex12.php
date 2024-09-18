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

        <form action="ex12.php" method="post">
            <label>Introdueix una paraula o cadena</label>
            <input type="text" name="cadena">
            <button type="submit">Enviar</button>
        </form>

        <?php

        function invertirCadena($str){
            $cadenaInvertida = "";
            $length = strlen($str) - 1;
            for ($i = $length; $i >= 0; $i--) {
                $cadenaInvertida .= $str[$i];
            }

            if ($cadenaInvertida == $str) {
                echo $str . " és un palindrom";
            } else if($cadenaInvertida != $str) {
                echo $str . " no és un palindrom";
            }
        }

        invertirCadena($cadena);

    ?>
</body>

</html>