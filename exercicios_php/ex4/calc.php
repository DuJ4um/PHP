<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula desconto de 8% e 11%.</title>
</head>
<style>body{text-align: center;}</style>
<body>
    <header>
        <h1>Calcula desconto de 8% e 11%.</h1>
    </header>
    <main>
        <p>Valor final a ser pago: <?= number_format(((( $_POST['v1']+( 0.08 * $_POST['v1']))+((0.11*$_POST['v2']+$_POST['v1'])))), 2, ",", ".")?></p>
    </main>
</body>
</html>