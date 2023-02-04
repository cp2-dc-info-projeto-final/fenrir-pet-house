<?php
include "conectauser.inc";
include "genpass.php";

$email = $_POST["email"];
$senha = gerar_senha(10, true, true, true, false);
$hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "UPDATE func SET senha = '$hash' WHERE email = '$email' ";
mysqli_query($mysqli,$sql);
mysqli_close($mysqli);

include "envia_email.php";
envia_email($email, 'Recuperação de Senha', "Um pedido de recuperação de senha foi feito no site da hotelaria canina Fenrir Pet House e uma senha aleatória foi gerada. Sua nova senha para login é:<br><br><strong>$senha</strong><br><br>Esperamos que você tenha uma ótima experiência em nosso site.");
echo '<script type="text/javascript">';
echo 'alert("Senha de recuperação enviada. Verifique seu email.");';
echo 'window.location.href = "funcionariologin.html";';
echo '</script>';
?>
