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
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 0;
        function mediaAritmeticaSimples($valor1, $valor2) {
            $media = ($valor1 + $valor2) / 2;
            return $media;
        }
        function mediaAritmeticaPonderada($valor1, $valor2, $peso1, $peso2) {
            $soma = 0;
            $valores = array($valor1, $valor2);
            $pesos = array($peso1, $peso2);
            $soma_pesos = array_sum($pesos);
            for ($i = 0; $i < 2; $i++) {
                $soma += $valores[$i] * $pesos[$i];
            }
            $media = $soma / $soma_pesos;
            return $media;
        }
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1° Valor: </label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="peso1">1° Peso: </label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="valor2">2° Valor: </label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <label for="peso2">2° Peso: </label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Cálculo das médias</h2>
        <p>Analisando os valores <strong><?=$valor1?></strong> e <strong><?=$valor2?></strong>: </p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong><?=number_format(mediaAritmeticaSimples($valor1, $valor2), 2, ",", ".")?></strong></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <strong><?=$peso1?></strong> e <strong><?=$peso2?></strong> é igual a <strong><?=number_format(mediaAritmeticaPonderada($valor1, $valor2, $peso1, $peso2), 2, ",", ".")?></strong></li>
        </ul>
    </section>
</body>
</html>