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
        $ano_nasc = $_GET['ano_nasc'] ?? '2000';
        $ano_calc = $_GET['ano_calc'] ?? $ano_atual;
        $ano_atual = date('Y');
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu? </label>
            <input type="number" name="ano_nasc" id="ano_nasc" value="<?=$ano_nasc?>" max="<?=$ano_atual?>">
            <label for="ano_calc">Quer saber a sua idade em que ano? (Atualmente estamos em <strong><?=$ano_atual?></strong>)</label>
            <input type="number" name="ano_calc" id="ano_calc" value="<?=$ano_calc?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <p>Quem nasceu em <strong><?=$ano_nasc?></strong> vai ter <strong><?=($ano_calc-$ano_nasc)?> anos</strong> em <strong><?=$ano_calc?></strong>!</p>
    </section>
</body>
</html>