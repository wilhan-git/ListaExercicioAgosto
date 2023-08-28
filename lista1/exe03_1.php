<?php 
    //conexão com o Banco De Dados


    $conexao = new mysqli("localhost","root","","bd_teste");

    if($conexao->connect_error){
        echo"Conexão Falhou". $conexao->error;
    }else{
        echo "Conexão Bem Sucedida";
    }

    //Consulta para selecionar todos os funcionarios que tenham o cargo de gerente

    $sql_consulta = "SELECT * FROM funcionarios WHERE cargo = 'Gerente'";

    $resultado = $conexao->query($sql_consulta);

    //Exibindo O resultado da Consulta

    if($resultado->num_rows>0){
        while($lista = $resultado->fetch_assoc()){
            echo "<br> ID: ". $lista['id_funcionario'] . "<br> Nome: ". $lista['nome'] . "<br> Cargo: ". $lista['cargo']. "<br>";
        }
    }else{
        echo "Não foram encontrados valores correspondentes";
    }



?>