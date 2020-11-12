<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabalho</title>
</head>
<body>
<h1>exercício 3</h1>
<?php

for ($i = 1; $i <= 20; $i++) {
    echo "$i- ";
    
}
    
$i = 1;
while ($i <= 20) {
    
    if(($i % 2) == 0){
        echo "<p style = 'color: blue'> $i </p>";
    }else{
        echo "<p style = 'color: red'> $i </p>";
    }
    $i++;
}  

?>
    
</body>
</html>