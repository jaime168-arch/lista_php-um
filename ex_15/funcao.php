<?php

function calcularIMC($peso, $altura) {
    if ($altura <= 0) return 0;
    return number_format($peso / ($altura * $altura), 2, '.', '');
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function gerarSenhaAleatoria($tamanho = 8) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$';
    return substr(str_shuffle($caracteres), 0, $tamanho);
}


function contarVogais($texto) {
    preg_match_all('/[aeiouáéíóúâêîôûãõ]/i', $texto, $matches);
    return count($matches[0]);
}

function inverterTexto($texto) {
    return strrev($texto);
}

function calcularIdade($dataNascimento) {
    $nascimento = new DateTime($dataNascimento);
    $hoje = new DateTime();
    $diferenca = $hoje->diff($nascimento);
    return $diferenca->y;
}

function converterMoeda($valorDolar, $cotacao = 5.50) {
    return $valorDolar * $cotacao;
}

function formatarTelefone($numero) {
    $num = preg_replace('/[^0-9]/', '', $numero); 
    if (strlen($num) == 11) {
        return "(" . substr($num, 0, 2) . ") " . substr($num, 2, 5) . "-" . substr($num, 7);
    }
    return $numero; 
}


function gerarSaudacao($hora) {
    if ($hora >= 6 && $hora < 12) return "Bom dia";
    if ($hora >= 12 && $hora < 18) return "Boa tarde";
    return "Boa noite";
}

function validarSenhaForte($senha) {
    $tamanho = strlen($senha) >= 8;
    $maiuscula = preg_match('/[A-Z]/', $senha);
    $minuscula = preg_match('/[a-z]/', $senha);
    $numero = preg_match('/[0-9]/', $senha);
    
    return ($tamanho && $maiuscula && $minuscula && $numero);
}

?>
