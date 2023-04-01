<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula área de uma circunferência...</title>
</head>
<style>body{text-align: center;}</style>
<body>
    <header>
        <h1>Calcula área de uma circunferência.</h1>
    </header>
    <main>
        <p>O valor da área da circunferência é: <?= number_format( ( 3.14 * (  $_POST['r']**2 ) ), 2, ",", ".")?></p>
    </main>
</body>
</html>