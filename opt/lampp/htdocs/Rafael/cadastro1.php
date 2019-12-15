<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="tex/javascript" src="js/jquery-3.4.1.min.js"> </script>
    <script type="tex/javascript" src="js/bootstrap.min.js"> </script>
    <script type="tex/javascript" src="jquery.validate.min.js"> </script>

    <script>
        $(document).ready(function(){
            $('#formulario').validade();
        })
    
    </script>

    <title>Cadastro</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="caixa.png" width="200" height="50" alt="">
        </a>
    </nav>

    <br><br>

    <span id="sis">SISTEMA DE CADASTRO - GILIE:</span><br><br>

    <form  id="formulario" name="formcadastro" method="post" action="processa.php">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nome:</label><br>
            <textarea class="form-control" name="nome" id="exampleFormControlTextarea1" rows="1"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">CPF:</label><br>
            <textarea class="form-control" name="cpf" id="exampleFormControlTextarea1" rows="1"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">E-mail:</label><br>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <input type="submit" value="salvar" class="btn">
        <input type="reset" value="resetar" class="btn"><br><br> <br>
    </form>

    <ul class="menu">
        <a href="consulta.php">
            <li>Consultar</li>
        </a>
    </ul>

</body>


</html>