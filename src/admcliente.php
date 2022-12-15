<?php
    $operacao = $_POST["operacao"];
    include "conectauser.inc";

    if($operacao == "inserir"){
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $csenha = ["csenha"];
        $data_nasc = ["data_nasc"];
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
            $hash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO cliente (nome,senha,email,data_nasc)";
            $sql .= "VALUES ('$nome','$hash','$email','$data_nasc');"; 

            mysqli_query($mysqli,$sql);
            envia_email($email, "Confirmação de Cadastro", "Parabéns $nome, sua conta foi criada na hospedaria canina Fenrir Pet House usando esse email. Esperamos que você e seu au-migo desfrutem de nossos serviços! Caso você não tenha feito essa conta, contate-nos imediatamente.");
        }
        
    }
    elseif($operacao == "exibir"){
        $sql = "SELECT * FROM clientes;";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i=0; $i < $linhas; $i++){
            $cliente = mysqli_fetch_array($res);
            echo "Senha: ".$cliente["senha"]."<br>";
            echo "Nome: ".$cliente["nome"]."<br>";
            echo "Email: ".$cliente["email"]."<br>";
            echo "<a href='altera.php?cod_cliente=".$cliente["cod_cliente"]."'>Alterar usuário</a><br>";
            echo "----------------------------------<br>";
        }
    }
    elseif($operacao == "buscar"){
        $nome = $_POST["nome"];
        $sql = "SELECT * FROM cliente WHERE nome like '%$nome%';";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i=0; $i < $linhas; $i++){
            $cliente = mysqli_fetch_array($res);
            echo "Senha: ".$cliente["senha"]."<br>";
            echo "Nome: ".$cliente["nome"]."<br>";
            echo "Email: ".$cliente["email"]."<br>";
            echo "----------------------------------<br>";
        }
    }
    elseif($operacao == "atualizar"){
        $cod_cliente = $_POST["cod_cliente"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
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
        // VERIFICA SE NÃO HOUVE ERRO 
        if($erro == 0) {
            $sql = "UPDATE cliente SET nome = '$nome', senha = '$senha',";
            $sql .= "nome = '$nome', email = '$email' "; 
            $sql .= "WHERE cod_cliente = $cod_cliente;";
            mysqli_query($mysqli,$sql);  
            echo "<br>O usuário foi atualizado com sucesso!";
            echo "<br><a href='index.php'>Página Inicial</a>";
        }
    }
    mysqli_close($mysqli);
?>
