<?php include "auth_admin.php"?>
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
        </nav>
      </header>
        <div class="fenrir-login">
            <h1>Clientes Cadastrados:</h1>
            <form action="admexibecliente.php" method="POST" class="form-container">
            <?php
                $operacao = $_POST["operacao"];
                include "conectauser.inc";
                
                if($operacao == "exibir"){
                    $sql = "SELECT * FROM cliente;";
                    $res = mysqli_query($mysqli,$sql);
                    $linhas = mysqli_num_rows($res);
                    for($i=0; $i < $linhas; $i++){
                        $cliente = mysqli_fetch_array($res);
                        echo "<strong>Nome:</strong> ".$cliente["nome"]."<br>";
                        echo "<strong>Email:</strong> ".$cliente["email"]."<br>";
                        echo "<a href='admcliente.php?cod_cliente=".$cliente["cod_cliente"]."'>Editar usuário</a><br>";
                        echo "<a href='deletauser.php?cod_cliente=".$cliente["cod_cliente"]."'>Excluir usuário</a><br>";
                        echo "--------------------------------<br>";
                    }
                }
            ?>
            </form>
            <p><strong>Buscar um Cliente:</strong></p>
        <form action="admexibecliente.php" method="POST" class="form-container">
            <input type="hidden" name="operacao" value="buscar" class="btn">
            <p>Nome: <input type="text" placeholder="Insira Nome" name="nome"></p>
            <p><input type="submit" value="Buscar" class="btn"></p>
            <?php
                if($operacao == "buscar"){
                $nome = $_POST["nome"];
                $sql = "SELECT * FROM cliente WHERE nome like '%$nome%';";
                $res = mysqli_query($mysqli,$sql);
                $linhas = mysqli_num_rows($res);
                for($i=0; $i < $linhas; $i++){
                    $cliente = mysqli_fetch_array($res);
                    echo "<strong>Nome:</strong> ".$cliente["nome"]."<br>";
                    echo "<strong>Email:</strong> ".$cliente["email"]."<br>";
                    echo "<a href='admcliente.php?cod_cliente=".$cliente["cod_cliente"]."'>Editar usuário</a><br>";
                    echo "----------------------------<br>";
                }
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
   <footer class="site-footer" style="margin-top: 22%;">

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
