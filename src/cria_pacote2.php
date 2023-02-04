<?php
include "conectauser.inc";

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$tempo = $_POST['tempo'];
$areas = $_POST['areas'];
$banho = $_POST['banho'];
$tosa = $_POST['tosa'];
$festa = $_POST['festa'];


$sql = "INSERT INTO pacotes (nome, valor, tempo, areas, banho, tosa, festa) VALUES ('$nome','$valor','$tempo','$areas','$banho','$tosa','$festa')";
mysqli_query($mysqli,$sql);
echo '<script type="text/javascript">';
echo 'alert("Pacote criado com sucesso!");';
echo 'window.location.href = "admpacotes.php";';
echo '</script>';

?>