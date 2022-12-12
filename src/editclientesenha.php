<?php

include "conectauser.inc";

$operacao = $_POST["operacao"];

    if($operacao == "editsenha"){

		//pega info de editclientesenha.html
        $email = $_POST['email'];
		$senhaantiga = $_POST['senhaantiga'];
		$senhanova = $_POST['senhanova'];
		$csenhanova = $_POST['csenhanova'];
  
		//pega info "senha" do sql
        $sql = "SELECT senha FROM cliente WHERE email = '$email' ";
        $query = $mysqli->query($sql);
		$row = $query->fetch_assoc();

		//checa senha antiga
		if(password_verify($senhaantiga, $row['senha'])){
			//checa senha nova e confirmação de senha nova
			if($senhanova == $csenhanova){
				//#cripto nessa senha
				$hash = password_hash($senhanova, PASSWORD_DEFAULT);
 
				//update na senha no sql
				$sql = "UPDATE cliente SET senha = '$hash' WHERE email = '$email' ";
				if(mysqli_query($mysqli, $sql)){
                    include "envia_email.php";
                    envia_email($email, "Alteração de Senha", "Sua senha foi alterada no site da hotelaria canina Fenrir Pet Shop. Sua nova senha é:<br><br><strong>$senhanova</strong><br><br>Esperamos que você tenha uma ótima experiência em nosso site.");
                    header('location: indexlogcliente.php');
                }
            //erros
				else{
					echo "Erro no sql";
				}
			}
			else{
				echo "As senhas não são iguais";
			}
		}
		else{
			echo "Senha antiga incorreta";
		}
	}
    if (empty($email)){
        echo "Preencha o email corretamente";
    }
 
?>