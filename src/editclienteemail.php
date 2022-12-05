<?php

include "conectauser.inc";

session_start();
if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];
}

$operacao = $_POST["operacao"];

    if($operacao == "editemail"){

		//pega info de editclientesenha.html
        $emailantigo = $_POST['emailantigo'];
		$emailnovo = $_POST['emailnovo'];
		$senha = $_POST['senha'];
  
		//pega info "senha" do sql
        $sql = "SELECT senha FROM cliente WHERE email = '$emailantigo' ";
        $query = $mysqli->query($sql);
		$row = $query->fetch_assoc();

		//checa senha
		if(password_verify($senha, $row['senha'])){

		    //update no email no sql
				$sql = "UPDATE cliente SET email = '$emailnovo' WHERE email = '$emailantigo' ";
				if(mysqli_query($mysqli, $sql)){
                    include "envia_email.php";
                    envia_email($emailantigo, "Alteração de Email", "Seu email foi alterada no site da hotelaria canina Fenrir Pet Shop. O novo email para login da conta antes vinculada nesse email é:<br><br><strong>$emailnovo</strong><br><br> Esperamos que você continue tendo uma ótima experiência em nosso site.");
                    envia_email($emailnovo, "Alteração de Email", "Seu email foi alterada no site da hotelaria canina Fenrir Pet Shop. Esperamos que você tenha uma ótima experiência em nosso site.");
                    header('location: indexlogcliente.php');
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
        

    