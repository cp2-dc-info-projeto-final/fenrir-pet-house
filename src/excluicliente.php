<?php  include "autentica.php";
"DELETE FROM `cliente` WHERE `cliente`.`email` = $email";
header("Location: index.php");
?>