<?php

$preco = $_GET["a"];
echo "Descontos e acressimos";
echo "<br>";
echo "<br>";
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
echo "<br>";
echo "<br>";
echo "<br>Valores referencia";
$a = 3;
$b = &$a;
echo "<br> Antes do incremento $a e $b";
$b += 5;
echo "<br> Após incremento $a e $b";
// comenta assim
#  assim também
/* Assim também da */
echo "<br>";
echo "<br>";
echo "Referencia de referencia";

$site = "cursoemvideo";
$$site = "cursoPHP";
/*

$site = "cursoemvideo";
$$site = "cursoPHP";

é o mesmo que 
$cursoemvideo = "cursoPHP"

*/

echo "<br>" . $site;
echo "<br>" . $$site;

$x = "abc";
$$x = "def";

echo "<br>O conteudo de x é $x <br>";
echo "O conteudo de $$ x é $abc <br>";