<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario preenchido</title>
</head>
<body>
<?php

        
    if(!$_POST){
        echo "<script>alert('requisição inválida,retorne ao formulario'); history.back()</script>";
    }

    $nome      = $_POST["nome"] ?? NULL ;
    $email     = $_POST["email"] ?? NULL ;
    $estado    = $_POST["estadoCivil"] ?? NULL ;
    $biografia = $_POST["biografia"] ?? NULL ;
    if(empty($nome)){
        echo "<script>alert('não tem nome , tente novamente');history.back();</script>";
        exit;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Email vazio ou digitado incorretamente,tente novamente');history.back();</script>";
        exit;
    }
    echo"
     <div class='container mt-5'>    
       <ul class='list-group'>
        <li class='list-group-item'><strong>Nome:</strong> {$nome}</li>
        <li class='list-group-item'><strong>Email:</strong> {$email}</li>
        <li class='list-group-item'><strong>Estado civil:</strong> {$estado}</li>
        <li class='list-group-item'><strong>Biografia:</strong> {$biografia}</li>
        
       </ul>
     </div>";
    

    include "form1.php";
    exit;
?>


</body>
</html>