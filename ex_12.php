<?php

function analisarProdutos($catalogo, $produtoPesquisado) {
    if (empty($catalogo)) {
        return [
            'mais_caro'  => 'Nenhum',
            'mais_barato'  => 'Nenhum',
            'media_precos' => 0,
            'pesquisa'     => 'Catálogo vazio'
        ];
    }

    $produtoMaisCaro = $catalogo[0];
    $produtoMaisBarato = $catalogo[0];
    $somaPrecos = 0;
    $resultadoPesquisa = "Produto não encontrado";

  
    foreach ($catalogo as $produto) {
        $somaPrecos += $produto['preco'];


        if ($produto['preco'] > $produtoMaisCaro['preco']) {
            $produtoMaisCaro = $produto;
        }

        if ($produto['preco'] < $produtoMaisBarato['preco']) {
            $produtoMaisBarato = $produto;
        }


        if (strcasecmp($produto['nome'], $produtoPesquisado) == 0) {
            $resultadoPesquisa = "Encontrado! Preço: R$ " . number_format($produto['preco'], 2, ',', '.');
        }
    }


    $media = $somaPrecos / count($catalogo);


    return [
        'mais_caro'    => $produtoMaisCaro['nome'] . " (R$ " . number_format($produtoMaisCaro['preco'], 2, ',', '.') . ")",
        'mais_barato'  => $produtoMaisBarato['nome'] . " (R$ " . number_format($produtoMaisBarato['preco'], 2, ',', '.') . ")",
        'media_precos' => "R$ " . number_format($media, 2, ',', '.'),
        'pesquisa'     => $resultadoPesquisa
    ];
}


$supermercado = [
    ['nome' => 'Arroz 5kg', 'preco' => 28.90],
    ['nome' => 'Feijão 1kg', 'preco' => 7.50],
    ['nome' => 'Café 500g', 'preco' => 18.20],
    ['nome' => 'Azeite de Oliva', 'preco' => 42.00],
    ['nome' => 'Leite 1L', 'preco' => 5.40]
];


$buscaUsuario = "Café 500g";


$relatorio = analisarProdutos($supermercado, $buscaUsuario);


echo "Análise do Catálogo de Produtos:\n";
echo "- Produto Mais Caro: " . $relatorio['mais_caro'] . "\n";
echo "- Produto Mais Barato: " . $relatorio['mais_barato'] . "\n";
echo "- Média dos Preços: " . $relatorio['media_precos'] . "\n";
echo "- Resultado da Pesquisa por '{$buscaUsuario}': " . $relatorio['pesquisa'] . "\n";

?>
