<?php
header("Content-Type: text/html; charset=UTF-8");

if(!isset($_SESSION)) {
	session_start();
}

echo "<h1> Área do cliente </h1> 
<p> bla bla bla cabelo bla bla bla unhas </p>";

if(!isset($_SESSION['id_cliente'])) {
	echo "<a href='../index.html'>Faça login</a>";
	//header("Location: ../index.html");
}else{
	echo "Bem vinde, ";
    echo $_SESSION['nome_cliente'];
	
	echo "<br> <a href='logout.php'> Sair </a>
         <br>
		 <a href='del.php'> Deletar conta </a>
		 <br><br>
		 <a href='../../select/index.php'> Agendar </a>
		 <br><br>
         <a href='edit.php'> Editar conta </a>"
		 ;
}
?>

