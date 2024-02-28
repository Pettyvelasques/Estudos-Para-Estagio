
        <?php
        $faixa0a3 = 0;
        $faixa4a16 = 0;
        $faixa17a18 = 0;

        $quantFilhos = $faixa0a3 + $faixa4a16 + $faixa17a18;
        $valorDaBolsa = ($faixa0a3 * 25.12) + ($faixa4a16 * 15.88) + ($faixa17a18 * 12.44);

        echo "Você tem um total de {$quantFilhos} filhos e vai receber \${$valorDaBolsa} \n";
        ?>