<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equação 2º Grau</title>
</head>
<style>body{text-align: center;}</style>
<body>
    <header>
        <h1>Equação 2º Grau</h1>
    </header>
    <main>
        <p>O valor de delta é: <?= number_format((($_POST['b']**2)-((4*$_POST['a'])*($_POST['c']))), 2, ",", ".") ?></p>
        <p>O valor de x1 é: <?= number_format(((-$_POST['b']+(($_POST['b']**2)-((4*$_POST['a'])*($_POST['c'])))) / $_POST['a']*2), 2, ",", ".") ?></p>
        <p>O valor de x2 é: <?= number_format(((-$_POST['b']-(($_POST['b']**2)-((4*$_POST['a'])*($_POST['c'])))) / $_POST['a']*2), 2, ",", ".") ?></p>
    </main>
</body>
</html>