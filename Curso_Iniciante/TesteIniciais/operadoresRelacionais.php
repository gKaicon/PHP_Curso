<?php
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$op = $_GET["o"];

echo "<br> Valores recebidos $n1 e $n2";
echo "<br>" . (($op == "s") ? "Soma: " . $n1 + $n2 : "Multiplicação: " . $n1 * $n2);

$a = 3;
$b = "3";

echo "<br> Conteudo de a:$a e b:$b são identicas? " . (($a == $b) ? "Sim" : "Não");
echo "<br> Conteudo e tipo de a:$a e b:$b são identicas? " . (($a === $b) ? "Sim" : "Não");
$m = ($n1+$n2)/2;
echo "<br>A média entre $n1 e $n2 é " . $m;
echo "<br>A situação do aluno é " . (($m >= 6) ? "Aprovado": "Reprovado");
