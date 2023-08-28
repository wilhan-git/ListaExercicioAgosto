<?php 

    //Conexão com o banco 
    $conexao = new mysqli("localhost","root","","bd_teste");
    if($conexao->connect_error){
        echo "Conexão Falhou ".$conexao->error;
    }else{
        echo"Conexao Bem Sucedida";
    }

    //Consulta para verificar os clientes com idade acima de 30 anos de idade

    $sql_consulta = "SELECT * FROM clientes WHERE idade > 30";

    $resultado = $conexao->query($sql_consulta);

    //Mostrando o resultado da consulta

    if($resultado->num_rows>0){
        while($linha = $resultado->fetch_assoc()){
            echo"<br> ID: ".$linha['id_cliente'] . "<br> Nome: ".$linha['nome'] . "<br> Idade: ".$linha['idade']. "<br>";
        }
    }else{
        echo "Não foram encontrado valores correspondentes";
    }


?>