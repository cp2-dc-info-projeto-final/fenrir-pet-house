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
                header ("Location: clientelogin.html"); 
            }
            elseif($tipousuario == "funcionario"){
                header ("Location: clientelogin.html");
            }
            elseif($tipousuario == "admin" ){
                header ("Location: clientelogin.html");
            }
        }
