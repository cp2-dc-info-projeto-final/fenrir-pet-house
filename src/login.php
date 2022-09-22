
<?php
    // Recebe os campos do formulário
    $email = $_POST["email"]
    $senha = $_POST["email"]

    // Realiza a consulta no banco de dados
    include "conecta_mysql.inc";
    $sql = "SELECT * FROM cliente WHERE email = '$email';";
    $res = mysqli_query($mysqli, $sql);

    //Testa se não encontrou o e-mail
    if(mysqli_num_rows($res) != 1){
        echo "E-email inválido!";
        echo "<p><a href='login,html'>Página de login</a><p/>"
    }
    else{
        $cliente = mysqli_fetch_array($res);
        if($senha != $cliente ["senha"]){
            echo "Senha inválida!";
            echo "<p><a href='login.html'>Página de login</a></p>";
        }
    }