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
        $csenha = $_POST["csenha"];
        $cpf= $_POST["cpf"];

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
        
        if(empty($csenha)){
            echo "Por favor, confirme a senha.<br>";
            $erro = 1;
        }


        if(empty($cpf)){
            echo "Por favor, preencha o cpf<br>";
            $erro = 1;
        }

        if($erro == 0){
            $sql = "INSERT INTO func (nome,email,data_nasc,senha,cpf)";
            $sql .= "VALUES ('$nome','$email','$data_nasc', '$senha', '$cpf');";  
            mysqli_query($mysqli,$sql);

            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Data de nascimento: $data_nasc <br>";
            echo "Senha : $senha <br>";
            echo "CPF : $cpf <br>";
            echo "<a href='funcionario.html'>Voltar para o início</a>";
        }
    }

?>
    </body>
</html>
<?php mysqli_close($mysqli); ?>