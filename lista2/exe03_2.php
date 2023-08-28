<?php 
    $lista_nome = ["mavis","senaida","letty","WilhAn","GaBRIEL"];

    function lista_correta(array $lista){
        foreach($lista as $listar){
            $lista_convertida[]= ucwords(strtolower($listar));
        }
        return print_r($lista_convertida);
    }

    lista_correta($lista_nome);


?>