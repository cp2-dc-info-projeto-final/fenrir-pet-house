<?php
include "conectauser.inc";
$idpacote= $_GET["idpacote"];
$nome= $_POST["nome"];
$valor= $_POST["valor"];
$tempo= $_POST["tempo"];
$areas= $_POST["areas"];
$banho= $_POST["banho"];
$tosa= $_POST["tosa"];
$festa= $_POST["festa"];


$sql = "UPDATE pacotes SET nome = '$nome', valor = '$valor', tempo = '$tempo', areas = '$areas' WHERE idpacote = '$idpacote'";
if (mysqli_query($mysqli,$sql)){
    if ($banho != ""){
        $sql = "UPDATE pacotes SET banho = '$banho' WHERE idpacote = '$idpacote'";
        mysqli_query($mysqli,$sql);
    }
    if ($tosa != ""){
        $sql = "UPDATE pacotes SET tosa = '$tosa' WHERE idpacote = '$idpacote'";
        mysqli_query($mysqli,$sql);
    }
    if ($festa != ""){
        $sql = "UPDATE pacotes SET festa = '$festa' WHERE idpacote = '$idpacote'";
        mysqli_query($mysqli,$sql);
        } 
        echo '<script type="text/javascript">';
        echo 'alert("Pacote alterado com sucesso");';
        echo 'window.location.href = "admpacotes.php";';
        echo '</script>';
}
else{
    echo mysqli_error($mysqli);
}


mysqli_close($mysqli);
?>