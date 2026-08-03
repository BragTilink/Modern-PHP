<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio001</title>
    <link rel="stylesheet" href="sty.css">
</head>
<body>
    <header> 
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <p>Gerando um número aleátorio entre 0 e 100...</p>
        <?php
            $randon = mt_rand(0, 100);
            echo "<p>O número gerado é <strong>$randon</strong>"

        ?>
        <form method="post">
            <input type="submit" value="Gerar outro">
        </form>
    </main>
</body>
</html>