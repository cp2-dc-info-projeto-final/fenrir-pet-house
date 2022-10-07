<?php
    $senhaantiga = $_POST["senhaantiga"];
    $senhanova = $_POST["senhanova"];
    $csenhanova = $_POST["csenhanova"];



else if($operacao == "editsenha"){
    $senhaantiga = $_POST["senhaantiga"];
    $senhanova = $_POST["senhanova"];
    $csenhanova = $_POST["csenhanova"];

        $erro = 0;

        if(empty($senhaantiga)){
            echo "Por favor, preencha a senha antiga.<br>";
            $erro = 1;
        }

        if($senhaantiga){
            echo "Por favor, preencha o e-mail corretamente.<br>";
            $erro = 1;
        }

        if(empty($senhanova)){
            echo "Por favor, preencha a nova senha.<br>";
            $erro = 1;
        }

        if(empty($csenhanova)){
            echo "Por favor, confirme a nova senha.<br>";
            $erro = 1;
        }

        if($erro == 0){
            $sql = "UPDATE cliente SET senha = '$novasenha';"
            $sql .= "WHERE cod_cliente = $cod_cliente;";  
            mysqli_query($mysqli,$sql);

            echo "Cliente atualizado com sucesso!<br>";
            echo "<a href='form_extra.html'>Voltar para o início</a>"; 
        }
    }

?>