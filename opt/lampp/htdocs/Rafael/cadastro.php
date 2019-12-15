<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <script type="text/javascript">

function validacao() {

var formulario = document.forms['formcadastro']
var cpf = formulario.cpf.value

if (cpf.length != 14){
    alert("Preencha o CPF corretamente")
}

}
    
    
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

    <form  name="formcadastro" method="post" action="processa.php" onsubmit="return validacao()">
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