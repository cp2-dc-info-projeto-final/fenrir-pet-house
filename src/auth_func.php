<?php
session_start();
if(isset($_SESSION["IsAdmin"]) ){
    if($_SESSION["IsAdmin"] =! 0 xor 1){
        echo "Você não tem autorização para visualizar essa página";
        exit;
    }
}
if(!isset($_SESSION["IsAdmin"]) ){
    echo "Você não tem autorização para visualizar essa página";
    exit;
}
?>