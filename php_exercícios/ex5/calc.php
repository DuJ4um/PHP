<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converte Celsius em Fahrenheit.</title>
</head>
<style>body{text-align: center;}</style>
<body>
    <header>
        <h1>Converte Celsius em Fahrenheit.</h1>
    </header>
    <main>
        <p>O a temperatura atual em Fahrenheit é de: <?= number_format((((9*$_POST['c'])+160)/5), 2, ",", ".")?></p>
    </main>
</body>
</html>