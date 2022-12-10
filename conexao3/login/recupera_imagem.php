<?php
	//Conectando ao banco
	include_once('../../conectaBD.php');
        if(!isset($_SESSION)) {
        session_start();
        }

		//traz as variáveis do formulário
		
		$id_cliente = $_SESSION['id_cliente'];
		
		//Script de uma busca em uma tabela no Banco de Dados
		$sql = "SELECT arquivo FROM clienteImagem WHERE id_cliente ='$id_cliente'";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		$registro = mysqli_fetch_array($instrucao);
		
		//concluindo operação
		if (!$instrucao) {
			//caso erro seja verdade
			die(' Query Inválida: ' . mysqli_error($conexao));
			echo 'Falha ao recuperar o arquivo!';
		} else {
			//caso encontrado
			mysqli_close($conexao);
			//echo 'Arquivo recuperado com sucesso!';
		}	

		//testa resultados
		//var_dump ($registro);

	
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Manipulando arquivos</title>
		<meta charset="utf-8" />
	</head>
	<body>
			<img src="<?= $registro['arquivo']; ?>"/>
	</body>
</html>

