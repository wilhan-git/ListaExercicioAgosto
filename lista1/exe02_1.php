<?php 
    //Conexão com o banco de dados

    $conexao = new mysqli("localhost","root","","bd_teste");

    if($conexao->connect_error){
        echo "Conexão Falhou ".$conexao->error;
    }else{
        echo "Conexão Bem Sucedida";
    }


    //Consulta para selecionar todos os clientes cujo o preço seja igual ou inferior a 50

    $sql_consulta = "SELECT * FROM produtos WHERE preco <= 50";

    $resultado = $conexao->query($sql_consulta);

    //Mostrando o resultado da consulta

    if($resultado->num_rows>0){
        while($lista = $resultado->fetch_assoc()){
            echo "<br> ID: ".$lista['id_produto'] . "<br> Produto: ".$lista['nome'] . "<br> preço: ". $lista['preco']. "<br>";
        }
    }else{
        echo "Não foram encontrado Valores Correspondentes";
    }



?>