<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho</title>
</head>
<body>
<h1>Exercício 2</h1>
<?php
    $salario = 100;
    $condicional = 2000;
    $condicional = number_format($condicional,2,',','.');
    $valor  = number_format($salario,2,',','.');

     if ($valor > $condicional){
        echo "você recebe $valor R$ , Bom..";
     }
     else if ($valor == $condicional){
        echo "você recebe $valor R$ , até que não esta mal";
     }
     else {
        echo "você recebe $valor R$ , melhor procurar outro emprego";
     }
?>     
</body>
</html>