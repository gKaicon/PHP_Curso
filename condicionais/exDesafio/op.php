<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
        $m = ($n1+$n2)/2;
        echo "A média entre $n1 e $n2 é igual a $m<br>Situação do aluno: ";
        if ($m<5) {
            $situacao = "REPROVADO";
            $cor = "red";
        }
        if ($m>5 && $m<=6) {
            $situacao = "RECUPERAÇÃO";
            $cor = "yellow";
        }
        elseif ($m>6) {
            $situacao = "APROVADO";
            $cor = "green";
        }
        ?>
        <style>
            span.situation{
                color: <?php echo $cor;?>;
            }
        </style>
    <span class="situation"><?php echo $situacao;?></span>
    <br>
    <input type="button" value="Voltar" onclick="window.location.href='pag.html'">
</body>
</html>