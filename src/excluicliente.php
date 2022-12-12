<?php  include "conectauser.inc";

$email = $_POST["email"];
$senha = $_POST["senha"];


//pega info "senha" do sql
$sql = "SELECT senha FROM cliente WHERE email = '$email' ";
$query = $mysqli->query($sql);
$row = $query->fetch_assoc();

//checa senha
if(password_verify($senha, $row['senha'])){
    //deleta conta
    $sql2 ="DELETE FROM cliente WHERE email = '$email' ";
        if(mysqli_query($mysqli, $sql2)){
            include "envia_email.php";
            envia_email($email, "Sentiremos sua Falta!", "Sua conta foi excluída do site da hotelaria canina Fenrir Pet Shop. Esperamos que você e seu au-migo tiveram a melhor experiência.");
            header('location: index.php');
        }
    }
header('location: index.php');
?>
<?php mysqli_close($mysqli); ?>