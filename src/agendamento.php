<?php

include "conectauser.inc";

$sql = "SELECT * FROM servico WHERE agenda_status = '0' ;"; 
$res = mysqli_query($mysqli,$sql);
$linhas = mysqli_num_rows($res);
for($i = 0; $i < $linhas; $i++){
    $servico = mysqli_fetch_array($res);
    echo "Reservas Disponíveis nesse Horário: ".$servico["hora_disp"]."<br>";
    echo "Horário: ".$servico["agenda_tstamp"]."<br>";     
    echo "<a href'agendar.php?id=".$servico['id'].">Agendar</a>";
    echo "---------------------<br>";
}

?>