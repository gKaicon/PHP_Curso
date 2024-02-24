<?php
    $dataNasc = $_GET["i"];
    $i = (2024-$dataNasc);
    echo "<br>A idade é: $i";
    echo "<br>Essa pessoa " . ((($i >= 18) && ($i <=64)) ? "é obrigada a votar." : "não é obrigada a votar.");
?>