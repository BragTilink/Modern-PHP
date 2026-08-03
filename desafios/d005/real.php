<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Número analizado</h1>
    </header>
    <main>
        <?php
            $numero = $_GET["num"] ?? 0;
            $int = intval($numero);
            $real = $numero - $int;
            echo "<p>Seu numero <strong>" . number_format($numero, 3, ',', '.') . "</strong> foi analisado: <br> A parte inteira é <strong>$int</strong> <br> A parte real é <strong>" . number_format($real, 3, ',', '.') . "</strong><p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>