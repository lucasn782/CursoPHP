<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <?php 
            $min = 0;
            $max = 100;
            $numero_aleatorio = mt_rand($min, $max);
            echo "<p>Gerando um número aleatório entre $min e $max...</p>";
            echo "<p>O número sorteado é: <strong>$numero_aleatorio</strong></p>";
        ?>
        <button onclick="javascript:location.reload()">⟳ Gerar outro número</button>
    </main>
</body>
</html>