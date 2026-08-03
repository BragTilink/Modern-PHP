<!DOCTYPE html>
<html lang="p-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Quantos salários minimos voce ganha?</h1>
    </header>
    <main>
        <?php 
            $salario = $_GET['salario'] ?? 1;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Digite seu salário</label>
            <input type="number" name="salario" id="sal" step="0.01" value="<?=$salario?>">
            <input type="submit" value="Calcular">
        </form>
        <?php 
            $qtdsalmin = floor($salario / 1621);
            $resto = $salario - ($qtdsalmin * 1621);
            echo "<p>Com seu sálario de R$ $salario, você ganha $qtdsalmin salários minimos, mais R$ " . number_format($resto, 2) . " de resto.";        
        ?>
    </main>
</body>
</html>