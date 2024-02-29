<?php 

$mussarela = 0;
$calabresa = 0;
$quatroQueijos = 0;

for ($i=0; $i < 10 ; $i++) {
    $sorteado = rand(1,3);

    if ($sorteado == 1) {
        $mussarela++;
    }
    elseif ($sorteado == 2) {
    $calabresa++;
    }
    elseif ($sorteado == 3){
        $quatroQueijos++;
    }
}

echo "O sabor mussarela obteve $mussarela votos!\n";
echo "O sabor calabresa obteve $calabresa votos!\n";
echo "O sabor quatro queijos obteve $quatroQueijos votos!\n";

echo "\n";
if($mussarela > $calabresa && $mussarela > $quatroQueijos){
    echo "O sabor mais votado foi mussarela!\n";
} elseif ($calabresa > $mussarela && $calabresa > $quatroQueijos) {
    echo "O sabor mais votado foi calabresa!\n";
} elseif ($quatroQueijos > $mussarela && $quatroQueijos > $calabresa) {
    echo "O sabor mais votado foi quatro queijos\n";
} else {
    echo "Houve um empate na votação!\n";
}


?>