<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculando sua idade</h1>
    </header>
    <main>
        <?php 
            $data = (int) date('Y');
            $born =  $_GET['born'] ?? 2000;
            $today =  $_GET['today'] ?? "$data";
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="born">Em que ano você nasceu?</label>
            <input type="number" name="born" id="idborn" value="<?= $born ?>">
            <label for="today">Quer saber sua idade em qual ano? (atualmente estamos em <strong><?= $data ?></strong>.)</label>
            <input type="number" name="today" id="today" value="<?= $today ?>">
            <input type="submit" value="Calcular">
        </form>
        <?php 
            $calculo = $today - $born;
            echo "Ano de nascimento: $born <br>";
            echo "Ano para cálculo: $today <br>";
            echo "<p>Quem nasceu em $born vai ter <strong>$calculo anos</strong> em $today!<p>";
            
            var_dump($_GET);
            
        ?>
    </main>
</body>
</html>