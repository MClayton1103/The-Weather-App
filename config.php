<?php

    $dbHost = 'Localhost';
    $dbUsername = 'allskiin';
    $dbPassword = 'allskiin2001';
    $dbName = 'theweathernow';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>