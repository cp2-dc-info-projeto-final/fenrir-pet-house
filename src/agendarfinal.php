<?php
include "conectauser.inc";
include "envia_email.php";
$id = $_GET['idservico'];
$cachorro = $_POST['cachorro'];
$pacote = $_POST['pacote'];
session_start();

if($cachorro == null){
    header ("Location: agendarinc.php");
}else{
if($pacote == null){
    header ("Location: agendarinc.php");
}else{


$sql = "UPDATE servico SET plano = '$pacote' WHERE idServico='$id' ";
mysqli_query($mysqli,$sql);

$sql = "UPDATE servico SET agenda_status = 1 WHERE idServico='$id'";
mysqli_query($mysqli,$sql);

$sql = "UPDATE servico SET cachorro = '$cachorro' WHERE idServico='$id' ";
mysqli_query($mysqli,$sql);

$sql = "UPDATE servico SET cliente = '{$_SESSION['email']}' WHERE idServico='$id' ";
mysqli_query($mysqli,$sql);

envia_email($_SESSION['email'], "Confirmação de Agendamento","Um agendamento de serviço foi feito na hospedaria canina Fenrir Pet House. Esperamos que você e seu aumigo tenham uma ótima experiência.");
echo mysqli_error($mysqli);
mysqli_close($mysqli);
header ("Location: exibereserva.php"); 
}
}
?>