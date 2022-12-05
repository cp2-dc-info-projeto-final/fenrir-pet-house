<?php
include "conectauser.inc";

$email = $_POST['email'];

$sql = "SELECT * FROM cliente WHERE email = '$email';"; 
$res = mysqli_query($mysqli,$sql);
$linhas = mysqli_num_rows($res);
for($i = 0; $i < $linhas; $i++){
    $cliente = mysqli_fetch_array($res);
    echo "Nome: ".$cliente["nome"]."<br>";
    echo "E-mail: ".$cliente["email"]."<br>";
    echo "Data de nascimento: ".$cliente["data_nasc"]."<br>";          
    echo "---------------------<br>";
}
echo "<a href='indexlogcliente.php'>Voltar para o início</a>";

