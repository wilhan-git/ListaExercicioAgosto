<?php 

$lista = [1,2,3,4,5,4,6,7,8,8,9,9,1,3,10];

//função utiliza o array_unique que seleciona um array e remove valores duplicados dentro do array
function limpa_lista(array $listaselecionada){
   
    return array_unique($listaselecionada);
}

$resultado = limpa_lista($lista);

print_r($resultado);

?>