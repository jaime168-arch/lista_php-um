<?php

function mascararCPF($cpf){

$cpflimpo = preg_replace ('/\D/', '', $cpf);

$ultimosQuatro = substr($cpflimpo, -4);

$cpfMascarado = '*******' . $ultimosQuatro;

return $cpfMascarado;

}

echo mascararCPF("123.456.789-00");
echo "\n";
echo mascararCPF("40028922101");