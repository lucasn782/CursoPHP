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
        $num = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número: </label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $rq = $num ** (1/2);
            $rc = $num ** (1/3); 
        ?>
        <p>Analisando o número <strong><?=$num?></strong>, temos: </p>
        <ul>
            <li>A sua raíz quadrada é <strong><?=number_format($rq, 3, ",", ".");?></strong></li>
            <li>A sua raíz cúbica é <strong><?=number_format($rc, 3, ",", ".");?></strong></li>
        </ul>
    </section>
</body>
</html>