<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
</head>
<body>

    <form action="ex5.php" method="post">
        <label>Introdueix un número: </label>
        <input type="number" name="numero">
        <button type="submit">Enviar</button>
    </form>

    <?php 
        for($i = 1; $i < $_POST["numero"]; $i++){
            if($_POST["numero"] % $i == 0){
                echo 'El ' . $_POST["numero"] . ' es divisible per ' . $i . "<br>";
            }
        }
    ?>
</body>
</html>