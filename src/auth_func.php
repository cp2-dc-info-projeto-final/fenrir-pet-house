<?php
session_start();
if(!isset($_SESSION["IsAdmin"]) ){
    echo "Você não tem autorização para visualizar essa página";
    exit;
}
?>