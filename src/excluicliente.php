<?php  include "conectauser.inc";

session_start();
if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];
}


$sql ="DELETE FROM `cliente` WHERE `cliente`.`email` = $email";
if(mysqli_query($mysqli, $sql)){
    include "envia_email.php";
    envia_email($email, "Exclusão de Conta", "Sua conta foi excluída do site da hotelaria canina Fenrir Pet Shop.");
    header('location: index.php');
}
header('location: index.php');
header('location:index.php');
?>
<?php mysqli_close($mysqli); ?>