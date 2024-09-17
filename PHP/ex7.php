<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = $_POST["numero"];
    function esPrimo ($numero){
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
    }
    echo "\n";
    $count = $numero;
    $i = 1;

    while($count > 0){
        if(esPrimo($i)){
            echo "<br>" . $i;
            $count--;
        }
        $i++;
    }
?>

<form action="ex7.php" method="post">
    <label>Escribe un numero: </label>
    <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>
</body>
</html>