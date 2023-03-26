<?php include_once("../conectaBD.php");

	$id_cargo = $_REQUEST['id_cargo'];
	
	$result_sub_cat = "SELECT * FROM especialidade WHERE id_cargo = $id_cargo ORDER BY nome_esp";
	$resultado_sub_cat = mysqli_query($conexao, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post[] = array(
			'id_esp'	=> $row_sub_cat['id_esp'],
			'nome_esp' => utf8_encode($row_sub_cat['nome_esp']),
		);
	}
	
	echo(json_encode($sub_categorias_post)); 
