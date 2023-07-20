<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero1 = $_GET['n1'] ?? 0;
        $numero2 = $_GET['n2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n1">Primeiro número: </label>
            <input type="number" name="n1" id="n1" value="<?=$numero1?>">
            <label for="n2">Segundo número: </label>
            <input type="number" name="n2" id="n2" value="<?=$numero2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $numero1 + $numero2;
            echo "<p>O resultado da soma entre $numero1 e $numero2 é igual à $soma.</p>";
        ?>
    </section>
</body>
</html>