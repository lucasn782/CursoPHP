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
        $preco_produto = $_GET['preco_produto'] ?? 0;
        $formatter = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $porcentagem = $_GET['porcentagem'] ?? 0;
        $valor_reajuste = $preco_produto * ($porcentagem / 100);
        $novo_preco = $preco_produto + $valor_reajuste;
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco_produto">Preço do produto (R$): </label>
            <input type="number" name="preco_produto" id="preco_produto" step="0.01" value="<?=$preco_produto?>">
            <label for="porcentagem">Qual será o percentual do reajuste? <strong>(<span id="p">?</span>%)</strong></label>
            <input type="range" id="porcentagem" name="porcentagem" min="0" max="100" step="1" oninput="atualizaValor(this.value)" value="0">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <p>O produto, que originalmente custava <?=$formatter->format($preco_produto)?>, sofrerá um reajuste de <?=$porcentagem?>% e passará a custar <?=$formatter->format($novo_preco)?>.</p>
    </section>
    <script>
        atualizaValor();
        function atualizaValor() {
            p.innerText = porcentagem.value;
        }
        
    </script>
</body>
</html>