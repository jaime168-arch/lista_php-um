<?php


function criptografarMensagem($texto, $chave = 3) {
    $resultado = "";
    
    foreach (str_split($texto) as $char) {
   
        if ($char >= 'A' && $char <= 'Z') {
            $resultado .= chr((ord($char) - ord('A') + $chave) % 26 + ord('A'));
        }
       
        elseif ($char >= 'a' && $char <= 'z') {
            $resultado .= chr((ord($char) - ord('a') + $chave) % 26 + ord('a'));
        }

        else {
            $resultado .= $char;
        }
    }
    
    return $resultado;
}


function descriptografarMensagem($textoCriptografado, $chave = 3) {
 
    return criptografarMensagem($textoCriptografado, 26 - $chave);
}



$mensagemOriginal = "Ola Mundo, este e o codigo do Jaime! 2026";

$mensagemSecreta = criptografarMensagem($mensagemOriginal);


$mensagemRevelada = descriptografarMensagem($mensagemSecreta);


echo "Sistema de Criptografia (Cripto Botelho):\n";
echo "- Original:      " . $mensagemOriginal . "\n";
echo "- Criptografado: " . $mensagemSecreta . "\n";
echo "- Recuperado:    " . $mensagemRevelada . "\n";
