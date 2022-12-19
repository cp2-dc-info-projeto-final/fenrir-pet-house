<?php
$operacao = $_POST["operacao"];
include "conectauser.inc";

if($operacao == "exibir"){
    session_start();

    $sql = "SELECT * FROM servico WHERE agenda_status = '1' ;"; 
    $res = mysqli_query($mysqli,$sql);
    $linhas = mysqli_num_rows($res);
    for($i = 0; $i < $linhas; $i++){
        $servico = mysqli_fetch_array($res);
        echo "Horário: ".$servico["agenda_tstamp"]."<br>";
        echo "Descrição do Serviço: ".$servico["descricao"]."<br>";
        echo "ID do Serviço: ".$servico["idServico"]."<br>";   
        echo "<a href='altagendamento.php?idservico=".$servico["idServico"]."'>
            Alterar Descrição</a><br>";
        echo "---------------------<br>";
        mysqli_error($mysqli);
    }
    echo "<a href='indexlogfuncionario.php'>Voltar para o início</a>";
}

mysqli_close($mysqli);

