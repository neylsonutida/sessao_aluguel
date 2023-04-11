<?php

session_start();

$usuario_padrao = "02511122233";
$senha_padrao = "1234";

$usuario_digitado = $_POST["cpf"];
$senha_digitada = $_POST["senha"];


if($usuario_padrao == $usuario_digitado){
    if($senha_padrao == $senha_digitada){
        $_SESSION["usuario_logado"] = $usuario_digitado;
        header("location: index.php");
    } else {
        header("Location: login.html?falhou=true");
    }//fim else
} else {
    header("Location: login.html?falhou=true");
}//fim else
?>