<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // $num = 010;
        // echo "O valor da variável é $num!";
        // $v = 'Lucas';
        // var_dump($v);
        // $num = (integer) 3e2;
        // echo "O valor da variável é $num!";
        // var_dump($num);
        // $num = (double) "950";
        // var_dump($num);
        // $casado = true;
        // var_dump($casado);
        // echo "O valor da variável é $casado!";
        // $vet = [1, 3, true, 9, 81, 3.1415, 6561, "Lucas"];
        // var_dump($vet);
        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
        echo "PHP \u{1F418}"
    ?>
</body>
</html>