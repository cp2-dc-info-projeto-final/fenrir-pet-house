<?php
include "conectauser.inc";
include "genpass.php";

$email = $_POST["email"];
$senha = gerar_senha(10, true, true, true, false);

$sql = "UPDATE cliente SET senha = '$senha' WHERE email = '$email' ";
mysqli_query($mysqli,$sql);
mysqli_close($mysqli);

include "envia_email.php";
envia_email($email, 'Alteração de Senha', "Um pedido de alteração de senha foi feito no site da hospedaria canina Fenrir Pet House e uma senha aleatória foi gerada. Sua nova senha para login é:<br><br><strong>$senha</strong><br><br>Esperamos que você tenha uma ótima experiência em nosso site.");

echo "<a href='index.php'>Voltar para o início</a>";
?>
