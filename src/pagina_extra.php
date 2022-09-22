<html>
    <head>
        <title>Dados Cadastrados</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php include "conecta_mysql.inc";        

        $operacao = $_REQUEST["operacao"];
        if($operacao == "inserir"){
            $nome = $_POST["nome"]; 
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $senha_rep = $_POST["senha_rep"];
            $data_nasc = $_POST["data_nasc"];
            $bandeiraCartao = $_POST["bandeiraCartao"];

            $erro = 0;

            if(empty($nome) or strstr($nome, ' ') == false){
                echo "Por favor, preencha o nome completo.<br>";
                $erro = 1;
            }

            if(strlen($email) < 10 or strstr($email, '@') == false){
                echo "Por favor, preencha o e-mail corretamente.<br>";
                $erro = 1;
            }

            if(strlen($senha) < 5 or strstr($senha) > 10){
                echo "Por favor, preencha o e-mail corretamente.<br>";
                $erro = 1;
            }

            if($senha != $senha_rep){
                echo "Por favor, repita a senha corretamente.<br>";
                $erro = 1;
            }

            if(empty($data_nasc)){
                echo "Por favor, preencha a data.<br>";
                $erro = 1;
            }

            if(empty($bandeiraCartao)){
                echo "Por favor, escolha uma bandeira do cartão de crédito.<br>";
                $erro = 1;
            }

            if($erro == 0){
                $sql = "INSERT INTO cliente (nome,email,data_nasc,cartao)";
                $sql .= "VALUES ('$nome','$email', '$senha', '$data_nasc', '$bandeiraCartao');";  
                mysqli_query($mysqli,$sql);

                echo "Nome: $nome <br>"; 
                echo "E-mail: $email <br>";
                echo "Data de nascimento: $data_nasc <br>";
                echo "Bandeira do cartão de crédtio: $bandeiraCartao <br>"; 
            }
        } 
        else if($operacao == "exibir"){
            $sql = "SELECT * FROM cliente;"; 
            $res = mysqli_query($mysqli,$sql);
            $linhas = mysqli_num_rows($res);
            for($i = 0; $i < $linhas; $i++){
                $cliente = mysqli_fetch_array($res);
                echo "Nome: ".$cliente["nome"]."<br>";
                echo "E-mail: ".$cliente["email"]."<br>";
                echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";
                echo "Bandeira do cartão: ".$cliente["cartao"]."<br>";
                echo "<a href='altera.php?cod_cliente=".$cliente["cod_cliente"]."'>
                Editar clientes</a><br>";
                echo "<a href='pagina_extra.php?operacao=excluir&cod_cliente=".$cliente["cod_cliente"]."'>
                Excluir clientes</a><br>";

                echo "---------------------<br>";
            }
        }
        else if($operacao == "buscar"){
            $nome = $_POST["nome"];
            $sql = "SELECT * FROM cliente WHERE nome like '%$nome%';"; 
            $res = mysqli_query($mysqli,$sql);
            $linhas = mysqli_num_rows($res);
            for($i = 0; $i < $linhas; $i++){
                $cliente = mysqli_fetch_array($res);
                echo "Nome: ".$cliente["nome"]."<br>";
                echo "E-mail: ".$cliente["email"]."<br>";
                echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";
                echo "Bandeira do cartão: ".$cliente["cartao"]."<br>";
                echo "---------------------<br>";
            }
        }
        else if($operacao == "editar"){
            $cod_cliente = $_POST["cod_cliente"];
            $nome = $_POST["nome"]; 
            $email = $_POST["email"];
            $data_nasc = $_POST["data_nasc"];
            $bandeiraCartao = $_POST["bandeiraCartao"];

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

            if(empty($bandeiraCartao)){
                echo "Por favor, escolha uma bandeira do cartão de crédito.<br>";
                $erro = 1;
            }

            if($erro == 0){
                $sql = "UPDATE cliente SET nome = '$nome', email = '$email',
                data_nasc = '$data_nasc', cartao = '$bandeiraCartao' ";
                $sql .= "WHERE cod_cliente = $cod_cliente;";  
                mysqli_query($mysqli,$sql);

                echo "Nome: $nome <br>";
                echo "E-mail: $email <br>";
                echo "Data de nascimento: $data_nasc <br>";
                echo "Bandeira do cartão de crédtio: $bandeiraCartao <br>"; 
                echo "<a href='form.html'>Voltar para o início</a>";
            }
        }
        else if($operacao == "excluir"){
            $cod_cliente = $_GET["cod_cliente"];
            $sql = "DELETE FROM cliente WHERE cod_cliente = '$cod_cliente';"; 
            mysqli_query($mysqli,$sql);

            echo "Cliente excluido com sucesso!";
            echo "<a href='form.html'>Voltar para o início</a>";
    
        }

        mysqli_close($mysqli); 
        ?>

    </body>
</html>