<?php

include "conectauser.inc";

$sql = "SELECT * FROM servico WHERE agenda_status = 0 ;"; 
$res = mysqli_query($mysqli,$sql);
$linhas = mysqli_num_rows($res);
for($i = 0; $i < $linhas; $i++){
    $servico = mysqli_fetch_array($res);
    echo "Horário: ".$servico["agenda_tstamp"]."<br>";
    echo "Reservas Disponíveis nesse Horário: ".$servico["hora_disp"]."<br>";
    echo "ID do Serviço: ".$servico["idServico"]."<br>";   
    echo "<a href='agendar.php?id=".$servico['idServico'].">Agendar<br></a>";
    echo "---------------------<br>";
}
mysqli_close($mysqli);
?>
