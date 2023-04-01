<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posso me alistar?</title>
</head>
<style>body{text-align: center;}</style>
<body>
    <header>
        <h1>Posso me alistar?</h1>
    </header>
    <main>
        <p>
            <?php if ($_POST['i'] >= 18 && $_POST['s'] == "m"): ?>
                <?= $_POST['n'] ?> você já pode realizar o seu alistamento militar.
            <?php elseif ($_POST['i'] < 18 && $_POST['s'] == "m"): ?>
                <?= $_POST['n'] ?> você só pode se alistar quando completar 18 anos.
            <?php else: ?>
                <?= $_POST['n'] ?> você não pode se alistar.
            <?php endif ?>
        </p>
    </main>
</body>
</html>