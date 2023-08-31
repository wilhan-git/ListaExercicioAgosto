<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/aula php1/ListaExercicioAgosto/llista3/exe1/css/style.css">
    <title>Cronometro</title>
</head>
<body>
    <div class="data">
        <form action="script.php" method="POST">
            <div>
                <label for="datafinal">DETERMINE A DATA E HORA FINAL:</label>
                <input type="datetime-local" name="datafinal" id="iDatafinal">
            </div>
            <div>
                <label for="datainicial">DETERMINE A DATA E HORA INICIAL:</label>
                <input type="datetime-local" name="datainicial" id="iDatainicial">
            </div>

            <input type="submit" value="GERAR CRONOMETRO">
        </form>
    </div>

    <div class="relogio">
        <div>
            <span id="horas">00</span>
            <span class="tempo">horas</span>
        </div>

        <div>
            <span id="minutos">00</span>
            <span class="tempo">minutos</span>
        </div>
        <div>
            <span id="segundos">00</span>
            <span class="tempo">segundos</span>
        </div>
    </div>


</body>
</html>