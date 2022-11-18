<?php include "conectauser.inc"; ?>

<html>
    <head>
        <title>Dados Cadastrados</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <meta charset="UTF-8">  
<?php
    $operacao = $_POST["operacao"];

    if($operacao == "inserir"){
        $nome = $_POST["nome"]; 
        $email = $_POST["email"];
        $data_nasc = $_POST["data_nasc"];
        $senha = $_POST["senha"];
        $csenha = $_POST["csenha"];

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
        
        if(empty($csenha)){
            echo "Por favor, confirme a senha.<br>";
            $erro = 1;
           
        }

        if(empty($senha)){
            echo "Por favor, preencha a senha<br>";
            $erro = 1;            
            
        }
        
        if($erro == 0){
            include "envia_email.php";
            $sql = "INSERT INTO cliente (nome,email,data_nasc, senha)";
            $sql .= "VALUES ('$nome','$email','$data_nasc', '$senha');";  
            mysqli_query($mysqli,$sql);
            envia_email($email, "Confirmação de Cadastro", "Parabéns $nome, sua conta foi criada na hospedaria canina Fenrir Pet House usando esse email. Esperamos que você e seu au-migo desfrutem de nossos serviços! Caso você não tenha feito essa conta, contate-nos imediatamente.");
            
            echo "/- Dados Cadastrados -/ <br>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
            echo "Data de nascimento: $data_nasc <br>";
            echo "E-mail de confirmação de cadastro enviado! Verifique sua caixa de entrada, ou caso não tenha recebido email, verifique a caixa de spam.<br>";
            echo "<a href='loginfenrir.html'>Voltar para o login.</a>";

            
            
        }
    }

    if($operacao == "exibir"){
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