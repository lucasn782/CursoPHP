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
        $segundos = $_GET['segundos'] ?? 0;
	    $sobra = $segundos;
	    $semana = (int)($sobra / 604_800);
	    $sobra = $sobra % 604_800;
	    $dia = (int)($sobra / 86_400);
	    $sobra = $sobra % 86_400;
	    $hora = (int)($sobra / 3_600);
	    $sobra = $sobra % 3_600;
	    $minuto = (int)($sobra / 60);
	    $sobra = $sobra % 60;
	    $segundo = $sobra;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual é o total de segundos? </label>
            <input type="number" name="segundos" id="segundos" required value="<?=$segundos?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($segundos, 0, ",", ".")?> segundos</strong> equivalem a um total de: </p>
        <ul>
            <li><strong><?=$semana?> semanas</strong></li>
            <li><strong><?=$dia?> dias</strong></li>
            <li><strong><?=$hora?> horas</strong></li>
            <li><strong><?=$minuto?> minutos</strong></li>
            <li><strong><?=$segundo?> segundos</strong></li>
        </ul>
    </section>
</body>
</html>