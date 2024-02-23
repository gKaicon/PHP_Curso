<?php

$preco = $_GET["a"];

echo "Preço do produto R$ " . number_format($preco, 2);
$preco -= ($preco * 0.1);
echo "<br>Preço do produto com desconto R$ " . number_format($preco, 2);

$preco = $_GET["a"];
echo "<br>Preço do produto R$ " . number_format($preco, 2);
$preco += ($preco * 0.1);
echo "<br>Preço do produto com Acressimo R$ " . number_format($preco, 2);

$anoAtual = $_GET["ano"];
echo "<br> O ano atual é $anoAtual e o ano anterior é " . --$anoAtual;
$anoAtual++;
echo "<br> O ano atual é $anoAtual e o próximo ano é " . $anoAtual++;
echo "<br>Valores referencia";
$a = 3;
$b = &$a;
echo "<br> Antes do incremento $a e $b";
$b+=5;
echo "<br> Após incremento $a e $b";
echo "<br>";
echo "<br>";
