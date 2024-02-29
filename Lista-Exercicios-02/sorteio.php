<?php 

$numeroEscolhido = 10;

$primeiraVez = 0;
$pares = 0;
$impares = 0;

for ($i=1; $i <= 200; $i++) {
    $sorteado = rand(1,100);
    
    if($sorteado % 2 == 0){
        $pares++;
    }else{
        $impares++;
    }
    
    if($primeiraVez == 0 && $sorteado == $numeroEscolhido){
        $primeiraVez = $i;
    }
}

if($primeiraVez == 0){
    echo "O número $numeroEscolhido não foi sorteado nenhuma vez nesse sorteio!\n";
}
else{
    echo "O número $numeroEscolhido foi sorteado pela primeira vez na rodada $primeiraVez\n";
}
echo "Foram sorteados $pares números pares\n";
echo "Foram sorteados $impares números ímpares\n";


?>