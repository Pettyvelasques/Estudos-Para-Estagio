<?php 

$numeroEscolhido = 9;
$quantRodadas = 0;

for ($i = -1; $i != $numeroEscolhido; ) { 
    $quantRodadas++;
    $i = rand(0,10);
    echo "Rodada $quantRodadas - Número Sorteado: $i\n";
};

if ($quantRodadas <= 3) {
    echo "Você é MUITO sortudo!\n";
}
elseif ($quantRodadas >= 4 && $quantRodadas <= 10) {
    echo "Você é sortudo!\n";
}
elseif ($quantRodadas > 10) {
    echo "É melho você parar de apostar e ir trabalhar!\n";
};

?>