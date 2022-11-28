<?php
include "envia-email.php";
    $email = "pedrohenriquedstc@gmail.com";
    $assunto = "aaaaaaa";
    $mensagem = "Boa noite";
    if(envia_email($email,$assunto,$mensagem)){
        echo "E-mail enviado com sucesso!";
    } 
    else{
        echo "Falha no envio do e-mail";
    }
    $cod_recuperacaorand = rand(0000, 9999);