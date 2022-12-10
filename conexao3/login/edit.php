<?php
include('proteger.php');
include('../../conectaBD.php');

$id = $_SESSION['id_cliente'];
$sqlPesq = "SELECT * FROM cad_cliente WHERE id_cliente = '$id'";
$pesquisa = mysqli_query($conexao,$sqlPesq);

	if (isset($_POST['alterar'])){
		//traz as variáveis do formulário
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$senha = $_POST['senha'];
	    $senha_conf = $_POST['senha_conf'];
		
		foreach ($pesquisa as $valor):
		$senha_at = $valor['senha_cliente'];
		endforeach;
		
		if ($senha_conf == $senha_at) {
			
		    if ($nome != null) {
		    $sql = "UPDATE cad_cliente SET 
		    nome_cliente = '$nome'
		    WHERE id_cliente = '$id'";
		    }
		
		    if ($email != null){
		    $sql = "UPDATE cad_cliente SET 
		    email_cliente = '$email'
		    WHERE id_cliente = '$id'";
		    }
			
		    if ($telefone != null){
		    $sql = "UPDATE cad_cliente SET 
		    tel_cliente = '$telefone'
		    WHERE id_cliente = '$id'";
		    }
			
			if ($senha != null){
		    $sql = "UPDATE cad_cliente SET 
		    senha_cliente = '$senha'
		    WHERE id_cliente = '$id'";
		    }
		
		
		$instrucao = mysqli_query($conexao,$sql);
		
		 //concluindo operação
		    if (!$instrucao) {
		    	die(' Query Inválida: ' . mysqli_error($conexao));
		    } else {
			    mysqli_close($conexao);
			    echo "Alteração realizada com sucesso!";
				echo "<br><br><a href='minha_conta.php'>Voltar</a>";
			    exit;
		    }
		}else{
			echo "<p>Senha incorreta</p>";
	    }
	}	
?>
