<?php include "conectauser.inc"; ?>
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
        $email = $_POST["email"];
        $data_nasc = $_POST["data_nasc"];
        $senha = $_POST["senha"];

        $erro = 0;

        if(empty($nome) or strstr($nome, ' ') == false){
            echo "Por favor, preencha o nome completo.<br>";
            $erro = 1;
        }

        if(strlen($email) < 10 or strstr($email, '@') == false){
            echo "Por favor, preencha o e-mail corretamente.<br>";
            $erro = 1;
        }

        if(empty($data_nasc)){
            echo "Por favor, preencha a data.<br>";
            $erro = 1;
        }
        
        if(empty($senha)){
            echo "Por favor, preencha a senha<br>";
            $erro = 1;
        }

        if($erro == 0){
            $sql = "INSERT INTO cliente (nome,email,data_nasc, senha)";
            $sql .= "VALUES ('$nome','$email','$data_nasc', '$senha');";  
            mysqli_query($mysqli,$sql);

            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Data de nascimento: $data_nasc <br>";
            echo "<a href='loginfenrir.html'>Voltar para o início</a>";
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