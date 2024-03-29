<?php include "conectauser.inc";
 ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fenrir Pet House</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>

    <style background-attachment: fixed;></style>

      <header class="nav">
      <nav>
        <a href="indexlogcliente.php"><img style="margin-left:25px; margin-top:10px; margin-bottom:10px; " src="logo.png" alt="Image" height="100"></a>
        <a class="logo" href="indexlogcliente.php">Fenrir Pet House</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="sobrelog.html">Sobre nós</a></li>
          <li><a href="pacoteslog.php">Pacotes</a></li>
          <li><a href="reserva.html">Reserva</a></li>
          <li><a href="duvidaslog.html">Dúvidas</a></li>
          <li><a href="account.html">Conta</a></li>
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
        </footer>    
      </nav>
    </header>

    <body background="capa dogs.png" class="background">
    </body>

    <div class="fenrir-login">
        <h1>Editar o email</h1>
        <p>OBS: Após confirmar você será redirecionado a página de login já com o email alterado!</P>
        <form action="editclienteemail.php" method="POST" class="form-container">
          <input type="hidden" name="operacao" value="editemail">
		  	<?php
			session_start();
			if(isset($_SESSION["email"])){
				$email = $_SESSION["email"];
			}

			$operacao = $_POST["operacao"];

			if($operacao == "editemail"){

				//pega info de editclienteemail.html
				$emailnovo = $_POST['emailnovo'];
				$senha = $_POST['senha'];
		
				//pega info "senha" do sql
				$sql = "SELECT senha FROM cliente WHERE email = '{$_SESSION["email"]}' ";
				$query = $mysqli->query($sql);
				$row = $query->fetch_assoc();

        
        $sql = "SELECT email FROM cliente WHERE email = '$emailnovo'";
        $result = mysqli_query($mysqli, $sql);
        $num_rows = mysqli_num_rows($result);
        if (($num_rows == 0)== FALSE) {
          echo "E-mail já cadastrado<br>";
        } else {
          $sql = "SELECT email FROM func WHERE email = '$emailnovo'";
          $result = mysqli_query($mysqli, $sql);
          $num_rows = mysqli_num_rows($result);
          if (($num_rows == 0)== FALSE) {
          echo "E-mail já cadastrado";
        } else {

				//checa senha
				if(password_verify($senha, $row['senha'])){

          


					//update no email no sql
						$sql = "UPDATE cliente SET email = '$emailnovo' WHERE email = '{$_SESSION["email"]}' ";
						if(mysqli_query($mysqli, $sql)){
							include "envia_email.php";
							envia_email($_SESSION["email"], "Alteração de Email", "Seu email foi alterada no site da hotelaria canina Fenrir Pet Shop. O novo email para login da conta antes vinculada nesse email é:<br><br><strong>$emailnovo</strong><br><br> Esperamos que você continue tendo uma ótima experiência em nosso site.");
							envia_email($emailnovo, "Alteração de Email", "Seu email foi alterada no site da hotelaria canina Fenrir Pet Shop. Esperamos que você tenha uma ótima experiência em nosso site.");
							header("Location: loginfenrir.html");
						}
					//erros
					else{
						echo "Erro no sql";
					}
				}
				else{
					echo "Senha incorreta!<br><br>";
				}
			}
      }
    }
  

		?>
          <p>Novo email: <input type="text" placeholder="Insira seu novo email" name="emailnovo"></p>
          <p>Digite sua senha: <input type="password" placeholder="insira Senha" name="senha"></p>
          <p><input type="submit" value="Enviar" class="btn"></p>    
        </form>

    </div>


   <!-- Site footer -->
   <footer class="site-footer" style="margin-top: 25%;">

        <div class="col-xs-6 col-md-3">
          <h6>Contatos:</h6>
          <ul class="footer-links">
            <li><a href="https://web.whatsapp.com/">WhatsApp</a></li>
            <li><a href="https://www.facebook.com/">Facebook</a></li>
            <li><a href="https://twitter.com/">Twitter</a></li>
            <li><a href="https://www.instagram.com/">Instagram</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          

        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">
       <a href="https://www.google.com/maps/dir//Rua+Newton+Fontoura+Reis+-+Recreio+dos+Bandeirantes+-+R.+Newton+Fontoura+Reis+-+Recreio+dos+Bandeirantes,+Rio+de+Janeiro+-+RJ,+22795-125/@-22.9209579,-43.4968904,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x9bc3aed259b4ad:0x6383c2f561261060!2m2!1d-43.4660456!2d-23.026394">Endereço: Rua Newton Fontoura Reis - Recreio dos Bandeirantes, Rio de Janeiro - RJ, 22795-125</a>.
          </p>
    </div>
</footer>

  </body>
</html>