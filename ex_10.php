<?php

function calcularMedia($notas) {

    if (empty($notas)) { 
        return [
            'maior'  => 0,
            'menor'  => 0,
            'media'  => 0,
            'situacao'  => 'Sem nota registrada'
        ];
    }

    $maiorNota = max($notas);
    $menorNotas = min($notas);

    $somaNotas = array_sum($notas);
    $quantidade = count($notas);
    $media = $somaNotas / $quantidade;

    if ($media >= 6.0) {
        $situacao = "Passou de ano";
    } elseif ($media >= 5.9) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Repetiu de ano"; 
    }

    return [
        'maior'    => $maiorNota,
        'menor'  => $menorNotas,
        'media'    => number_format($media, 1, '.', ''),
        'situacao' => $situacao
    ];
}

$notasDoAluno = [7.0, 6.0, 3.0, 10.0];

$resultadoFinal = calcularMedia($notasDoAluno);

echo "Boletim do Estudante:\n";
echo "- Maior Nota: " . $resultadoFinal['maior'] . "\n";
echo "- Menor Nota: " . $resultadoFinal['menor'] . "\n";
echo "- Média Final: " . $resultadoFinal['media'] . "\n";
echo "- Situação: " . $resultadoFinal['situacao'] . "\n";

?>
