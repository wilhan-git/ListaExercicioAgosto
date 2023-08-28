<?php 
//conexão Com o Banco de dados

$conexao = new mysqli("localhost", "root","", "bd_teste");

if($conexao->connect_error){
    echo "Conexão Falhou ".$conexao->error;
}else{
    echo"Conexão Bem Sucedida";
}

//Consulta para selecionar os pedidos que tenham sido realizados em 2023

$sql_consulta = "SELECT * FROM pedidos WHERE YEAR(data) = 2023";

$resultado = $conexao->query($sql_consulta);

//Exibir os Valores Solicitados]

if($resultado->num_rows>0){
    while($lista = $resultado->fetch_assoc()){
        echo "<br> ID: ". $lista['id_pedido'] . "<br> Data: ". $lista['data'] . "<br> Valor: ". $lista['valor'] . "<br> Status: ". $lista['status'] . "<br>";
    }
}else{
    echo"<br> Não foram encontrados valores correspondentes";
}

?>