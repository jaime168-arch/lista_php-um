<?php

function calcularDesconto($valorNormal, $porcentagemDesconto){
  $valorDescontado = $valorNormal * ($porcentagemDesconto / 100);
  return $valorNormal - $valorDescontado;
}

$produtoA = calcularDesconto(100.00, 10); // 100 reais com 10% de desconto
$produtoB = calcularDesconto(670.67, 20); // 670,67 reais com 20% de desconto

echo "Produto A: R$ " . number_format($produtoA, 2, ',', '.') . "\n";// 90 reais
echo "Produto B: R$ " . number_format($produtoB, 2, ',', '.') . "\n";// 536,54 reais