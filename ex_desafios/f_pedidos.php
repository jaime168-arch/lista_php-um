<?php


function calcularSubtotalProduto($quantidade, $valorUnitario) {
    return $quantidade * $valorUnitario;
}


function calcularDescontoPedido($valorTotalItens) {
    $percentual = 0;
    if ($valorTotalItens > 1000.00) {
        $percentual = 0.15; 
    } elseif ($valorTotalItens > 500.00) {
        $percentual = 0.10; 
    }
    return $valorTotalItens * $percentual;
}

function calcularFretePedido($valorTotalItens) {
    if ($valorTotalItens <= 300.00) {
        return 35.00;
    } elseif ($valorTotalItens <= 800.00) {
        return 20.00;
    }
    return 0.00; 
}

function encontrarDestaquesProdutos($produtos) {
    $maisCaro = ['nome' => '', 'valor_unitario' => -1];
    $maiorSubtotal = ['nome' => '', 'subtotal' => -1];

    foreach ($produtos as $prod) {
        $subtotalAtual = calcularSubtotalProduto($prod['quantidade'], $prod['valor_unitario']);

        if ($prod['valor_unitario'] > $maisCaro['valor_unitario']) {
            $maisCaro = $prod;
        }
        if ($subtotalAtual > $maiorSubtotal['subtotal']) {
            $maiorSubtotal = [
                'nome' => $prod['nome'],
                'subtotal' => $subtotalAtual
            ];
        }
    }

    return [
        'mais_caro' => $maisCaro['nome'] . " (R$ " . number_format($maisCaro['valor_unitario'], 2, ',', '.') . ")",
        'maior_subtotal' => $maiorSubtotal['nome'] . " (R$ " . number_format($maiorSubtotal['subtotal'], 2, ',', '.') . ")"
    ];
}

function processarPedido($produtos) {
    $totalProdutosDiferentes = count($produtos);
    $totalItensComprados = 0;
    $valorTotalItens = 0;
    $listaSubtotais = [];

    foreach ($produtos as $prod) {
        $totalItensComprados += $prod['quantidade'];
        $subtotal = calcularSubtotalProduto($prod['quantidade'], $prod['valor_unitario']);
        $valorTotalItens += $subtotal;

        $listaSubtotais[] = $prod['nome'] . ": R$ " . number_format($subtotal, 2, ',', '.');
    }

    $valorDesconto = calcularDescontoPedido($valorTotalItens);
    $valorFrete = calcularFretePedido($valorTotalItens);
    $valorFinal = $valorTotalItens - $valorDesconto + $valorFrete;
    $destaques = encontrarDestaquesProdutos($produtos);

    return [
        'total_produtos_diferentes' => $totalProdutosDiferentes,
        'total_itens_comprados'     => $totalItensComprados,
        'produto_mais_caro'         => $destaques['mais_caro'],
        'produto_maior_subtotal'    => $destaques['maior_subtotal'],
        'subtotais_produtos'        => $listaSubtotais,
        'valor_total_itens'         => "R$ " . number_format($valorTotalItens, 2, ',', '.'),
        'desconto_aplicado'         => "R$ " . number_format($valorDesconto, 2, ',', '.'),
        'valor_frete'               => $valorFrete == 0 ? "Grátis" : "R$ " . number_format($valorFrete, 2, ',', '.'),
        'valor_final_compra'        => "R$ " . number_format($valorFinal, 2, ',', '.')
    ];
}

?>
