<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado da conversão</title>
</head>
<body>
    <header>
        <h1>Conversor de moedas 1.0</h1>
    </header>
    <main>
        <?php 
            $dinheiro = $_REQUEST["dinheiro"] ?? 0;
            $cotacao_dolar = 5.25;
            $conversao_dolar = $dinheiro / $cotacao_dolar;
            $formatter = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus <strong>" . numfmt_format_currency($formatter, $dinheiro, "BRL") . "</strong> equivalem à <strong>" . numfmt_format_currency($formatter, $conversao_dolar, "USD") . "</strong>.</p>";
            echo "<p>A cotação do dólar é fixa no código, e vale <strong>" . numfmt_format_currency($formatter, $cotacao_dolar, "BRL") . "</strong>.</p>";
        ?>
            <button onclick="javascript:history.go(-1)">Voltar à pagina anterior</button>
    </main>
</body>
</html>