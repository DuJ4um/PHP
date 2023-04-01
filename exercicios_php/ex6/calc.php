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
            <?php if ((($_POST['1'] + $_POST['2'])/2) < 7): ?>
                Aluno Reprovado
            <?php else: ?>
                Média: <?= number_format((($_POST['1'] + $_POST['2'])/2), 2, ",", ".") ?>
            <?php endif ?>
        </p>
    </main>
</body>
</html>