<?php

$aquecimento = 1;
$aerobica = 1;
$musculacao = 1;

$tempoTotal = $aquecimento + $aerobica + $musculacao;
$quantCalorias = ($aquecimento * 12) + ($aerobica * 20) + ($musculacao * 25);

echo "Olá, Jorge. \n";
echo "Você fez um total de {$tempoTotal} minutos de exercícios e perdeu cerca de {$quantCalorias} calorias. \n";
