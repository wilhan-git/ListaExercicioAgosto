<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contador</title>
</head>

<body>
    <!-- Tela do Cronometro-->


    <h1 id="frase">
        Contagem regressiva ....
    </h1>

    <div class="contador">
        <div class="contador-dias" id="validaDia">
            <p class="text" id="dias">0</p>
            <span>DIAS</span>
        </div>
        <div class="contador-horas"  id="validaHora" >
            <p class="text" id="horas">0</p>
            <span>HORAS</span>
        </div>
        <div class="contador-minutos"  id="validaMinuto" >
            <p class="text" id="minutos">0</p>
            <span>MINUTOS</span>
        </div>
        <div class="contador-segundos" id="validaSeg">
            <p class="text" id="segundos">0</p>
            <span>SEGUNDOS</span>
        </div>
    </div>

    <?php

        //Recebe e valida se a data e valida.

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            date_default_timezone_set('America/Sao_paulo');

            $datafinal = $_POST['datafinal'];
            $validaData = new DateTime();

            $formata = $validaData->format('Y-m-d H:i:s');

            if(strtotime($datafinal) < strtotime($formata)){
                echo "<script>Javascript:window.alert('Favor Selecionar uma Data Valida......')</script>";
                die("<script>Javascript:window.location.href='https://www.google.com'</script>");
            }
        }

    ?>


    <script language="javascript">
        const diasEl = document.getElementById('dias');
        const horasEl = document.getElementById('horas');
        const minutosEl = document.getElementById('minutos');
        const segundosEl = document.getElementById('segundos');
        let validaELdia = document.getElementById('validaDia');
        let validaELHora = document.getElementById('validaHora');
        let validaELMinuto = document.getElementById('validaMinuto');
        let validaELSeg = document.getElementById('validaSeg');
        let fraseEl = document.getElementById('frase');

        //Recebe a Data final que vem do post.
        const datafinal = "<?php echo $datafinal; ?>";
        

        //função que se auto atualiza e decrementa o tempo.

        function contador() {
            const recebedata = new Date(datafinal);
            const atualdata = new Date();

          
            //Modela o tempo que chega em Segundos para dia,hora,minutos e segundos.

            const totalSegundos = (recebedata - atualdata) / 1000;

            const dias = Math.floor(totalSegundos / 3600 / 24);
            const horas = Math.floor(totalSegundos / 3600) % 24;
            const minutos = Math.floor((totalSegundos / 60) % 60);
            const segundos = Math.floor(totalSegundos) % 60;

            //Formata a visualização do tempo com 0 a esquerda se for menor que 10.

            diasEl.innerHTML = dias;
            horasEl.innerHTML = formataData(horas);
            minutosEl.innerHTML = formataData(minutos);
            segundosEl.innerHTML = formataData(segundos);

            //Identifica se a algum tempo zerado e remove da tela.

            if(dias==0){
                validaELdia.style.display = "none";
            }

            if(horas==0){
                validaELHora.style.display = "none";
            }
            if(minutos==0){
                validaELMinuto.style.display = "none";
            }

            if(segundos == -1){
              validaELSeg.style.display="none";
              fraseEl.innerHTML = "Cronometro Encerrado";
             
            }

        }

        //função para formatar o tempo menor que 10.

        function formataData(tempo) {
            return tempo < 10 ? '0' + tempo : tempo;
        }

        contador();

        //Chama a função para iniciar a contagem a cada 1000 milisegundos.

        setInterval(contador, 1000);
    </script>
</body>

</html>