<?php include_once("../conectaBD.php");

	$id_cargo = $_REQUEST['id_cargo'];
	
	$result_sub_cat = "SELECT * FROM cad_profissional WHERE id_cargo = $id_cargo ORDER BY nome_pro";
	$resultado_sub_cat = mysqli_query($conexao, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post2[] = array(
			'id_pro'	=> $row_sub_cat['id_pro'],
			'nome_pro' => utf8_encode($row_sub_cat['nome_pro']),
		);
	}
	
	echo(json_encode($sub_categorias_post2));
