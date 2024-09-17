<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>

<body>


    <?php

    function suma($num1, $num2){
        return $num1 + $num2;
    }
    function multiplicacio($num1, $num2){
        return $num1 * $num2;
    }

    if (!isset($_POST["number1"]) && !isset($_POST["number2"]) && !isset($_POST["operacio"])) { ?>

        <form action="ex3.php" method="post">
            <div>
                <label>Escriu el primer número: </label>
                <input type="number" name="number1">
            </div>
            <div>
                <label> Escriu el segon número: </label>
                <input type="number" name="number2">
            </div>
            <div>
                <label>Vols multiplicar-los o sumar-los?</label>
                <input type="text" name="operacio">
            </div>
            <button type="submit">Enviar</button>
        </form>

    <?php
    } else {
        if ($_POST["operacio"] == "sumar") {
            echo "El resultat de la suma és: " . suma($_POST["number1"], $_POST["number2"]);
        } else if ($_POST["operacio"] == "multiplicar") {
            echo "El resultat de la multiplicació és: " . multiplicacio($_POST["number1"], $_POST["number2"]);
        }
    }
    ?>
</body>

</html>