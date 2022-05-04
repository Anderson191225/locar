<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '191225';
    $dbName = 'locar';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    /*
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }*/
?>