<?php

function gerarSenha($tamanho){

$maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$minusculas = 'abcdefghijklmnopqrstuvwxyz';
$numeros = '0123456789';
$especiais = '!@#$%^&*()-_=+[{]};:,.<>/?';

$caracteresPermitidos = $maiusculas . $minusculas . $numeros . $especiais;

$totalCaracteres = strlen($caracteresPermitidos);

$senhaGerada = '';

for ($i = 0; $i < $tamanho; $i++){

$indiceAleatorio = rand(0, $totalCaracteres -1);

$senhaGerada .= $caracteresPermitidos[$indiceAleatorio];
}

return $senhaGerada;
}

echo "Senha de 8 caracteres " . gerarSenha(8) . "<br>"; 
echo "Senha de 12 caracteres " . gerarSenha(12) . "<br>";
echo "Senha de 16 caracteres " . gerarSenha(16) . "<br>";
