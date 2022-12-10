<?php
    header("Content-Type: text/html; charset=UTF-8");

    if(!isset($_SESSION)) {
        session_start();
    }

    echo "";

    if(!isset($_SESSION['id_cliente'])) {
        echo "<a href='../index.html'>Faça login</a>";
        //header("Location: ../index.html");
    }else{
        echo "Bem vinde, ";
        echo $_SESSION['nome_cliente'];
    }

 ?> 