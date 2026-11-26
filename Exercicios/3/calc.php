<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moeda</h1>

        <?php
            $din = $_GET["dinheiro"];
            $cot = 5.83;
            $convert = $din/$cot;
            echo "Seus R$ $din equivalem à <strong>U$ " . number_format($convert, 2) . "</strong><br>";
            echo "Seguindo a cotação fixa de R$:1 = U$:$cot";
        ?>
        <input type="button" value="Voltar" onclick="history.back()">
    </main>
</body>
</html>