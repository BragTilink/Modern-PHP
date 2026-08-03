<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Anatomia de uma divisão</h1>
    </header>
    <main>
        <?php 
            $dividendo = $_GET['div'] ?? 1;
            $divisor = $_GET['dev'] ?? 1;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="div">Dividendo</label>
            <input type="number" name="div" id="div" value="<?=$dividendo?>">
            <label for="dev">Divisor</label>
            <input type="number" name="dev" id="dev" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
        <?php 
            $calReal = $dividendo / $divisor;
            $calRest = $dividendo % $divisor;
            echo "<p>A divisão <strong>real</strong> entre $dividendo e $divisor é: <strong>".number_format($calReal, 2, ',') ."</strong> <br>Agora o <strong>resto</strong> da divisão é:<strong>$calRest</strong>.";
        ?>
    </main>
</body>
</html>