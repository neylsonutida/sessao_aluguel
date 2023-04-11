<?php
session_start();
//isset verifica se tem algo dentro

if (!isset($_SESSION["usuario_logado"])){
    header("Location: login.html");
}  

if (isset($_GET["sair"])){
    unset($_SESSION["usuario_logado"]);
    header("Location: login.html");
    
}

include "header.php";

@$pagina = $_GET['pagina'];

if($pagina == "aluguebicicleta"){
    include "aluguebicicleta.html";
}else{
    include "home.php";
}

?>

