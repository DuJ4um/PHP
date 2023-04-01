<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula média.</title>
</head>
<style>body{text-align: center;}</style>
<body>
    <header>
        <h1>Calcula Média.</h1>
    </header>
    <main>
        <p>
            <?php if (($_POST['p']/( $_POST['a']**2)) < 0): ?>
                Informe a altura em metros!!
            <?php elseif (($_POST['p']/( $_POST['a']**2)) < 18.5): ?>
                Abaixo do peso normal.
            <?php elseif (($_POST['p']/( $_POST['a']**2)) < 25): ?>
                Peso normal.
            <?php elseif (($_POST['p']/( $_POST['a']**2)) < 30): ?>
                Excesso de peso.
            <?php elseif (($_POST['p']/( $_POST['a']**2)) < 35): ?>
                Obesidade grau I.
            <?php elseif (($_POST['p']/( $_POST['a']**2)) < 40): ?>
                Obesidade grau II.
            <?php else: ?>
                Obesidade grau III.
            <?php endif ?>
        </p>
    </main>
</body>
</html>