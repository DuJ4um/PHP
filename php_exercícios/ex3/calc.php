<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula o volume de um paralelepípedo.</title>
</head>
<style>body{text-align: center;}</style>
<body>
    <header>
        <h1>Calcula o volume de um paralelepípedo.</h1>
    </header>
    <main>
        <p>O volume de um paralelepípedo é: <?= number_format(($_POST['c'] * $_POST['l'] * $_POST['a']), 2, ",", ".")?></p>
    </main>
</body>
</html>