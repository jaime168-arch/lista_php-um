<?php

function formatarTexto($texto){
    $maiusculas = mb_strtoupper($texto, 'UTF-8');

    $minusculas = mb_strtolower($texto, 'UTF-8');

    $primeiraMaiuscula = mb_convert_case($texto, MB_CASE_TITLE, 'UTF-8');

    $totalCaracteres = mb_strlen($texto, 'UTF-8');

    return[
        'maiusculas'         => $maiusculas,
        'minusculas'         => $minusculas,
        'primeira_maiuscula' => $primeiraMaiuscula,
        'total_caracteres'   => $totalCaracteres
    ];
}

$textoRelatorio = "Relátorio do código de Jaime";

$relatorioFormatado = formatarTexto($textoRelatorio);

echo "Formatador de Relatórios:\n";
echo "- Maiúsculas: " . $relatorioFormatado['maiusculas'] . "\n";
echo "- Minúsculas: " . $relatorioFormatado['minusculas'] . "\n";
echo "- Título (Iniciais): " . $relatorioFormatado['primeira_maiuscula'] . "\n";
echo "- Total de Caracteres: " . $relatorioFormatado['total_caracteres'] . "\n";