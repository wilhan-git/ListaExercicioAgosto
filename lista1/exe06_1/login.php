<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" ) {
    $login = $_POST["flogin"];
    $password = $_POST["fpassword"];

    //conexão com BD
    $conexao = new mysqli("localhost","root","","bd_teste");
    if ($conexao->connect_error) {
        die("Conexão Falhou: " .$conexao->connect_error);
    }


    //criar minha consulta - pegar o valor de dentro BD
    $sql_consulta = "SELECT id_usuario, nome_login, email_login, senha_login FROM tb_login WHERE email_login = '$login'";
    $resultado = $conexao->query($sql_consulta);

    //verificando as possibilidades dos resultados
    if ($resultado->num_rows === 1) {
        $lista = $resultado->fetch_assoc();
        // verificação de senha
        if (password_verify($password,$lista["senha_login"])) {
            echo "Logado com sucesso";
        } else{
            echo "Senha incorreta, tente novamente !";

        }
    }else {
        
        echo "Usuario não encontrado, faça o cadastro !";
    }

    //finaliza a conexão
    $conexao->close();
} 
?>
