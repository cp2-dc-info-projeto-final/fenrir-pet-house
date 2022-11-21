<?php


$senha = "123456";

$hash = password_hash($senha,PASSWORD_DEFAULT);

echo "<b>Hash:</b> ". $hash;

password_verify($senha, $senha_cript);

hash_equals($senha_cript1, $senha_cript2);

?>