<?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];;
    $s  = $n1 + $n2;
    echo "Valores recebidos " . $n1 . " e " . $n2;
    echo "<br><br>Operadores aritmeticos";
    echo "<br>Soma de " . ($n1 + $n2);
    echo "<br>Subtração de " . ($n1 - $n2);
    echo "<br>Multiplicação de " . ($n1 * $n2);
    echo "<br>Divisão de " . ($n1 / $n2);
    echo "<br>Resto da divisão " . ($n1 % round($n2));
    echo "<br> A média é " . ($n1 + $n2)/2;
    echo "<br><br>Funções aritmeticas";
    echo "<br> Valor absoluto de $n2 = " . abs($n2);
    echo "<br> Raiz de $n1 = " . sqrt($n1);
    echo "<br> Potencia de $n2 a terceira = " . pow($n2, 3);
    echo "<br> Arrendondamento de $n2 para cima " . round(ceil($n2)) . " ou para baixo " . round(floor($n2)) ; //ceil e floor
    echo "<br> intval pegar só o inteiro sem arredondamento" . intval($n2);
    echo "<br> numberFormat R$ " . number_format(abs($n2), 2, ".");
    echo "<br> ";
?>