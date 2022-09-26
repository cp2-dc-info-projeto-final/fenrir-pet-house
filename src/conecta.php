<html>
    <head>
        <title>Dados Cadastrados</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Dados Cadastrados</h1>
    <?php
        $operacao = $_POST["operacao"];
        $tipousuario = $_POST["tipousuario"];
        if($operacao == "login"){
            

            if($tipousuario == "cliente"){
                echo "<a href='cliente.html'>Clique Aqui! cliente </a>"; 
            }
            elseif($tipousuario == "funcionario"){
                echo "<a href='funcionario.html'>Clique Aqui! funcionario </a>";
            }
            elseif($tipousuario == "admin" ){
                echo "<a href='admin.html'>Clique Aqui! adm </a>";
            }
        }
