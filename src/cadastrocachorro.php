<?php include "conectauser.inc";
include "autentica.php"; ?>
<html>
    <head>
        <title>Dados Cadastrados</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Dados Cadastrados</h1>
<?php
    $operacao = $_POST["operacao"];

    if($operacao == "inserir"){
        $nome = $_POST["nome"]; 
        $raca = $_POST["raca"];
        $idade = $_POST["idade"];

        $erro = 0;

        if(empty($nome) or strstr($nome, ' ') == false){
            echo "Por favor, preencha o nome completo.<br>";
            $erro = 1;
        }

        if(empty($raca)){
            echo "Por favor, preencha a raça corretamente.<br>";
            $erro = 1;
        }

        if(empty($idade)){
            echo "Por favor, preencha a idade.<br>";
            $erro = 1;
        }

        if($erro == 0){
            $sql = "INSERT INTO cachorro (nome, raça, idade)";
            $sql .= "VALUES ('$nome','$raca','$idade');";  
            mysqli_query($mysqli,$sql);

            echo "Nome: $nome <br>";
            echo "Raça: $raca <br>";
            echo "Idade: $idade <br>";
            echo "<a href='indexlogcliente.html'>Voltar para o início</a>";
        }
    }
    else if($operacao == "exibir"){
        $sql = "SELECT * FROM cliente;"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i = 0; $i < $linhas; $i++){
            $cliente = mysqli_fetch_array($res);
            echo "Nome: ".$cliente["nome"]."<br>";
            echo "E-mail: ".$cliente["email"]."<br>";
            echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";          
            echo "---------------------<br>";
        }
        echo "<a href='cliente.html'>Voltar para o início</a>";
    }

?>
    </body>
</html>
<?php mysqli_close($mysqli); ?>