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
        <h1>Criar Pacote</h1>
        <?php include "conectauser.inc";

        echo "<br><form action='cria_pacote2.php' method='post' class='form-container>'";
        echo "<p>Nome: <input type='text' placeholder='Insira o nome do pacote.' name='nome' required></p><br>";
        echo "<p>Valor: <input type='text' placeholder='Insira o valor do pacote.' name='valor' required></p><br>";
        echo "<p>Tempo: <input type='text' placeholder='Insira o tempo do pacote.' name='tempo' required></p><br>"; 
        echo "<p>Áreas: <input type='text' placeholder='Insira as áreas do pacote.' name='areas'  required></p><br>";           
        echo "<p>Banho: <input type='text' placeholder='Insira o banho do pacote.' name='banho' required></p><br>";           
        echo "<p>Tosa: <input type='text' placeholder='Insira a tosa do pacote.' name='tosa' required></p><br>";           
        echo "<p>Festa: <input type='text' placeholder='Insira a festa do pacote.' name='festa' required></p><br>";              
        echo "<input type='submit' value='Enviar' class='btn'></input><br><br>";


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