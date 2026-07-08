<?php

function ordenarNomes($listaN) {

    $vetorNomes = explode(',', $listaN);

    
    $vetorLimpo = array_map('trim', $vetorNomes);

    sort($vetorLimpo);

    
    return $vetorLimpo;

}

$matriculados = "Jaime R. , Icaro B. , Daniel Alves , Neymar ";

$listaOrganizada = ordenarNomes($matriculados);

echo "Lista de alunos Organizada:\n";
foreach ($listaOrganizada as $aluno) {
    echo "- ". $aluno . "\n";
}

?>
