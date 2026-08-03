<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        //Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somando numeros</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>"> <!--value = a variavel $valor1 por meio da Short Open tag-->
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>"> <!--value = a variavel $valor2 por meio da Short Open tag-->
            <input type="submit" value="Calcular">
        </form>
        <section>
            <h2>Resultado da soma</h2>
            <?php 
                $soma = $valor1 + $valor2;
                print "<p>A soma entre os valores $valor1 + $valor2 <strong>é igual a $soma</strong>.</p>";            
            ?>
        </section>
    </main>
</body>
</html>