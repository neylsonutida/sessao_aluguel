<?php
session_start();

    echo " ".$_SESSION['pessoa'].", bicicleta alugada com sucesso!!<br><br><hr>";



    echo "Tipo de bicicleta: " .$_GET['bicicletas']."<br>";
    echo "Tempo de aluguel: " .$_GET['tempo']."<br>";
    echo "Local: " .$_GET['local']."<br><br>";

    echo "<a href='index.php'>Voltar para o Menu</a>";
?>