<?php include "conectauser.inc"; ?>

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
        <a href="index.php"><img style="margin-left:25px; margin-top:10px; margin-bottom:10px; " src="logo.png" alt="Image" height="100"></a>
        <a class="logo" href="index.php">Fenrir Pet House</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="sobre.html">Sobre nós</a></li>
          <li><a href="pacotes.php">Pacotes</a></li>
          <li><a href="duvidas.html">Dúvidas</a></li>
          <li><a href="loginfenrir.html">Login</a></li>
          
        </ul>    
      </nav>
    </header>

    <body background="capa dogs.png" class="background">
    </body>

    <div class="fenrir-login">
        <h1>Cadastre-se</h1>
        <p><a href = "clientelogin.html" style="color:rgb(166, 180, 180);">Já possui uma conta?</a></p>
        <form action="cliente.php" method="POST" class="form-container">
          <input type="hidden" name="operacao" value="inserir">
          <p style="color:color:rgb(65, 65, 65);">
            <?php
            $operacao = $_POST["operacao"];

            if($operacao == "inserir"){
                $nome = $_POST["nome"]; 
                $email = $_POST["email"];
                $data_nasc = $_POST["data_nasc"];
                $senha = $_POST["senha"];
                $csenha = $_POST["csenha"];

                $erro = 0;

                

                if(empty($nome) or strstr($nome, ' ') == false){
                    echo "Por favor, preencha o nome completo.<br>";
                    $erro = 1;
                    
                }

                if(strlen($email) < 10 or strstr($email, '@') == false){
                    echo "Por favor, preencha o e-mail corretamente.<br>";
                    $erro = 1;            
                }

                if(empty($data_nasc)){
                    echo "Por favor, preencha a data.<br>";
                    $erro = 1;           
                }
                
                if(empty($senha)){
                    echo "Por favor, preencha a senha.<br>";
                    $erro = 1;
                
                }

                if(empty($csenha)){
                    echo "Por favor, confirme a senha<br>";
                    $erro = 1;            
                    
                }
                if(($senha == $csenha) == false){
                    echo "Confirme a senha correta.<br>";
                    $erro = 1;
                }
                
                if($erro == 0){
                    $sql = "SELECT email FROM cliente WHERE email = '$email'";
                    $result = mysqli_query($mysqli, $sql);
                    $num_rows = mysqli_num_rows($result);
                    if ($num_rows > 0) {
                      echo "E-mail já cadastrado<br>";
                    } else {
                      $sql = "SELECT email FROM func WHERE email = '$email'";
                      $result = mysqli_query($mysqli, $sql);
                      $num_rows = mysqli_num_rows($result);
                      if ($num_rows > 0) {
                      echo "E-mail já cadastrado";
                    } else {
                      include "envia_email.php";
                      $hash = password_hash($senha, PASSWORD_DEFAULT);
                      $sql = "INSERT INTO cliente (nome,email,data_nasc, senha)";
                      $sql .= "VALUES ('$nome','$email','$data_nasc', '$hash');"; 

                      mysqli_query($mysqli,$sql);
                      envia_email($email, "Confirmação de Cadastro", "Parabéns $nome, sua conta foi criada na hospedaria canina Fenrir Pet House usando esse email. Esperamos que você e seu au-migo desfrutem de nossos serviços! Caso você não tenha feito essa conta, contate-nos imediatamente.");
                      header ("Location: loginfenrir.html");
                    }
                }
            }
          }
            ?> <br>
            </p>
          <p>Nome: <input type="text" placeholder="Insira nome" name="nome"></p>
          <p>E-mail: <input type="text" placeholder="Insira Email" name="email"></p>
          <p>Senha: <input type="password" placeholder="insira Senha" name="senha"></p>
          <p>Confirme a senha: <input type="password" placeholder="confirme Senha" name="csenha"></p>
          <p>Data de Nascimento: <input type="date" name="data_nasc"></p>
          <p><input type="submit" value="Cadastrar" class="btn"></p>    
        </form>

    </div>

    <footer class="site-footer" style="margin-top: 15%;">

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