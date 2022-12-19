<?php
session_start();

include "conectauser.inc";
$email = $_GET['email'];
$sql = "SELECT descricao FROM servico WHERE idServico = ''";
mysqli_query($mysqli,$sql);
$descnova = $_POST['desc'];
$sql2 = "UPDATE servico SET descricao = '$descnova' WHERE idServico = '{$_SESSION['idservico']}' ";
mysqli_query($mysqli,$sql2);
mysqli_error();
mysqli_close();
include "envia_email.php";
envia_email($email, 'Alteração de Reserva', 'Um administrador da hospedaria canina Fenrir Pet House alterou sua reserva. Para mais informações, nos contate.');
header('location: adminpage.php');
?>