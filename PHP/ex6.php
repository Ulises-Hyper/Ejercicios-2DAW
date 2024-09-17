<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        function mcd($a,$b){
            if ($b == 0) return $a;
            return mcd($b, $a % $b); 
        }
        function mcm($a,$b){
            if ($b == 0) return $a;
            return ($a * $b) / mcd($a,$b);
        }    
    ?>

    <form action="ex6.php" method="post">
        <label>Escriu un número: </label>
        <input type="number" name="numero1">
        <label>Escriu un altre número: </label>
        <input type="number" name="numero2">
        <button type="submit">Enviar</button>
    </form>

    <?php 
        echo "El mcd de " . $_POST["numero1"] . " i " . $_POST["numero2"] . " es " . mcd($_POST["numero1"], $_POST["numero2"]) . "<br>";
        echo "El mcm de " . $_POST["numero1"] . " i " . $_POST["numero2"] . " es " . mcm($_POST["numero1"], $_POST["numero2"]);
    ?>

</body>
</html>