<?php

include "conectauser.inc";

session_start();
if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];
}

$operacao = $_POST["operacao"];

    if($operacao == "editemail"){

		//pega info de editfuncemail.html
        $emailantigo = $_POST['emailantigo'];
		$emailnovo = $_POST['emailnovo'];
		$senha = $_POST['senha'];
  
		//pega info "senha" do sql
        $sql = "SELECT senha FROM func WHERE email = '$emailantigo' ";
        $query = $mysqli->query($sql);
		$row = $query->fetch_assoc();

		//checa senha
        if(password_verify($senha, $row['senha'])){

				//update na senha no sql
				$sql = "UPDATE func SET email = '$emailnovo' WHERE email = '$email' ";
				if(mysqli_query($mysqli, $sql)){
                    include "envia_email.php";
                    envia_email($emailantigo, "Alteração de Email", "Seu email foi alterada no site da hotelaria canina Fenrir Pet Shop. O novo email para login da conta antes vinculada nesse email é:<br><br><strong>$emailnovo</strong><br><br> Esperamos que você continue seu ótimo trabalho.");
                    envia_email($emailnovo, "Alteração de Email", "Seu email foi alterada no site da hotelaria canina Fenrir Pet Shop. Esperamos que você continue o seu ótimo trabalho.");
                    header('location: indexlogfuncionario.php');
                }
            //erros
            else{
                echo "Erro no sql";
            }
        }
    }
    else{
        echo "Senha incorreta";
    }

mysqli_close();
?>