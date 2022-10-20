<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "folha";
    
    $con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName)
    or die ('Não foi possivel estabelecer conexão com o banco de dados');
?>