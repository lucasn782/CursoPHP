<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="estilos/estilo.css">
</head>
<body>
    <?php 
        $dinheiro = $_GET['dinheiro'] ?? 0;
        $formatter = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $dinheiro_a_sacar = $dinheiro;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dinheiro">Quanto você deseja sacar? (R$)* </label>
            <input type="number" name="dinheiro" id="dinheiro" step="0.05" value="<?=$dinheiro?>">
            <p>Notas disponíveis: R$200, R$100, R$50, R$20, R$10 e R$5</p>
            <p>Moedas disponíveis: R$1, R$0.50, R$0.25, R$0.10 e R$0.05</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
        <h2>Saque de <?=numfmt_format_currency($formatter, $dinheiro, "BRL")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <?php
                $notas_200 = floor($dinheiro_a_sacar / 200);
                $dinheiro_a_sacar -= $notas_200 * 200;

                $notas_100 = floor($dinheiro_a_sacar / 100);
                $dinheiro_a_sacar -= $notas_100 * 100;

                $notas_50 = floor($dinheiro_a_sacar / 50);
                $dinheiro_a_sacar -= $notas_50 * 50;

                $notas_20 = floor($dinheiro_a_sacar / 20);
                $dinheiro_a_sacar -= $notas_20 * 20;

                $notas_10 = floor($dinheiro_a_sacar / 10);
                $dinheiro_a_sacar -= $notas_10 * 10;

                $notas_5 = floor($dinheiro_a_sacar / 5);
                $dinheiro_a_sacar -= $notas_5 * 5;

                $moedas_1 = floor($dinheiro_a_sacar / 1);
                $dinheiro_a_sacar -= $moedas_1 * 1;

                $moedas_050 = floor($dinheiro_a_sacar / (1 / 2));
                $dinheiro_a_sacar -= $moedas_050 * (1 / 2);

                $moedas_025 = floor($dinheiro_a_sacar / (1 / 4));
                $dinheiro_a_sacar -= $moedas_025 * (1 / 4);

                $moedas_010 = floor($dinheiro_a_sacar / (1 / 10));
                $dinheiro_a_sacar -= $moedas_010 * (1 / 10);

                $moedas_005 = floor($dinheiro_a_sacar / (1 / 20));
                $dinheiro_a_sacar -= $moedas_005 * (1 / 20);
            ?>
            <li><img src="imagens/200-reais.png" alt="nota_de_200" width="50%" height="50%">x<?= $notas_200 ?></li>
            <li><img src="imagens/100-reais.jpg" alt="nota_de_100">x<?= $notas_100 ?></li>
            <li><img src="imagens/50-reais.jpg" alt="nota_de_50">x<?= $notas_50 ?></li>
            <li><img src="imagens/20-reais.jpg" alt="nota_de_20">x<?= $notas_20 ?></li>
            <li><img src="imagens/10-reais.jpg" alt="nota_de_10">x<?= $notas_10 ?></li>
            <li><img src="imagens/5-reais.jpg" alt="nota_de_5">x<?= $notas_5 ?></li>
            <li><img src="imagens/1-real.jpg" alt="moeda_de_1">x<?= $moedas_1 ?></li>
            <li><img src="imagens/50-centavos.png" alt="moeda_de_50_centavos" width="25%" height="25%">x<?= $moedas_050 ?></li>
            <li><img src="imagens/25-centavos.png" alt="moeda_de_25_centavos" width="25%" height="25%">x<?= $moedas_025 ?></li>
            <li><img src="imagens/10-centavos.png" alt="moeda_de_10_centavos" width="25%" height="25%">x<?= $moedas_010 ?></li>
            <li><img src="imagens/5-centavos.png" alt="moeda_de_5_centavos" width="24%" height="24%">x<?= $moedas_005 ?></li>
        </ul>
    </section>
</body>
</html>