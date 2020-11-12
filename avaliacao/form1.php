<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" >

    <title>Avaliação</title>
</head>
<body>
<div class="container">
    <h1>Formulario</h1>
    <fieldset>
        <form class="form-group" action="ex1.php" method="post">
        <label for="nome">Digite seu nome: </label>
        <input type="text" id="nome" maxlength="50"  class="form-control" name="nome" placeholder="digite seu nome" required>
       
        <label for="email">Digite seu Email</label>
        <input type="email" id="email" maxlength="100" class="form-control" name="email" placeholder="Digite seu email" required>
        
        <label for="estadoCivil" >Estado civil</label>
        <select class="form-control" name="estadoCivil" id="estadoCivil" >
            <option value=" ">Escolha seu estado  cicil</option>
            <option value="casado">Casado</option>
            <option value="solteiro">Solteiro</option>
            <option value="enrolado">Enrolado</option>
        </select>

        <label for="biografia">Biografia</label>
        <textarea class="form-control" name="biografia" id="biografia" cols="30" rows="10" >
        
        </textarea>
        <div class=" mt-5">
            <button class="btn btn-dark" type="submit" mt-5>Enviar</button>
        </form>
        </div>
    
    </fieldset>
</div>

<script src="./jquery/jquery-3.5.1.slim.min.js" ></script>
<script src="./popper/popper.min.js" ></script>
<script src="./bootstrap/js/bootstrap.min.js" ></script>

</body>
</html>