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
      <h1>Criar Reserva:</h1>
      <form action="cadastrarreserva.php" method="POST" class="form-container">
      <?php
            $operacao = $_POST["operacao"];

            if($operacao == "inserir"){
                $idservico = $_POST["idservico"]; 
                $agenda_tstamp = $_POST["agenda_tstamp"];
                $plano = !empty($plano) ? "'$plano'" : "NULL";
                $cachorro = !empty($cachorro) ? "'$cachorro'" : "NULL";
                $cliente = !empty($cliente) ? "'$cliente'" : "NULL";
                $agenda_status = !empty($agenda_status) ? "'$agenda_status'" : "NULL";

                $erro = 0;

                if(empty($idservico)){
                    echo "Por favor, preencha o ID corretamente.<br>";
                    $erro = 1;
                    
                }

                if(empty($agenda_tstamp)){
                    echo "Por favor, preencha a data corretamente.<br>";
                    $erro = 1;           
                }
                
                if($erro == 0){
                    $sql = "SELECT idservico FROM servico WHERE idservico = '$idservico'";
                    $result = mysqli_query($mysqli, $sql);
                    $num_rows = mysqli_num_rows($result);
                    if ($num_rows > 0) {
                      echo "ID já cadastrado<br>";
                    } 
                    else {

                      $sql = "INSERT INTO servico (idservico,agenda_tstamp, plano, cachorro, cliente, agenda_status)";
                      $sql .= "VALUES ('$idservico','$agenda_tstamp');";
                      $sql .= "VALUES (NULL,'$plano','$cachorro','$cliente','$agenda_status');";
                      mysqli_query($mysqli,$sql);
                      echo "Reserva criada com sucesso<br><br>";
                    }
                }
            }
          
            ?> <br>
            </p>
          <input type="hidden" name="operacao" value="inserir">
          <p>ID da reserva: <input type="text" placeholder="ID" name="idservico"></p>
          <p>Agenda: <input type="datetime-local" placeholder="Insira Email" name="agenda_tstamp"></p>
          <p><input type="submit" value="Criar Reserva" class="btn"></p>
      </form>
    </div>

   <!-- Site footer -->
   <footer class="site-footer">

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

<?php mysqli_close($mysqli); ?>