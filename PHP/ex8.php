<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $n = $_POST["numero"];
    function fib($n){
        if ($n < 2){
            return $n;
        } else {
            return fib($n - 1) + fib($n - 2);
        }
    }
    
    echo fib($n);
    ?>

    <form action="ex8.php" method="post">
        <label>Introdueix un número</label>
        <input type="number" name="numero">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>