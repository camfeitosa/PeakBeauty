<?php
session_start();
	//Conectando ao banco
include_once("../conectaBD.php");
	//Tabela no BD
	$tabela="cad_cliente";
	//define campos do insert
	$campos = "nome_cliente, tel_cliente, email_cliente, senha_cliente";	

	//se o botão for pressionado
	if (isset($_POST['cadastrar'])) {
		//traz as variáveis do formulário
		$nome_cliente = $_POST['nome'];
		$tel_cliente = $_POST['cel'];
		$email_cliente = $_POST['email'];
		$senha_cliente = $_POST['senha'];
		$senha_confirma = $_POST['confirma'];
		//$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$nome_cliente','$tel_cliente','$email_cliente','$senha_cliente')";

		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} else {
			mysqli_close($conexao);
			//echo "Cadastro realizado com sucesso!";
			header("Location: index.html"); //adicionar página minha conta com session no cad
			exit;
		} 
	}

?>