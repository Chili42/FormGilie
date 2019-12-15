
<?php

include_once("conexao.php");

$sql = "select * from usuarios";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <img src="caixa.png" width="200" height="50" alt="">
        </a>
    </nav>

    <br><br>

    <span id="sis">SISTEMA DE CONSULTAS - GILIE:</span><br><br>

    <form method="get" action="">
         <span class="form-group">Filtrar por CPF: </span> <input type="text" name="filtro" class="campo" required autofocus>
        <input type="submit" value="Pesquisar" class="btn1"><br><br>
    </form>

    <?php
    
    print "$registros registros econtrados.<br><br>";

    while($exibirRegistros = mysqli_fetch_array($consulta)){

        $codigo = $exibirRegistros[0];
        $nome = $exibirRegistros[1];
        $email = $exibirRegistros[2];
        $cpf = $exibirRegistros[3];

        print "<article>";

        print "$codigo<br>";
        print "$nome<br>";
        print "$cpf<br>";
        print "$email";

        print "</article>";
    }
    mysqli_close($conexao);
    ?>
<br><br>

    <ul class="menu">
        <a href="cadastro.php">
            <li>Cadastro</li>
        </a>
    </ul>

</body>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>