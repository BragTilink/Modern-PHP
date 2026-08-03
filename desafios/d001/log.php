<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 000</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
        <main>
            <?php
                $number = $_GET["num"] ?? "Você não digitou um numero ";
                $num_more = $_GET["num"] + 1; 
                $num_less = $_GET["num"] - 1;
                echo "<p>O número digitado é <strong>$number</strong> <br>O antecessor é $num_less <br> O sucessor é $num_more";
            ?>
            <form action="index.html">
                <input type="submit" value="Voltar">
            </form>
        </main>
    </header>
</body>
</html>