<?php
session_start();

    include "conexao.php";

    $bicicletas = $_GET['bicicletas'];
    $tempo = $_GET['tempo'];
    $local = $_GET['local'];
    $erro = FALSE;

    if(empty($local)){
        echo "Escolha o <strong> local... </strong> <br><br>";
        echo "<a href='aluguebicicleta.php'>Voltar para o Cadastro</a> <br><br>";
        $erro = TRUE;
    }
    if(!$erro){
    //instanciar objeto
    //url, nome do banco, user, senha
    //C:\xampp\phpMyAdmin\config.inc
    //1- 
        include "conexao.php";

    //stmt = statement
        

        echo " ".$_SESSION['pessoa'].", bicicleta alugada com sucesso!!<br><br><hr>";

        echo "Tipo de bicicleta: " .$_GET['bicicletas']."<br>";
        echo "Tempo de aluguel: " .$_GET['tempo']."<br>";
        echo "Local: " .$_GET['local']."<br><br>";
    
        echo "<a href='index.php'>Voltar para o Menu</a>";
    }

    
?>