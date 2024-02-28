<?php

$preco = 1.2;
$quantidade = 3;
$valorPago = 4  ;

$total = $preco * $quantidade;
$troco = $valorPago - $total;

echo "Seu troco será de R\${$troco}. \n";

?>