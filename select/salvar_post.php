<?php
	session_start();
	include_once("../conectaBD.php");
	
	$id_cliente = $_SESSION ['id_cliente'];
	$id_cargo = $_POST['id_cargo'];
	$id_sub_cargo = $_POST['id_sub_cargo'];
	$id_dia = $_POST['id_dia'];
	$id_hora = $_POST['id_hora'];
	$id_sub_pro = $_POST['id_sub_pro'];

	echo "Id cargo: $id_cargo <br> Id Subcargo: $id_sub_cargo <br> Id dia: $id_dia <br> Id hora: $id_hora <br> Id Pro: $id_sub_pro <br> ";	

	$result_post = "INSERT INTO post (id_cliente, id_esp, dia, hora, id_pro) VALUES ( '$id_cliente', '$id_sub_cargo', '$id_dia', '$id_hora', '$id_sub_pro')";
	$resultado_post = mysqli_query($conexao, $result_post);

	if(mysqli_affected_rows($conexao) > 0){ 
		$_SESSION['msg'] = '<div class="alert alert-success" role="alert">Agendado com sucesso</div>';
		header("Location: index.php");
	}else{
		$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Agendamento não realizado</div>';
		header("Location: index.php");
	}

?>