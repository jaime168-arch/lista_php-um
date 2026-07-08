<?php

function analisarNumero($numero) {
    $numero = (int)$numero;

    $parImpar = ($numero % 2 == 0) ? "Par" : "Ímpar";

    $ePrimo = true; 
    if ($numero <= 1){
        $ePrimo = false;
    } else {
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $ePrimo = false;
                break;
            }
        }
    }
    $primoResultado = $ePrimo ? "É Primo" : "Não é Primo";

    $somaDivisores = 0;

    for ($i = 1; $i < $numero; $i++){
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }

    $ePerfeito = ($somaDivisores == $numero && $numero > 0);
    $perfeitoResultado = $ePerfeito ? "É perfeito" : "Imperfeito";

    return [
        'par_impar' => $parImpar, 
        'primo' => $primoResultado,
        'perfeito' => $perfeitoResultado
    ];

}

$numTeste = 67; 
$analise = analisarNumero($numTeste);

echo "Análise do número {$numTeste}:\n";
echo "- Classificação: " . $analise['par_impar'] . "\n";
echo "- Status Primo: " . $analise['primo'] . "\n";
echo "- Status Perfeito: " . $analise['perfeito'] . "\n";

