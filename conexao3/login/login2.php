<?php
include('../../conectaBD.php');
//header("Location: ../index.html"); //pg de login

if(isset($_POST['email'])|| isset($_POST['senha'])) {
	
	 if(strlen($_POST['email']) == 0) {
		echo "Preencha seu email";
	}else if(strlen($_POST['senha']) == 0) {
		echo "Preencha sua senha";
	} else { 
		
		$email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);
		
		//$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 
		
		/*if(password_verify($senha, $senha_cliente)):
			echo "Senha válida";
	else:
		echo "Invalida";
	endif;*/

		$sql_code = "SELECT * FROM cad_cliente WHERE email_cliente = '$email' AND senha_cliente = '$senha'";
		$sql_query = $conexao->query($sql_code) or die ("Falha na execução do SQL");
		
		$quantidade = $sql_query->num_rows;
		

		if($quantidade == 1){
			$usuario = $sql_query->fetch_assoc();
			
			if(!isset($_SESSION)){
				session_start();
			}
			
			$_SESSION['id_cliente'] = $usuario['id_cliente'];
			$_SESSION['nome_cliente'] = $usuario['nome_cliente'];
			$_SESSION['email_cliente'] = $usuario['email_cliente'];

			 
			header("Location: ../../select/index.php"); //pg inicial
			
			
		}else{
			echo "Falha ao logar";
		}
	}
	
}
?>