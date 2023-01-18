<?php
include "conectauser.inc";
include "envia_email.php";
$id = $_GET['idservico'];
$cachorro = $_POST['cachorro'];
$plano = $_POST['plano'];
session_start();

$sql0 = "SELECT nome FROM cachorro WHERE email = '$email' ;";
$res = mysqli_query($mysqli,$sql0);
$linhas = mysqli_num_rows($res);
$cliente= mysqli_fetch_array($res);

$erro = 0;

    if(empty($cachorro)){
        echo "Por favor, selecione o(s) campo(s) corretamente!.<br>";
        $erro = 1;
    }

    if(empty($plano)){
        echo "Por favor, selecione os campos corretamente!.<br>";
        $erro = 1;
    }

$sql = "UPDATE servico SET plano = '$plano' WHERE idServico='$id'";
mysqli_query($mysqli,$sql);

$sql2 = "UPDATE servico SET agenda_status = 1 WHERE idServico='$id'";
mysqli_query($mysqli,$sql2);

$sq3 = "UPDATE servico SET cachorro = '$cachorro' ";
mysqli_query($mysqli,$sql3);

$sq4 = "UPDATE servico SET cliente = '{$cliente['nome']}' WHERE email ='{$_SESSION['email']}' ";
mysqli_query($mysqli,$sql4);

$sq5 = "UPDATE servico SET descricao = '{$_SESSION['email']}' WHERE idServico='$id'";
mysqli_query($mysqli,$sql5);

envia_email($_SESSION['email'], "Confirmação de Agendamento","Um agendamento de serviço foi feito na hospedaria canina Fenrir Pet House. Esperamos que você e seu aumigo tenham uma ótima experiência.");
echo mysqli_error($mysqli);
mysqli_close($mysqli);
header ("Location: exibereserva.php"); 
?>

<?php

$operacao = $_POST["operacao"];

if($operacao == "inserir"){
    $email = $_POST["email"];
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
        $sql = "INSERT INTO cachorro (nome, idade, raca, email)";
        $sql .= "VALUES ('$nome', '$idade', '$raca', '$email');";  
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

?>