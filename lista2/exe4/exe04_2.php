<?php
clearstatcache();

$conexao = new mysqli("localhost", "root", "", "bd_teste");

if ($conexao->connect_error) {
  echo "Conexão Falhou" . $conexao->error;
}



?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>BLOG TEC</title>

  <!-- Principal CSS do Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Estilos customizados para esse template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link rel="stylesheet" href="/aula php1/ListaExercicioAgosto/lista2/exe4/css/style.css">
</head>

<body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a class="text-muted" href="#">Inscrição</a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="#">IA TEC</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
              <circle cx="10.5" cy="10.5" r="7.5"></circle>
              <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
            </svg>
          </a>
          <a class="btn btn-sm btn-outline-secondary" href="#">Cadastrar-se</a>
        </div>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="#">Mundo</a>
        <a class="p-2 text-muted" href="#">Nacional</a>
        <a class="p-2 text-muted" href="#">Tecnologia</a>

      </nav>
    </div>

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">

      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">As 6 melhores ferramentas de inteligência artificial (IA) para ajudar nos estudos</h1>
        <p class="lead my-3">Plataformas digitais auxiliam a pesquisar informações na íntegra e em artigos acadêmicos, a encontrar citações e muito mais</p>
      </div>
    </div>



    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            O dossiê!
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">IA</h2>
            <p class="blog-post-meta">Escrito por Por Wagner Edwards, editado por Bruno Ignacio de Lima</p>

            <p> As ferramentas de inteligência artificial já existem há algum tempo,</p>
            mas ganharam muitos holofotes recentemente em virtude da repercussão sobre o ChatGPT:
            um robô virtual que fornece respostas para perguntas e solicitações via chat.
            Embora este último seja bastante útil para pesquisas, ele não é o único que pode auxiliar na rotina dos usuários.
            <p> Por isso, destacamos a seguir algumas das melhores ferramentas de inteligência artificial para ajudá-lo nos estudos.</p>
          </div><!-- /.blog-post -->


          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Mais antigos</a>
            <a class="btn btn-outline-secondary disabled" href="#">Mais novos</a>
          </nav>



          <form class="was-validated" method="POST">
            <div>

              <div class="mb-3">
                <label for="inome"><strong>Nome:</strong></label><br>
                <input type="text" name="nome" id="iNome" required><br>

              </div>

              <div class="mb-3">

                <textarea class="form-control" name="comentario" id="validationTextarea" placeholder="Comente aqui" required></textarea>
                <div class="invalid-feedback">
                  Por favor digite seu comentario.
                </div>
              </div>

              <div>
                <nav class="blog-pagination">
                  <input class="btn btn-outline-primary" type="submit" value="Comentar">

                </nav>
              </div>




            </div>



          </form>

          <!-- Listando os comentarios salvos no banco-->

          <div class="col-md-8 blog-main">
            <?php
            $busca_comentario = "SELECT nome, comentario FROM usuario";

            $resultado = $conexao->query($busca_comentario);

            if ($resultado->num_rows > 0) {
              while ($lista = $resultado->fetch_assoc()) {
                echo "<p><img src='data:image/png;base64,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'><strong>" . ucwords(strtolower($lista["nome"])) . "</strong></p>" .
                  "<p>" . ucfirst(strtolower($lista["comentario"])) . "</p>" .
                  "<p><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABy0lEQVR4nO2WSytFURiGH4SS68HouEb+gglDhi45/4ABCr8CEwN+CBEDIYlyLffCwN0plzKiKNpa9ardOftysHcMvLXa9X3v977rW3vvtRb845eRBsSACSAOvADnwCTQoryd2wpMifOimnGgI4HriXJgHbA8xiJQJu6SD3dNPF/TuAougG7FMvUcAB6Uv9KwFOtP4PYAl8rHvczTbJ3OA/kuvAiwYutoWTEnGI0F8Vbdlj1m69TN9BN5muQGkOvDzbd1bt55EiaUNMsbNHqlbT64JNwoWRGCcZW0jUcSXpXMCsE4W9rGIwl3IXZcKe1bp+Sckp0hGHdJe9YpOaDk/ld2mxSQDhxIu8+JYP7FZxHaAjRul+YTUORGGhLpBMgJwDRHWhYw6LcxnIk4GoDxmLTOpO2JRuBdo+kHps3SeAMaUi0a1kwfgbpvmNap1tLrSxkZwIwKjz0OASdEVGNqp6X1JZjNf1cCO0BxCjWFwKZqDoECvokocCqhbR/zYnEs1ZjaH6FCVxpLK1DiwDH/55btglBNQKjVOW2E9xK6iWq3szTBGgJGue2juQbqNa4VO9I9LBREXC535lpTSsjIBkaAex2lI4r942/iA8sUk7Pv/epZAAAAAElFTkSuQmCC'> like            
                                <img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAaklEQVR4nO2UQQqAMAwE54U9+SHxq+0rPMRL9VKV2KQQigN7CuxACIGfDySgAGJMqV0NHuVSk+8E59CKPPXMKRBl4gp6iCUQ5VriCnqYWJCND24HljdBcpKI0yYaVuWVuUkYLWEk22jBxQFSnqX63t+83wAAAABJRU5ErkJggg=='></p>" .
                  "__________________________________________________________";
              }
            }
            ?>


          </div>



        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Sobre</h4>
            <p class="mb-0">
            <p> Portal está construído <em> de forma a ser interoperável com sistemas similares nacionais e internacionais,</em> tais como Google Acadêmico, OASIS do IBICT/MCT, Public Knowledge Project e outros.</p>
          </div>


          <div class="p-3">
            <h4 class="font-italic">Arquivos</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">Março de 2018</a></li>
              <li><a href="#">Fevereiro de 2018</a></li>
              <li><a href="#">Janeiro de 2018</a></li>
              <li><a href="#">Dezembro de 2017</a></li>
              <li><a href="#">Novembro de 2017</a></li>
              <li><a href="#">Outubro de 2017</a></li>
              <li><a href="#">Setembro de 2017</a></li>
              <li><a href="#">Agosto de 2017</a></li>
              <li><a href="#">Julho de 2017</a></li>
              <li><a href="#">Junho de 2017</a></li>
              <li><a href="#">Maio de 2017</a></li>
              <li><a href="#">Abril de 2017</a></li>
            </ol>
          </div>


          <div class="p-3">
            <h4 class="font-italic">Onde nos encontrar, por aí:</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->


    <?php
    //Inserindo os comentarios no banco de dados

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

      $usuario = $_POST["nome"];
      $comentario = $_POST["comentario"];
      $id_gerado = rand(3, 1000);



      $inseri_dados = "INSERT INTO usuario (id_usuario,nome,comentario) VALUES('$id_gerado','$usuario','$comentario')";

      $resultado=$conexao->query($inseri_dados);
    }
    ?>


    <footer class="blog-footer">
      <p>Template de blog construído para o <a href="https://getbootstrap.com/">Bootstrap</a>, pelo <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Voltar ao topo</a>
      </p>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    </script>
</body>

</html>