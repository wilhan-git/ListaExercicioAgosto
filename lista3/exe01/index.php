<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cronometro</title>
</head>

<body>
    <form action="pgContador.php" method="post">
        <label for="datainicial">Data inicial:</label>
        <input type="datetime-local" id="dataInicial" name="datainicial" required>

        <label for="datafinal">Data final:</label>
        <input type="datetime-local" id="datafinal" name="datafinal" required>

        <button type="submit" name="calcular">Calcular</button>
    </form>

</body>

</html>