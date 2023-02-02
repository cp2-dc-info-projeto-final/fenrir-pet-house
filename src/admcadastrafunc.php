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
        <h1>Cadastrar Funcionário/Administrador:</h1>
        <form action="admcadastrafunc.php" method="POST" class="form-container">
        <?php
         $operacao = $_POST["operacao"];
         include "conectauser.inc";

            if($operacao == "inserir"){
                $nome = $_POST["nome"]; 
                $email = $_POST["email"];
                $data_nasc = $_POST["data_nasc"];
                $senha = $_POST["senha"];
                $csenha = $_POST["csenha"];
                $cpf= $_POST["cpf"];
                $admcode= $_POST["admcode"];

                $erro = 0;

                if(empty($nome) or strstr($nome, ' ') == false){
                    echo "Preencha o nome completo.<br>";
                    $erro = 1;
                }


                if(strlen($email) < 10 or strstr($email, '@') == false){
                    echo "Preencha o e-mail corretamente.<br>";
                    $erro = 1;
                }

                
                if(empty($data_nasc)){
                    echo "Preencha a data.<br>";
                    $erro = 1;
                }
                
                if(empty($senha)){
                    echo "Preencha a senha.<br>";
                    $erro = 1;
                }
                
                if(empty($csenha)){
                    echo "Confirme a senha.<br>";
                    $erro = 1;
                }

                if(($senha == $csenha) == false){
                    echo "Confirme a senha correta.<br>";
                    $erro = 1;
                }

                if(empty($cpf)){
                    echo "Preencha o cpf.<br>";
                    $erro = 1;
                }

                if($erro == 0){
                  $sql = "SELECT email FROM cliente WHERE email = '$email'";
                    $result = mysqli_query($mysqli, $sql);
                    $num_rows = mysqli_num_rows($result);
                    if ($num_rows > 0) {
                      echo "E-mail já cadastrado";
                    } else {
            
                      $sql = "SELECT email FROM func WHERE email = '$email'";
                      $result = mysqli_query($mysqli, $sql);
                      $num_rows = mysqli_num_rows($result);
                      if ($num_rows > 0) {
                      echo "E-mail já cadastrado";
                    } else {
                  if($admcode == "03132115"){
                    include_once "envia_email.php";
                    $hash = password_hash($senha, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO func (nome,email,data_nasc,senha,cpf,isAdmin)";
                    $sql .= "VALUES ('$nome','$email','$data_nasc', '$hash', '$cpf', '1');";  
                    
                    if(!mysqli_query($mysqli,$sql)){
                        echo mysqli_error($mysqli);
                    }
                    envia_email($email, "Confirmação de Cadastro", "$nome, sua conta foi criada na hospedaria canina Fenrir Pet House como administrador. Esperamos que você dê seu melhor e desfrute do seu novo trabalho! Caso você não tenha feito essa conta, ignore essa mensagem.");
                    echo "Funcionário/Administrador cadastrado com sucesso!";
                  }
                  else{
                    include_once "envia_email.php";
                    $hash = password_hash($senha, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO func (nome,email,data_nasc,senha,cpf)";
                    $sql .= "VALUES ('$nome','$email','$data_nasc', '$hash', '$cpf');";  
                    
                    if(!mysqli_query($mysqli,$sql)){
                        echo mysqli_error($mysqli);
                    }
                    envia_email($email, "Confirmação de Cadastro", "$nome, sua conta foi criada na hospedaria canina Fenrir Pet House. Esperamos que você dê seu melhor e desfrute do seu novo trabalho! Caso você não tenha feito essa conta, ignore essa mensagem.");
                    echo "Funcionário/Administrador cadastrado com sucesso!<br>";
                  }
                }


            }
        }
      }
        ?>
            <input type="hidden" name="operacao" value="inserir">
            <p>Nome: <input type="text" placeholder="Insira Nome" name="nome"></p>
            <p>E-mail: <input type="text" placeholder="insira E-mail" name="email"></p>
            <p>Senha: <input type="password" placeholder="Insira Senha" name="senha"></p>
            <p>Confirme a senha: <input type="password" placeholder="Confirme a senha" name="csenha"></p>
            <p>CPF: <input type="text" placeholder="Insira CPF" name="cpf"></p>
            <p>Data de Nascimento: <input type="date" name="data_nasc"></p><br>
            <p>Cadastro de Admin? Digite aqui o código de cadastro:</p> <input type="text" placeholder="Insira Código de Admin" name="admcode"></p>
            <p><input type="submit" value="Enviar!" class="btn"></p><br>

        </form>
    </div>

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