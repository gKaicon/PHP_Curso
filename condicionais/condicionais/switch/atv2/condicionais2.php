<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dia = isset($_GET["dia"]) ? $_GET["dia"] : 0;
        switch ($dia) {
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Vai para a escola";
                break;
            case 6:
            case 7:
                echo "Descanse meu caro";
            default:
                echo "Entrada errada";
                break;
        }
    ?>
</body>
</html>
