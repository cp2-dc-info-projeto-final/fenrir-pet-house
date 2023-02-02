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
        header("Location: funcionariologininc.html");
        echo "Senha e/ou Email inválido(s)!";
        echo "<p><a href='funcionariologin.html'>Página de login</a></p>";
    }
    else{
        $func    = mysqli_fetch_array($res);;
        $query = "SELECT senha FROM func WHERE email = '$email' ";    
        if(mysqli_query($mysqli, $query)){
                if(password_verify($senha, $func["senha"])){
                    // abre a sessão e registra as variáveis do login
                    session_start();
                    $_SESSION["email"] = "$email";
                    $sql = "SELECT * FROM func WHERE email = '{$_SESSION["email"]}';"; 
                    $res = mysqli_query($mysqli,$sql);
                    $linhas = mysqli_num_rows($res);
                    $func = mysqli_fetch_array($res);
                    // abre a sessão e registra as variáveis do login


                    $_SESSION["IsAdmin"] = $func["IsAdmin"];
                                // direciona para a página inicial
                                if($func["IsAdmin"] == 1){
                                header("Location: adminpage.php");
                                }

                                if($func["IsAdmin"] == 0){
                                header("Location: indexlogfuncionario.php");
                                }
                }
            else{
                header("Location: funcionariologininc.html");
            }
        }
}
mysqli_close($mysqli);
?>