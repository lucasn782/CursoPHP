<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? $salario_min;
        $formatter = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salario_min = 1380.00;
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$): </label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong><?=numfmt_format_currency($formatter, $salario_min, "BRL")?></strong>.</p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $qt_salmin = intdiv($salario, $salario_min);
            $resto = $salario % $salario_min;
            $resto_fmt = numfmt_format_currency($formatter, $resto, "BRL");
            echo "<p>O seu salário é equivalente a <strong>{$qt_salmin} salário(s) mínimo(s)</strong> e sobram <strong>{$resto_fmt}</strong>.</p>";
        ?>
    </section>
</body>
</html>