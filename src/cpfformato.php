<?php
/*
   Por Phylipe Soares
   E-mail: phylipesoares@gmail.com
   Em: Março/ 2018
*/

function formata_cpf($cpf){
    /*
        Pega qualquer CPF e CNPJ e formata

        CPF: 000.000.000-00
        CNPJ: 00.000.000/0000-00
    */

    ## Retirando tudo que não for número.
    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    $tipo_dado = NULL;
    if(strlen($cpf)==11){
        $tipo_dado = "cpf";
    }

    switch($tipo_dado){
        default:
            $cpf_formatado = "Não foi possível definir tipo de dado";
        break;

        case "cpf":
            $bloco_1 = substr($cpf,0,3);
            $bloco_2 = substr($cpf,3,3);
            $bloco_3 = substr($cpf,6,3);
            $dig_verificador = substr($cpf,-2);
            $cpf_formatado = $bloco_1.".".$bloco_2.".".$bloco_3."-".$dig_verificador;
        break;

    }
    return $cpf_formatado;
}
/*
## Como Usar.

$cpf = "12345678909";

echo "CPF Formatado: ".formata_cpf($cpf);


   Resultado:
   CPF Formatado: 123.456.789-09
*/


?>