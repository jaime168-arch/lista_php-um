<?php

function analisarNumero($numero) {
$numero = (int)$numero;

$parImpar = ($numero % 2 == 0) ? "Par" : "Ímpar";

$ePrimo = true
if ($numero <=1){
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

for ($i)
}