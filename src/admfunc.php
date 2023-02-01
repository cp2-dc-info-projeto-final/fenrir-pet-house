<html lang="pt-br">
<?php include "auth_admin.php";?>
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
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
        </footer>    
      </nav>
    </header>

    <body background="capa dogs.png" class="background">
    </body>

    <div class="fenrir-login">

<?php
    $operacao = $_POST["operacao"];
    include "conectauser.inc";

    if($operacao == "inserir"){
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $csenha = $_POST["csenha"];
        $data_nasc = $_POST["data_nasc"];
        $erro = 0;

        var_dump($senha);
        var_dump($nome);
        var_dump($email);
        var_dump($csenha);
        var_dump($data_nasc);   
        

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
        
        if(empty($csenha)){
            echo "Por favor, confirme a senha.<br>";
            $erro = 1;
           
        }

        if(empty($senha)){
            echo "Por favor, preencha a senha<br>";
            $erro = 1;            
            
        }
        if($erro == 0){
            include "envia_email.php";
            $hash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO func (nome,senha,email,data_nasc)";
            $sql .= "VALUES ('$nome','$hash','$email','$data_nasc');"; 

            mysqli_query($mysqli,$sql);
            envia_email($email, "Confirmação de Cadastro", "Parabéns $nome, sua conta foi criada na hospedaria canina Fenrir Pet House usando esse email! Caso você não tenha feito essa conta, contate-nos imediatamente.");
            echo "<a href='adminpage.php'>Voltar para o login.</a>";
        }
        
    }
    elseif($operacao == "exibir"){
        $sql = "SELECT * FROM func;";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i=0; $i < $linhas; $i++){
            $func = mysqli_fetch_array($res);
            echo "Senha: ".$func["senha"]."<br>";
            echo "Nome: ".$func["nome"]."<br>";
            echo "Email: ".$func["email"]."<br>";
            echo "<a href='altera.php?cod_func=".$func["cod_func"]."'>Alterar usuário incompleto</a><br>";
            echo "----------------------------------<br>";
        }
    }
    elseif($operacao == "buscar"){
        $nome = $_POST["nome"];
        $sql = "SELECT * FROM func WHERE nome like '%$nome%';";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i=0; $i < $linhas; $i++){
            $func = mysqli_fetch_array($res);
            echo "Senha: ".$func["senha"]."<br>";
            echo "Nome: ".$func["nome"]."<br>";
            echo "Email: ".$func["email"]."<br>";
            echo "----------------------------------<br>";
        }
    }
    elseif($operacao == "atualizar"){
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
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
        
        if(empty($csenha)){
            echo "Por favor, confirme a senha.<br>";
            $erro = 1;
           
        }

        if(empty($senha)){
            echo "Por favor, preencha a senha<br>";
            $erro = 1;            
            
        }
        // VERIFICA SE NÃO HOUVE ERRO 
        if($erro == 0) {
            $sql = "UPDATE func SET nome = '$nome', senha = '$senha',";
            $sql .= "nome = '$nome', email = '$email' "; 
            $sql .= "WHERE cod_func = $cod_func;";
            mysqli_query($mysqli,$sql);  
            echo "<br>O usuário foi atualizado com sucesso!";
            echo "<br><a href='adminpage.php'>Página Inicial</a>";
        }
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
