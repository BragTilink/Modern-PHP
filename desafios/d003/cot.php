<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas v1.0</h1>
    </header>
    <main>
        <?php
            $wallet = $_GET["real"];
            $dollar = $_GET["real"] / 5.08;
            $euro = $_GET["real"] / 5.86;
            echo "<p>Seus R\$ " .number_format($wallet, 2, ',','.') ." equivalem a <strong>US\$ " .number_format($dollar, 2, ',', '.') ."</strong> <br>E em <strong>€ " .number_format($euro, 2, ',','.') ."</strong><p> <br> <p><strong>*Cotação fixa de 5,08 para dólar e 5,86 para euro</strong>, informada diretamente no código.";
        ?>
        <form action="index.html">
            <input type="submit" value="Voltar">
        </form>
    </main>
</body>
</html>