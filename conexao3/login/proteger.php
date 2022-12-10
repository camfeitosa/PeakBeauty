<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="imagem/png" href="../../img/icon.png"/>
  <title>Peak Beauty</title>
  <style>   
  @import url('https://fonts.googleapis.com/css?family=Montserrat:500');       
        h3 {
            text-align: center;
            padding-top: 70px;
            color: #2b2b2b;
            font-size: 20px;
            font-weight: 900;
            margin: 5px 0;
            font-family: "Montserrat", sans-serif;
        }
        h3 a{
            color: #2b2b2b;
        }
    </style>
</head>
<body>
  
</body>
</html>

<?php

if(!isset($_SESSION)) {
	session_start();
}

if(!isset($_SESSION['id_cliente'])) {
	die("<h3>Faça login antes de acessar essa página. </p> <p> <a href=\"../index.html\">Entrar</a></h3>");
}
?> 