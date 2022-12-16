<?php include "conectauser.inc";
 ?>
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
        $email = $_POST["email"];
        $nome = $_POST["nome"]; 
        $raca = $_POST["raca"];
        $idade = $_POST["idade"];

        $erro = 0;

        if(empty($email)){
            echo "Por favor, preencha o email corretamente.<br>";
            $erro = 1;
        }

        if(empty($nome) or strstr($nome, ' ') == true){
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

        else{
            $sql = "INSERT INTO cachorro (nome, idade, raca, email)";
            $sql .= "VALUES ('$nome', '$idade', '$raca', '$email');";  
            mysqli_query($mysqli,$sql);

            echo "Nome: $nome <br>";
            echo "Raça: $raca <br>";
            echo "Idade: $idade <br>";
            echo "<a href='indexlogcliente.php'>Voltar para o início</a>";
            echo mysqli_error($mysqli);
            mysqli_close($mysqli);
        }
    }
    

?>
    </body>
</html>
