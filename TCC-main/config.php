<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-tcc';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*if($conexão->connect_errno){
        echo'erro';
    }else{
        echo'acerto';
    }*/
?>