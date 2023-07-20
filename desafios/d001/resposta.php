<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>
    <main>
        <?php 
            $default = 0;
            $numero = $_REQUEST["numero"] ?? $default;
            $sucessor = $numero + 1;
            $antecessor = $numero - 1;
            echo "<p>O número digitado é <strong>$numero</strong>.</p>";
            echo "<p>O número sucessor ao digitado por você é <strong>$sucessor</strong>.</p>";
            echo "<p>O número antecessor ao digitado por você é <strong>$antecessor</strong>.</p>";
        ?>
            <button onclick="javascript:history.go(-1)">&#x2B05; Voltar à pagina anterior</button>
    </main>
</body>
</html>