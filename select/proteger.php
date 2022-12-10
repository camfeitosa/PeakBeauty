<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peak Beauty - Agendamento</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css_agend/agend.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagem/png" href="../img/icon.png"/>
    <script>
        function link(){
            window.location = "../index.html";
        }
    </script>
    <style>          
        h4 {
            text-align: center;
            padding-top: 70px;
            color: #2b2b2b;
            font-size: 20px;
            font-weight: 900;
            margin: 5px 0;
            font-family: "Montserrat", sans-serif;
        }
        h4 a{
            color: #2b2b2b;
        }
    </style>

    </head>


<?php
header("Content-Type: text/html; charset=UTF-8");

if(!isset($_SESSION)) {
	session_start();
}

if(!isset($_SESSION['id_cliente'])) {
	die("
    <header>
            <img src='../img/logo.png' class='logo' alt='logo' onclick='link()'>
            <nav> 
                <ul class='nav_links'>
                    <li><a href='index.php'>Agendar</a></li>
                    <li><a href='../conexao3/login/minha_conta.php'>Minha Conta</a></li>
                    <li><a href='../conexao3/login/contato.php'>Contato</a></li>
                </ul>
            </nav>
            <a class='cta' href='../conexao3/index.html'><button class='botao'>ENTRAR</button></a>
        </header>
    
    <h4>Faça login antes de realizar o agendamento <br><br><br><a class='cta' href='../conexao3/index.html'><button class='botao'>ENTRAR</button> </h4></a> ");
} 
?> 