<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicis</title>
</head>
<body>
    <?php if(!isset($_POST["name"]) && !isset($_POST["number"]) ){ ?>
    <div>
        <form action="index.php" method="post">
            <div>
                <label for="">Hola, com et dius?</label>
                <input type="text" name="name" />
            </div>
            <div>
                <label for="repetir">Quantes vegades?</label>
                <input type="number" name="number">
            </div>
            <button type="submit">Saluda!</button>
        </form>
    </div>
    <?php } else {
        for($i = 1; $i <= $_POST["number"]; $i++){
    ?>

    <div>
        <h2><?php echo "Hello " . $_POST["name"] . " " . $i; ?></h2>
    </div>

    <?php }
    }
    ?>
</body>
</html>