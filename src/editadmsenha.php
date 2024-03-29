<?php include "auth_admin.php"?>
<?php include "conectauser.inc"; ?>

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
        <a href="adminpage.php"><img style="margin-left:25px; margin-top:10px; margin-bottom:10px; " src="logo.png" alt="Image" height="100"></a>
        <a class="logo" href="adminpage.php">Fenrir Pet House</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
         
          <li><a href="admclient.php">Clientes</a></li>
          <li><a href="admfun.php">Funcionários</a></li>
          <li><a href="admpacotes.php">Pacotes</a></li>
          <li><a href="admservico.php">Reservas</a></li>
          <li><a href="admconta.php">Conta</a></li>
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
        </footer>    
      </nav>
    </header>

    <body background="capa dogs.png" class="background">
    </body>

    <div class="fenrir-login">
        <h1>Editar a senha</h1>
        <form action="editadmsenha.php" method="POST" class="form-container">
          <input type="hidden" name="operacao" value="editsenha">
		  <p style="color:color:rgb(65, 65, 65);">
		  
		  <?php
      $operacao = $_POST["operacao"];

			if($operacao == "editsenha"){

					//pega info de editclientesenha.html
					$senhaantiga = $_POST['senhaantiga'];
					$senhanova = $_POST['senhanova'];
					$csenhanova = $_POST['csenhanova'];
			
					//pega info "senha" do sql
					$sql = "SELECT senha FROM func WHERE email = '{$_SESSION["email"]}' ";
					$query = $mysqli->query($sql);
					$row = $query->fetch_assoc();

					//checa senha antiga
					if(password_verify($senhaantiga, $row['senha'])){
						//checa senha nova e confirmação de senha nova
						if($senhanova == $csenhanova){
							//#cripto nessa senha
							$hash = password_hash($senhanova, PASSWORD_DEFAULT);
			
							//update na senha no sql
							$sql = "UPDATE func SET senha = '$hash' WHERE email = '{$_SESSION["email"]}' ";
							if(mysqli_query($mysqli, $sql)){
								include "envia_email.php";
								envia_email($_SESSION["email"], "Alteração de Senha", "Sua senha foi alterada no site da hotelaria canina Fenrir Pet Shop. Sua nova senha é:<br><br><strong>$senhanova</strong><br><br>Esperamos que você tenha uma ótima experiência em nosso site.");
								echo "Senha alterada com sucesso!";
							}

              else{
								echo "Erro no sql";
							}
						}
						//erros

            $erro = 0;

            if(($senhanova == $csenhanova) == false){
							echo "Confirme a senha correta.<br>";
							$erro = 1;
						}
					}
					else{
						echo "Senha antiga incorreta<br>";
					}
				}
				if (empty($_SESSION["email"])){
					echo "Preencha o email corretamente <br>";
				}

			?>
			</p>
			<br>
          <p>Antiga senha:: <input type="password" placeholder="Insira a antiga senha" name="senhaantiga"></p>
          <p>Nova Senha: <input type="password" placeholder="insira Senha" name="senhanova"></p>
          <p>Confirme a senha: <input type="password" placeholder="confirme Senha" name="csenhanova"></p>
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
