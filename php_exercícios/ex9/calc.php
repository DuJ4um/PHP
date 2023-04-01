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
        <h1>Progressão geométrica.</h1>
    </header>
    <main>
        <p><?php for($i=1; $i < ((int)$_POST['qt'] + 1); $i++){echo "a $i ... ".$_POST['pt'] * ($_POST['r']**($i-1))."<br>";} ?></p>
    </main>
</body>
</html>