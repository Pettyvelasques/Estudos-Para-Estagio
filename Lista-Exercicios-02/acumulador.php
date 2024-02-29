<?php 

$soma = 0;
$numeroSorteado = -1;

do {
    $numeroSorteado = rand(0,10);
    $soma += $numeroSorteado;
    echo "Número sorteado: $numeroSorteado\n";
} while ($numeroSorteado != 0);

echo "\nA soma dos números é $soma!\n";

?>