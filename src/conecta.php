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
                header ("Location: C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\tccfenrir\fenrir-pet-house\src\funcionario\funcionariologin.html");
            }
        }
          