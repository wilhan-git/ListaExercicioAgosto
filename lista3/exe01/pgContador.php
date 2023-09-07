<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contador</title>
</head>

<body>
    <h1>
        Contagem regressiva ....
    </h1>

    <div class="contador">
        <div class="contador-dias" id="validaDia">
            <p class="text" id="dias">0</p>
            <span>DIAS</span>
        </div>
        <div class="contador-horas" id="validaHora">
            <p class="text" id="horas">0</p>
            <span>HORAS</span>
        </div>
        <div class="contador-minutos" id="validaMinutos">
            <p class="text" id="minutos">0</p>
            <span>MINUTOS</span>
        </div>
        <div class="contador-segundos">
            <p class="text" id="segundos">0</p>
            <span>SEGUNDOS</span>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $datafinal = $_POST['datafinal'];
        $datainicial = $_POST['datainicial'];

        if ($datafinal < $datainicial) {
            die("<script>Javascript:window.location.href = 'index.php';</script>");
        }
    }

    ?>

    <script language="javascript">
        const diasEl = document.getElementById('dias');
        const horasEl = document.getElementById('horas');
        const minutosEl = document.getElementById('minutos');
        const segundosEl = document.getElementById('segundos');
        let validaDia = document.getElementById('validaDia');
        let validaHoras = document.getElementById('validaHoras');
        let validaMinutos = document.getElementById('validaMinutos');

        const datafinal = "<?php echo $datafinal; ?>";
        const datainicial = "<?php echo $datainicial; ?>";

        function contador() {
            const recebedata = new Date(datafinal);
            const atualdata = new Date(datainicial);

            let temporizador = (recebedata - atualdata) / 1000;

            setInterval(function() {
                const totalSegundos = temporizador;

                //transforma os segundos em dias, horas, minutos e segundos.

                const dias = Math.floor(totalSegundos / 3600 / 24);
                const horas = Math.floor(totalSegundos / 3600) % 24;
                const minutos = Math.floor((totalSegundos / 60) % 60);
                const segundos = Math.floor(totalSegundos) % 60;

                //Formata o time se for menor que zero.

                diasEl.innerHTML = dias;
                horasEl.innerHTML = formataData(horas);
                minutosEl.innerHTML = formataData(minutos);
                segundosEl.innerHTML = formataData(segundos);

                //Verifica se o tempo chegou a zero e retira da tela.

                if(dias == 0) {
                    validaDia.style.display = "none";
                }
                if(horas == 0) {
                    validaHora.style.display = "none";
                }
                if(minutos == 0) {
                    validaMinutos.style.display = "none";
                }


                if(--temporizador < 0) {
                    location.reload();
                }

                if(temporizador == 0) {
                    window.alert("Contagem finalizada..................");
                    window.location.href = 'index.php';

                }


            }, 1000);
        }

        function formataData(tempo) {
            return tempo < 10 ? '0' + tempo : tempo;
        }

        contador();
    </script>
</body>

</html>