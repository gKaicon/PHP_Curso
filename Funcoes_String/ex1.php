<?php
$preco = 4.70;
$prod = "Leite";
$nome = "Gabriel Kaicon";
//25 funcoes
// Função printf() : Permite exibir uma string com itens formatados.
// %d = decimal(+-)    ||    %u = decimal(+)    ||    %f = real    ||    %s = string
printf("O %s está custando R$ %.2f", $prod, $preco);
echo "<br>";
// Função print_r() : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.
$x[0] = 4;
$x[1] = 8;
$x[2] = 10;
echo "<br>Print_r";
print_r($x);
echo "<br>";
$v2 = array(3, 7, 11, 1, 9);
print_r($v2);
echo "<br>Var_dump<br>";
var_dump($v2);
echo "<br>Var_export<br>";
var_export($v2);
// Função wordwrap() : Cria quebras de linha ou divisões em uma string em um tamanho especificado.
$t = "<br>Aqui temos um texto gigante em php, que vai nos mostrar o funcionamento do wordwrap<br>";
$res = wordwrap($t, 20, "<br>", false);
echo "<br>" . $res;
// Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).
echo "<br>" . strlen($nome);
// Função trim() : Elimina espaços em branco antes e depois de uma string.
// Função ltrim() : Elimina espaços no início de uma string.
// Função rtrim() : Elimina espaços em branco no final de uma string.
$espaco = "   Gabriel K. B. Hilario    ";
echo "<br>" . strlen($espaco);
echo "<br>" . strlen(trim($espaco));
// Função str_word_count() : Conta quantas palavras uma string possui.
echo "<br>" . str_word_count($espaco, 0);
// Função explode() : Quebra uma string e coloca os itens em um vetor.
$vet = explode(" ", $espaco);
echo "<br>";
print_r($vet); 
// Função str_split() : Coloca cada letra de uma string em uma posição de um vetor.
$et2 = str_split(trim($espaco));
echo "<br>";
print_r($et2);
// Função implode() : Transforma um vetor inteiro em uma string.

// Função chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.
$p = chr(67);
echo "<br>$p";
// Função ord() : Retorna o código ASCII de um caractere passado como parâmetro.
$cod_CNR = ord("C");
echo "<br>$cod_CNR";
