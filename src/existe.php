<?php
function ExisteUsuario($u, $e){

$cmd = "SELECT * FROM cliente WHERE email='$email'";
$result = mysql_query($cmd);
$rows = mysql_num_rows($result);

if(1 == $rows){
    return true;
}

else{
    return false;
}
}
?>