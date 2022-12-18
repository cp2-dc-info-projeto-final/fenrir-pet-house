<?php
include "conectauser.inc";
include "envia_email.php";
$id = $_GET['idservico'];
$cachorro = $_POST['cachorro'];
$plano = $_POST['plano'];
session_start();

$sql = "UPDATE servico SET descricao = '$plano {$_SESSION['email']} $cachorro' WHERE idServico='$id'";
mysqli_query($mysqli,$sql);

$sql2 = "UPDATE servico SET agenda_status = 1 WHERE idServico='$id'";
mysqli_query($mysqli,$sql2);

envia_email($_SESSION['email'], "Confirmação de Agendamento","Um agendamento de serviço foi feito na hospedaria canina Fenrir Pet House. Esperamos que você e seu aumigo tenham uma ótima experiência.");
echo mysqli_error($mysqli);
mysqli_close($mysqli);
echo "<a href='indexlogcliente.php'>Voltar ao início</a>"; 
?>