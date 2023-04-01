<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula desconto de 7%.</title>
</head>
<style>body{text-align: center;}</style>
<body>
    <header>
        <h1>Calcula desconto de 7%..</h1>
    </header>
    <main>
        <p>Valor original do produto: <?= number_format($_POST['vo'], 2, ",", ".")?></p>
        <p>Valor a ser descontado: <?= number_format(( 0.07 * $_POST['vo']), 2, ",", ".")?></p>
        <p>Valor do produto com desconto: <?= number_format(($_POST['vo'] - ( 0.07 * $_POST['vo'])), 2, ",", ".")?></p>
    </main>
</body>
</html>