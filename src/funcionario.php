<?php include "conectauser.inc"; ?>

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
            include "envia_email.php";
            $hash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO func (nome,email,data_nasc,senha,cpf)";
            $sql .= "VALUES ('$nome','$email','$data_nasc', '$hash', '$cpf');";  
            
            if(!mysqli_query($mysqli,$sql)){
                echo mysqli_error($mysqli);
            }
            envia_email($email, "Confirmação de Cadastro", "$nome, sua conta foi criada na hospedaria canina Fenrir Pet House. Esperamos que você dê seu melhor e desfrute do seu novo trabalho! Caso você não tenha feito essa conta, ignore essa mensagem.");
            header ("Location: index.php");
        }
    }

?>
<?php mysqli_close($mysqli); ?>