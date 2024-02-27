<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = isset($_GET["n"]) ? $_GET["n"] : 0;
        $oper = isset($_GET["oper"]) ? $_GET["oper"] : 1;
        echo "O número é $num <br>";
        switch ($oper) {
            case 1:
                $num *= 2;
                break;
            case 2:
                $num = pow($num, 3);
                break;
            case 3:
                $num = sqrt($num);
                break;
            default:
                echo "Erro!";
                break;
        }
        echo "O resultado é $num";
    ?>
</body>
</html>