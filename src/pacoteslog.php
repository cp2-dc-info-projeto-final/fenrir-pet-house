<!DOCTYPE html>
<?php include "conectauser.inc" ?>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospedagem</title>
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
          <li><a href="duvidas.html">Dúvidas</a></li>
          <li><a href="account.html">Conta</a></li>
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
        </footer>    
      </nav>
    </header>

    <body background="capa dogs.png" class="background">
    </body>

    
    <ul class="nav-list">
        <div class="fenrir-hospedagens">
            <form action="cadastrocachorro.php" method="POST" class="form-container">
                <input type="hidden" name="operacao" value="inserir">

                <!-- Pacote 1 -->

                <!-- Nome -->

                <h1>
                <?php
                $idpacote = 1;
                $sql = "SELECT nome FROM pacotes WHERE idpacote = '$idpacote';"; 
                $res = mysqli_query($mysqli,$sql);

                if (!$res) {
                  printf("Error: %s\n", mysqli_error($mysqli));
                  exit();
                }

                $row = mysqli_fetch_assoc($res);
                echo "🎁 ".$row['nome'];
                ?>

                </h1>

                <!-- Valor -->

                <p style="text-align:left;"><br><?php
                $idpacote = 1;
                $sql = "SELECT valor FROM pacotes WHERE idpacote = '$idpacote';"; 
                $res = mysqli_query($mysqli,$sql);

                if (!$res) {
                  printf("Error: %s\n", mysqli_error($mysqli));
                  exit();
                }

                $row = mysqli_fetch_assoc($res);
                echo "🎁 ".$row['valor'];
                
                ?><br>
       
                <!-- Tempo -->

                <?php
                $idpacote = 1;
                $sql = "SELECT tempo FROM pacotes WHERE idpacote = '$idpacote';"; 
                $res = mysqli_query($mysqli,$sql);

                if (!$res) {
                  printf("Error: %s\n", mysqli_error($mysqli));
                  exit();
                }

                $row = mysqli_fetch_assoc($res);
                echo $row['tempo'];
                
                ?><br>

                <!-- Areas -->
                <?php
                $idpacote = 1;
                $sql = "SELECT areas FROM pacotes WHERE idpacote = '$idpacote';"; 
                $res = mysqli_query($mysqli,$sql);

                if (!$res) {
                  printf("Error: %s\n", mysqli_error($mysqli));
                  exit();
                }

                $row = mysqli_fetch_assoc($res);
                echo $row['areas'];
                
                ?><br>

                <!-- Banho -->

                -1 banho por semana.<br>

                <!-- Tosa -->

                a<br>

                <!-- Festa -->

                a<br>
                </p>
            </form>
        </div>

        <div class="fenrir-hospedagens">
            <form action="cadastrocachorro.php" method="POST" class="form-container">
                <input type="hidden" name="operacao" value="inserir">
                <h1> 🎁 Pacote Tchutchuco</h1>
                <p style="text-align:left;"><br>🎁 Pacote tchutchuco (R$130)<br>
                    - Dois dias e duas noites.<br>
                    -Acesso as áreas da praia, parquinho e a Arena de Sabão.<br>
                    -1 banho por semana.<br>
                    -1 tosa a cada dois meses
                </p>
            </form>
        </div>

        <div class="fenrir-hospedagens">
            <form action="cadastrocachorro.php" method="POST" class="form-container">
                <input type="hidden" name="operacao" value="inserir">
                <h1> 🎁 Pacote Tchutchucão</h1>
                <p style="text-align:left;"><br>🎁 Pacote tchutchucão(R$190)<br>
                    -Três dias e três noites.<br>
                    -Acesso a todas as áreas da hospedagem.<br>
                    -1 banho por semana.<br>
                    -1 tosa todo mês.<br>
                    -Festinha no AUniversário do dog.
                </p>
            </form>
        </div>
    </ul>
    


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