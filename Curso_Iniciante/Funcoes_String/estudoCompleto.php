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
// Função strtolower() : Retorna a string inteira em minusculas
$nomeCerto = "Gabriel Kaicon";
echo "<br> Seu nome é " . strtolower($nomeCerto);
// Função strtoupper() : Retorna a string inteira em maiusculas
echo "<br> Seu nome é " . strtoupper($nomeCerto);
// Função ucfirst() : retorna a string com a primeira letra em maiuscula
echo "<br> Seu nome é " . ucfirst($nomeCerto);
// Função ucwords() : Retorna a primeira letra de cada uma das palavrvas dentro da string
echo "<br> Seu nome é " . ucwords($nomeCerto);
//Função strrev() : Retorna a string ao contrário
echo "<br> Seu nome é " . strrev($nomeCerto);
// Função strpos() : retorna a posição em que o termo é encontrado
echo "<br> Kaicon se encontra na posição " . strpos($nomeCerto, "Kaicon");//Trate de procurar exatamente como está lá
// Função strpos() : retorna a posição em que o termo é encontrado
echo "<br> Kaicon se encontra na posição " . stripos($nomeCerto, "Kaicon");// Não precisa procurar exatamente como está lá
// Função substr_count() : retorna quantas vezes a string especificada foi encontrada
$nomeErrado = "Gabriel Kaicon Kaicon Kaicon";
echo "<br> Número de vezes que Kaicon aparece na string: " . substr_count($nomeErrado, "Kaicon");
// Função substr() : Extrair substring de uma string
$site = "Curso em vídeo"; 
echo "<br>" . substr($site, 0, 5);//Fatiamento da string por intervalo
echo "<br>" . substr($site, 7);//Fatiamento da string da posição seguinte
echo "<br>" . substr($site, -5);//Fatiamento da string das 5 ultimas letras
// Função str_pad() : retorna uma string de tamanho definido, "preencher uma string" 
$primNome = "Gabriel";
$novo = str_pad($primNome, 30, "_", STR_PAD_RIGHT);
print("<br>O $novo está aprendendo PHP");
$novo = str_pad($primNome, 30, "_", STR_PAD_LEFT);
print("<br>O $novo está aprendendo PHP");
$novo = str_pad($primNome, 30, "_", STR_PAD_BOTH);
print("<br>O $novo está aprendendo PHP");
// Função str_repeat() : Retorna a string especificada o número de vezes que foi especificado
$txt = str_repeat("php ", 5);
print("<br>$txt");
// Função str_replace() : Retorna uma string trocando as palavras especificadas
$frase = "Gosto de português"; //mentira demais
$novafrase = str_replace("português", "matemática", $frase); //Agora sim, se atente a escrever identico ao que está na frase
echo "<br> $frase";
echo "<br> $novafrase";
$novafrase = str_ireplace("Português", "matemática", $frase); //Agora sim, se atente a escrever identico ao que está na frase
echo "<br> $novafrase";