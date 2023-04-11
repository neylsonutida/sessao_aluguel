<?php
session_start();

    echo " ".$_SESSION['pessoa'].", bicicleta alugada com sucesso!!<br><br>";



    echo "Tipo de bicicleta: " .$_GET['bicicletas']."<br><hr>";
    echo "Tempo de aluguel: " .$_GET['tempo']."<br><hr>";
    echo "Local: " .$_GET['local']."<br><hr>";

    echo "<a href='index.php'>Voltar para o Menu</a>";
?>