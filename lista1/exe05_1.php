<?php 
//Conextando o Banco de Dados

$conexao = new mysqli("localhost", "root", "", "bd_teste");

if($conexao->connect_error){
    echo "Conexão Falhou".$conexao->error;
}else{
    echo "Conexão Bem Sucedida";
}

//Consulta para atualizar a quantidade em estoque de um produto especifico

$sql_consulta = "UPDATE produtos SET quantidade_estoque = 100 WHERE id_produto = 10";

$resultado = $conexao->query($sql_consulta);

//Mostrando se foi realizado a atualização

if($resultado===TRUE){
    echo "<br> Valor atualizado com sucesso";
}else{
    echo "<br> ID não encontrado ou ocorreu um erro ao fazer o update";
}


?>