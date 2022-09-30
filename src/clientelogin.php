<?php
    // Recebe os campos do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Realiza a consulta no banco de dados
    include "conectauser.inc";
    $sql = "SELECT * FROM cliente WHERE email = '$email';";
    $res = mysqli_query($mysqli, $sql);

    //testa se não encontrou o e-mail
    if(mysqli_num_rows($res) != 1){
        echo "Senha e/ou Email inválido(s)!";
        echo "<p><a href='clientelogin.html'>Página de login</a></p>";
    }
    else{
        $cliente = mysqli_fetch_array($res);
        // testa se a senha está errada
        if($senha != $cliente["senha"]){
            echo "Senha e/ou Email inválido(s)!";
            echo "<p><a href='clientelogin.html'>Página de login</a></p>";
        }
        else{
            // abre a sessão e registra as variáveis do login
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;
            // direciona para a página inicial
            header("Location: index.html");
        }
    }
?>