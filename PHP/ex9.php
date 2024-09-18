<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num1 = $_POST["numero"];
    function Factorial($num1){
        $factorial = 1;
        for ($i = 0; $i < $num1; $i++) {
            $factorial = $num1 * Factorial($num1 - 1);
        }
        return $factorial;
    }

    echo Factorial($num1);
    ?>

    <form action="ex9.php" method="post">
        <label>Escribe un número (factorial): </label>
        <input type="number" name="numero">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>