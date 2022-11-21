<?php

include "conectauser.inc";

session_start();
if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];
}

$operacao = $_POST["operacao"];

if($operacao == "editsenha"){
        $senhaantiga = $_POST["senhaantiga"];
        $senhanova = $_POST["senhanova"];
        $csenhanova = $_POST["csenhanova"];

            $erro = 0;

            if(empty($senhaantiga)){
                echo "Por favor, preencha a senha antiga.<br>";
                $erro = 1;
            }

            if(empty($senhanova)){
                echo "Por favor, preencha a nova senha.<br>";
               $erro = 1;
            }

            if(empty($csenhanova)){
                echo "Por favor, confirme a nova senha.<br>";
             $erro = 1;
            }

            if($erro == 0){
                $sql = "UPDATE cliente SET senha = '$senhanova' WHERE email = '$email';";
                mysqli_query($mysqli,$sql);

                // include "envia_email.php";
                //envia_email($email, "Confirmação de Cadastro", "A senha da sua conta foi alterada. Caso você não tenha alterado, nos informe imediatamente.");
                echo "Senha atualizada com sucesso!<br>";
                echo "<a href='form_extra.html'>Voltar para o início</a>"; 
            }
    }

?>