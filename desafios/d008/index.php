<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Raiz Quadrada e Raiz Cúbica</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET['numero'] ?? 1;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Insira um numero</label>
            <input type="number" name="numero" id="idnumero" value="<?=$numero?>">
            <input type="submit" value="Calcular">
        </form>
        <?php 
            $quadrado = sqrt($numero);
            $cubo = pow($numero, (1/3));
            echo "<p>O numero escolhido foi <strong>$numero</strong> <br>Sua <strong>raiz quadrado</strong> é: <strong>" . number_format($quadrado, 2) . "</strong> <br>E sua <strong>raiz cúbica</strong> é: <strong>" . number_format($cubo, 2) . "</strong>.<p>";
        ?>
    </main>
</body>
</html>