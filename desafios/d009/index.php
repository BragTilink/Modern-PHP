<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Médias Aritiméticas</h1>
    </header>
    <main>
        <?php 
            $valor1 = $_GET['v1'] ?? 1;
            $valor2 = $_GET['v2'] ?? 1;
            $peso1 = $_GET['p1'] ?? 1;
            $peso2 = $_GET['p2'] ?? 1;
        ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" value="<?= $peso1 ?>">
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" value="<?= $peso2 ?>">
            <input type="submit" value="Calcular">
        </form>
        <?php 
            $mediaSimples = ($valor1 + $valor2) / 2;
            $mediaPond = (($valor1 * $peso1)+($valor2 * $peso2)) / ($peso1 + $peso2);
            echo "<p>Analisando os valores $valor1 e $valor2: <br>A <strong>Média Aritimética Simples</strong> entre os valores é igual a " . number_format($mediaSimples, 2, ',') . "<br>A <strong>Média Aritimética Ponderada</strong> entre os valores é igual a " . number_format($mediaPond, 2, ',') . "<p>";
        ?>
    </main>
</body>
</html>