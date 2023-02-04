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
        <h1>Pacotes</h1>
        <?php include "conectauser.inc";
        $sql = "SELECT * FROM pacotes ;"; 
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);

        echo "<a href='cria_pacote.php'>;
            <strong>Criar novo pacote</strong></a><br><br>";

        for($i = 0; $i < $linhas; $i++){
            $pacotes = mysqli_fetch_array($res);
            $idpacote = $pacotes["idpacote"];
            echo "<strong>ID do Pacote: </strong>".$pacotes["idpacote"]."<br>"; 
            echo "<strong>Valor: </strong>".$pacotes["valor"]."<br>";
            echo "<strong>Tempo: </strong>".$pacotes["tempo"]."<br>";     
            echo "<strong>Áreas: </strong>".$pacotes["areas"]."<br>";
            echo "<strong>Banhos: </strong>".$pacotes["banho"]."<br>";     
            if (!empty($pacotes["tosa"]))  {
              echo "<strong>Tosa: </strong>".$pacotes["tosa"]."<br>";     
            }
            if (!empty($pacotes["festa"]))  {
              echo "<strong>Festa: </strong>".$pacotes["festa"]."<br>";     
            }                    
            echo "<a href='altera_pacote.php?idpacote=".$pacotes["idpacote"]."'>
            <strong>Alterar pacote</strong></a><br>";
            echo "---------------------<br>";


     }

        mysqli_close($mysqli);
        
        
        
        
        
        
        
  ?>
        
        
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