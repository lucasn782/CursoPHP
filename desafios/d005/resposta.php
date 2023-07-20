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
        <h1>Analisador de número real</h1>
    </header>
    <main>
        <?php 
            $numero = $_POST["numero"];
            $numero_inteiro = (int) $numero;
            $fracionado = $numero - $numero_inteiro;
            echo "<p>O número digitado é <strong>". number_format($numero, 4, ",", ".") ."</strong>.</p>";
            echo "<ul><li>A parte inteira do número digitado por você é <strong>$numero_inteiro</strong>.</li><li>A parte fracionada do número digitado por você é <strong>". number_format($fracionado, 4, ",", ".") ."</strong>.</li></ul>";
        ?>
            <button onclick="javascript:history.go(-1)">Voltar à pagina anterior</button>
    </main>
</body>
</html>