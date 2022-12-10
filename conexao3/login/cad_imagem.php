<?php
	//Conectando ao banco
	
	include_once('../../conectaBD.php');

	if(!isset($_SESSION)) {
	session_start();
}
	//Tabela no BD
	$tabela="clienteImagem";
	//define campos do insert
	$campos = "id_cliente, arquivo";
	//define o diretorio para envio de arquivos
	$diretorio = "imagens/"; 
	
	// define a zona de tempo a ser utilizada.
	date_default_timezone_set('America/Sao_Paulo');
	
	if(isset($_POST['enviar'])){
		//traz as variáveis do formulário
		$id_cliente = $_SESSION['id_cliente'];
		//recupera a extensao do arquivo
		$extensao = strtolower(substr($_FILES['arquivo']["name"], -4));
		
		//define o nome do arquivo
		//configura no formato yyyy-mm-dd_hh:mm:ss
		$novo_nome = date('Y-m-d_H-i-s').$extensao;
		
		$arquivo = $diretorio.$novo_nome;
		
		//efetua o upload para repositório de imagens
		move_uploaded_file($_FILES['arquivo']["tmp_name"], $arquivo); 
		
		//Script para inserir o caminho do arquivo ao BD
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$id_cliente', '$arquivo')";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) {
			die(' Query Inválida: ' . mysqli_error($conexao));
			echo 'Falha ao enviar arquivo!';
		} else {
			mysqli_close($conexao);
			echo 'Arquivo enviado com sucesso!';
			echo "<br><br><a href= 'recupera_imagem.php'> Veja a imagem </a>";
			exit;
		}	
	}
	
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Img</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<form action="" method="POST" enctype="multipart/form-data">
			<label>Selecione um arquivo para sua foto de perfil: <br/><br/>
			<input type="file" name="arquivo" size="45" /></label> <br />
			<input type="submit" value="Enviar" name="enviar">
			<input type="reset" value="Apagar">
		</form>
	</body>
</html>

