<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"]: "[não informado]";
        $ano = isset($_GET["anoNasc"]) ? $_GET["anoNasc"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";

        $idade = (intval(date("Y")) - intval($ano) == intval(date("Y"))) ? "sem idade" : "tem" . (date("Y")) - intval($ano) . "anos";

        echo "$nome é $sexo e nasceu em $ano e $idade";
    ?>
    <a href="form2.html">Voltar</a>
</body>
</html>