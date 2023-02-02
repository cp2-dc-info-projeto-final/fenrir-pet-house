<?php include "conectauser.inc";
session_start();?>

<!DOCTYPE html>
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
          <li><a href="pacoteslog.html">Pacotes</a></li>
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

    <ul class="nav-list">
        <div class="fenrir-login">
            <form action="cadastrocachorro.php" method="POST" class="form-container">
            <input type="hidden" name="operacao" value="inserir">
            <h3>Cadastre seu au-au 🐶 para ter acesso as reservas! <br></h3>
            <p><a href = "agendamento.php" style="color:rgb(166, 180, 180);">Seu au-au já é cadastrado? Clique aqui!</a></p>
            <p><br> <?php
                $operacao = $_POST["operacao"];

                if($operacao == "inserir"){
                    $nome = $_POST["nome"]; 
                    $raca = $_POST["raca"];
                    $idade = $_POST["idade"];

                    $erro = 0;

                    if(empty($email)){
                        echo "Por favor, preencha o email corretamente.<br>";
                        $erro = 1;
                    }

                    if(empty($nome) or strstr($nome, ' ') == true){
                        echo "Por favor, preencha o nome completo.<br>";
                        $erro = 1;
                    }

                    if(empty($raca)){
                        echo "Por favor, preencha a raça corretamente.<br>";
                        $erro = 1;
                    }

                    if(empty($idade)){
                        echo "Por favor, preencha a idade.<br>";
                        $erro = 1;
                    }

                    else{
                        $sql = "INSERT INTO cachorro (nome, idade, raca, email_dono)";
                        $sql .= "VALUES ('$nome', '$idade', '$raca', '{$_SESSION["email"]}');";  
                        mysqli_query($mysqli,$sql);
                        header ("Location: agendamento.php");

                        echo "Nome: $nome <br>";
                        echo "Raça: $raca <br>";
                        echo "Idade: $idade <br>";
                        echo "<a href='indexlogcliente.php'>Voltar para o início</a>";
                        echo mysqli_error($mysqli);
                        mysqli_close($mysqli);
                    }
                }
                

            ?></p>
                  <form action="cadastrocachorro.php" method="POST" class="form-container">
                   <input type="hidden" name="operacao" value="inserir">
                   <p><br>Nome do cachorro: <input type="text" placeholder="Insira Nome" name="nome"></p>
                   <p>Raça: <input type="text" placeholder="Insira Raça" name="raca"></p>
                   <p>Idade: <input type="text" placeholder="insira Idade" name="idade"></p>
                   <p><input type="submit" value="Enviar" class="btn"></p>
            </form>
        </div>
    </ul>
    


   <!-- Site footer -->
   <footer class="site-footer" style="margin-top: 10%;">

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
