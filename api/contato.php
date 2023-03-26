<?php
phpinfo();
include_once("../conectaBD.php");
if(!isset($_SESSION)) {
	session_start();
}

if(!isset($_SESSION['id_cliente'])) {
	//echo "sem login";
	$nome = "";
	$email = "";
}else{
	$nome = $_SESSION['nome_cliente'];
	$email = $_SESSION['email_cliente'];
}

if (isset($_POST['enviar'])) {
	    $nome = $_POST['nome'];
	    $email = $_POST['email'];
		$mensagem = $_POST['mensagem'];

		$sql = "INSERT INTO contato (nome, email, mensagem)
		VALUES ('$nome','$email','$mensagem')";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} else {
			mysqli_close($conexao);
			echo "Mensagem enviada!";
			echo "<br><br> <a href='contato.php'> Voltar </a>";
			exit;
			
		}
}
?>