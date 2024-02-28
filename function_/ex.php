<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function soma()
    {
        $indiceParametros = func_get_args();
        $totalParametros = func_num_args();
        $s = 0;
        for ($i = 0; $i < $totalParametros; $i++) {
            $s += $indiceParametros[$i];
        }
        return $s;
    }
    $soma = soma(12,8,9,1);
    echo "A soma é $soma";

    ?>
</body>

</html>