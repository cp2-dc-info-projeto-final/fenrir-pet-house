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
        <a href="indexlogfuncionario.php"><img style="margin-left:25px; margin-top:10px; margin-bottom:10px; " src="logo.png" alt="Image" height="100"></a>
        <a class="logo" href="indexlogfuncionario.php">Fenrir Pet House</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
        <li><a href="funcreserva.php">Reservas</a></li>
          <li><a href="funcaccount.html">Conta</a></li>
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
        </nav>
      </header>
        <div class="fenrir-login">
            <h1>Dados:</h1>
            <form action="exibirfunc.php" method="POST" class="form-container">
            <?php
                include "conectauser.inc";

                session_start();
                $_SESSION["email"];

                $sql = "SELECT * FROM func WHERE email = '{$_SESSION["email"]}';"; 
                $res = mysqli_query($mysqli,$sql);
                $linhas = mysqli_num_rows($res);
                for($i = 0; $i < $linhas; $i++){
                    $func = mysqli_fetch_array($res);
                    echo "<strong>Nome: </strong>".$func["nome"]."<br>";
                    echo "<strong>E-mail: </strong> ".$func["email"]."<br>";
                    echo "<strong>Data de nascimento: </strong>".$func["data_nasc"]."<br>";
                    echo "<strong>CPF: </strong>".$func["cpf"]."<br>";       
                }
            ?>

            </form>
        </div>

        </footer>    
      </nav>
    </header>

    <body background="capa dogs.png" class="background">
    </body>
    


   <!-- Site footer -->
   <footer class="site-footer" style="margin-top: 35%;">

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
