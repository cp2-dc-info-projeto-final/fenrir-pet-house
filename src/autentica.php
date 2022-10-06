
<?php
    session_start();
    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }
    if(isset($_SESSION["senha"])){
        $senha = $_SESSION["senha"];
    }
    if(empty($email) or empty($senha)){
        echo "Login não concluído.";
        echo"<p><a href='loginfenrir.html'>Página de Login</a></p>";
        exit;
    }
    else{
        include "conectauser.inc";
        $sql = "SELECT * FROM cliente WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);

        //teste se não encontrou email no banco de dados
        if(mysqli_num_rows($res) != 1){
            unset($_SESSION["email"]);
            unset($_SESSION["senha"]);
            echo "Login não concluído.";
            echo"<p><a href='loginfenrir.html'>Página de Login</a></p>";
        exit;
        }
        else{
            $cliente = mysqli_fetch_array($res);
            //teste se a senha está errada
            if($senha != $cliente["senha"]){
                unset($_SESSION["email"]);
                unset($_SESSION["senha"]);
                echo "Login não concluído.";
                echo"<p><a href='loginfenrir.html'>Página de Login</a></p>";
                exit;
            }
        }
        mysqli_close($mysqli);
    }
?>