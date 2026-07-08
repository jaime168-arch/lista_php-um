<?php


require_once __DIR__ . '/f_pedidos.php';

$carrinhoDeCompras = [
    ['nome' => 'Monitor Gamer 24"', 'quantidade' => 1, 'valor_unitario' => 899.90],
    ['nome' => 'Teclado Mecânico',   'quantidade' => 2, 'valor_unitario' => 150.00],
    ['nome' => 'Mouse Sem Fio',       'quantidade' => 3, 'valor_unitario' => 45.00],
    ['nome' => 'Headset Estéreo',     'quantidade' => 1, 'valor_unitario' => 210.00]
];


$relatorioFinal = processarPedido($carrinhoDeCompras);


echo "==================================================\n";
echo "       RELATÓRIO DE PROCESSAMENTO DE PEDIDO       \n";
echo "==================================================\n\n";

echo "1. Resumo do Carrinho:\n";
echo "- Qntd. de Produtos Diferentes: " . $relatorioFinal['total_produtos_diferentes'] . "\n";
echo "- Total de Itens no Carrinho:   " . $relatorioFinal['total_itens_comprados'] . "\n\n";

echo "2. Subtotal por Item:\n";
foreach ($relatorioFinal['subtotais_produtos'] as $subtotalItem) {
    echo "  -> " . $subtotalItem . "\n";
}
echo "\n";

echo "3. Destaques do Pedido:\n";
echo "- Produto Mais Caro (Unitário): " . $relatorioFinal['produto_mais_caro'] . "\n";
echo "- Maior Faturamento (Subtotal): " . $relatorioFinal['produto_maior_subtotal'] . "\n\n";

echo "4. Fechamento Financeiro:\n";
echo "- Valor Bruto dos Itens: " . $relatorioFinal['valor_total_itens'] . "\n";
echo "- Desconto Concedido:    " . $relatorioFinal['desconto_aplicado'] . "\n";
echo "- Custo de Envio (Frete): " . $relatorioFinal['valor_frete'] . "\n";
echo "--------------------------------------------------\n";
echo "TOTAL FINAL DA COMPRA:   " . $relatorioFinal['valor_final_compra'] . "\n";
echo "==================================================\n";

?>
