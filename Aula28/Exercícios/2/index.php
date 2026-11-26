<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Gerador de número aleatorios</h1>
        <h3>Geração de algum número entre 0 e 100</h3>
        <?php
            $numero = random_int(0, 100);
            echo "O valor gerado foi: $numero";
        ?>
        <input type="button" value="Gerar" onclick="location.reload()">
    </section>
</body>
</html>