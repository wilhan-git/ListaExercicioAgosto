<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["fnome"];
    $email = $_POST["femail"];
    $senha = password_hash($_POST["fsenha"], PASSWORD_DEFAULT);
    $id = rand(1,50);

    //conexão com o banco
    $conexao = new mysqli("localhost","root","","bd_teste");
    if ($conexao->connect_error) {
        die("Conexão Falhou: " .$conexao->connect_error);
    }

    //inserção dos dados na tabela
    $sql_cadastro = "INSERT INTO tb_login (id_usuario,nome_login, email_login, senha_login) VALUES ( '$id','$nome','$email','$senha')";

    //executa a consulta
    if ($conexao->query($sql_cadastro) === TRUE) {
        echo "<script>
                 Javascript:window.location.href='login.html';
                 Javascript:window.alert('Cadastro realizado com sucesso !');
              </script>";

    } else {
        echo "Erro na consulta: " . $sql_cadastro . "<br>" . $conexao->error;
    }

    //finaliza a conexão do BD
    $conexao->close();
}
?>