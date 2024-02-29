<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $value = $_GET["v"];
    echo "A raiz quadrada de $value é " . number_format(sqrt($value), 2);
    ?>
    <br>
    <a href="form1.html">Voltar</a>
</body>

</html>