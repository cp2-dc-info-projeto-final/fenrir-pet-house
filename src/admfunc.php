<?php
include "conectauser.inc";

$sql = "SELECT * FROM func;";
$res = mysqli_query($mysqli,$sql);
$linhas = mysqli_num_rows($res);
for($i=0; $i < $linhas; $i++){
    $func = mysqli_fetch_array($res);
    echo "Senha: ".$func["senha"]."<br>";
    echo "Nome: ".$func["nome"]."<br>";
    echo "Email: ".$func["email"]."<br>";
    echo "Data de Nascimento: ".$func["data_nasc"]."<br>";
    echo "CPF: ".$func["cpf"]."<br>";
    echo "----------------------------------<br>";
}
?>