<?php

function estatisticasNumericas($vetor) {
    
    if (empty($vetor)) {
        return [
            'soma' => 0, 'media' => 0, 'maior' => 0, 'menor' => 0,
            'mediana' => 0, 'pares' => 0, 'impares' => 0
        ];
    }

  
    $soma = array_sum($vetor);
    $quantidade = count($vetor);
    $media = $soma / $quantidade;
    $maior = max($vetor);
    $menor = min($vetor);

    
    $pares = 0;
    $impares = 0;
    foreach ($vetor as $num) {
        if ($num % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

   
    sort($vetor); 
    $meio = floor($quantidade / 2);

    if ($quantidade % 2 != 0) {
   
        $mediana = $vetor[$meio];
    } else {
       
        $mediana = ($vetor[$meio - 1] + $vetor[$meio]) / 2;
    }


    return [
        'soma'     => $soma,
        'media'    => number_format($media, 2, '.', ''),
        'maior'    => $maior,
        'menor'    => $menor,
        'mediana'  => $mediana,
        'pares'    => $pares,
        'impares'  => $impares
    ];
}

$meusNumeros = [10, 5, 2, 8, 11, 7]; 

$resultado = estatisticasNumericas($meusNumeros);


echo "Estatísticas da Coleção de Números:\n";
echo "- Soma: " . $resultado['soma'] . "\n";
echo "- Média: " . $resultado['media'] . "\n";
echo "- Maior Valor: " . $resultado['maior'] . "\n";
echo "- Menor Valor: " . $resultado['menor'] . "\n";
echo "- Mediana: " . $resultado['mediana'] . "\n";
echo "- Qntd. de Números Pares: " . $resultado['pares'] . "\n";
echo "- Qntd. de Números Ímpares: " . $resultado['impares'] . "\n";


