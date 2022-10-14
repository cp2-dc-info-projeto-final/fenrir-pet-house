<?php
    // Recebe os campos do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Realiza a consulta no banco de dados
    include "conectauser.inc";
    $sql = "SELECT * FROM func WHERE email = '$email';";
    $res = mysqli_query($mysqli, $sql);

    //testa se não encontrou o e-mail
    if(mysqli_num_rows($res) != 1){
        echo "Senha e/ou Email inválido(s)!";
        echo "<p><a href='funcionariologin.html'>Página de login</a></p>";
    }
    else{
        $func = mysqli_fetch_array($res);
        // testa se a senha está errada
        if($senha != $func["senha"]){
            echo "Senha e/ou Email inválido(s)!";
            echo "<p><a href='funcionariologin.html'>Página de login</a></p>";
        }
        else{
            // abre a sessão e registra as variáveis do login
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["IsAdmin"] = $isadmin;
            // direciona para a página inicial
            header("Location: indexlogfuncionario.php");
        }
    }
?>