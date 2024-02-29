<?php
//vetores em php são dinamicos
$vet = array(3,8,2,5);
print_r($vet);
echo "<br>";
$vet[] = 7;//este foi alocado dinamicamente
print_r($vet);
echo "<br>";

$vet2 = range(5, 40, 5); //vetor começando em 5, indo até 20 e andando de 5 em 5

foreach($vet2 as $valor){
    echo "\t $valor";
}

//array com posições personalizadas
$v = array(
    0=>10,
    1=>45,
    4=>15,
    5=>63,
);

$v[] = 96;
$v[9] = 74;
print_r($v);
unset($v[9]);
echo "<br>Depois de remover a posição 9: ";
print_r($v);

//posições personalizadas e conteudos variados

$cad = array(
    "nome"=>"Gabriel",
    "altura"=>1.8,
    "peso"=>72,
    "idade"=>20
);

foreach($cad as $campo=>$conteudo){
    echo "O campo $campo possui conteudo $conteudo<br>";
}
$cad["bebe"] = false;


//matrizes

$mat = array(array(2,3), array(8,5),array(8,5));


?>