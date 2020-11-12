<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercício 01</h1>
     <?php
        $valor = 200;
        $desconto = 20;

        $desconto = $valor - ($valor * ($desconto / 100));


        echo "o valor do desconto em reais é". number_format($desconto,2,',','.');

     ?>
</body>
</html>