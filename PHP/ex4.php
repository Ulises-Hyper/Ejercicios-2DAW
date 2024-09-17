<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function esPrimo ($numero){
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return $numero . " no es primo";
        }
    }
    return $numero . " es primo";
    }
    echo "\n";
    echo esPrimo(numero: 6);
?> 
</body>
</html>