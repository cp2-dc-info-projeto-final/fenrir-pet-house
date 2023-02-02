<?php
session_start();
var_dump($_SESSION["IsAdmin"]);
if(isset($_SESSION["IsAdmin"]) ){
    if($_SESSION["IsAdmin"] =! 0){
        echo "Você não tem autorização para visualizar essa página";
        exit;
    }
}
if(!isset($_SESSION["IsAdmin"]) ){
    echo "Você não tem autorização para visualizar essa página";
    exit;
}
?>