<?php 

$base = 3;
$potencia = 1;

$resultado = 1;
for ($i=0; $i < $potencia; $i++) {
    $resultado = $resultado * $base;
}

echo "Resultado da potencia de $base elevado a $potencia: $resultado\n"

?>