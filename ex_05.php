<?php

function analisarTexto($texto){

$totalPalavras = str_word_count($texto, 0);

$totalCaracteres = mb_strlen($texto);

$textoMinusculo = mb_strtolower($texto);

$totalVogais = preg_match_all('/[aeiouáéíóúâêîôûãõàèìòù]/u', $textoMinusculo);

$totalConsoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/', $textoMinusculo);

return [
    'palavras' => $totalPalavras,
    'caracteres' => $totalCaracteres,
    'vogais' => $totalVogais,
    'consoantes' => $totalConsoantes
  ];
}

$meuTexto = "O PHP e incrivel para WEB!";
$resultado = analisarTexto($meuTexto);

echo "Texto analisado: \"$meuTexto\"<br><br>";
echo "Quantidade de palavras: " . $resultado['palavras'] . "<br>";
echo "Quantidade de caracteres: " . $resultado['caracteres'] . "<br>";
echo "Quantidade de vogais: " . $resultado['vogais'] . "<br>";
echo "Quantidade de consoantes: " . $resultado['consoantes'] . "<br>";