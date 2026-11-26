<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $num = $_GET["numero"];
            echo "O numero escolhido foi <strong>$num</strong>.";
            echo "<br>Antecessor: " . $num-1;
            echo "<br>Sucessor: " . $num+1;
        ?>
        
        <button onClick="javascript:window.location.href='index.html'">
            Voltar
        </button>
    </main>
</body>
</html>