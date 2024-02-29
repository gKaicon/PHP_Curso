<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $anoNasc = isset($_GET["anoNasc"]) ? $_GET["anoNasc"] : 1900;
    $idade = date("Y") - $anoNasc;
    echo "Você nasceu em $anoNasc e tem $idade anos<br>";

    if ($idade < 16) {
        $voto = "não vota";
    }
    if ($idade< 18) {
        $dirigir = "não pode dirigir";
    }
    elseif (($idade >= 16 && $idade < 18) || $idade >= 65) {
        $voto = "voto opcional";
        
    } elseif ($idade >= 18 && $idade < 65) {
        $voto = "voto obrigatório";
    }
    if($idade>=18){
        $dirigir = "pode dirigir";
    }
    echo "Direito ao voto: $voto<br>Direito de dirigir: $dirigir";
    ?>
</body>

</html>