<?php header("Content-Type: text/html; charset=UTF-8");
 
	include_once("../../conectaBD.php");	
	mysqli_set_charset($conexao, "utf-8");
	
	if (false === $conexao->set_charset('utf8')) {
    printf('Error ao usar utf8: %s', $conexao->error);
    exit;
	}

    if(!isset($_SESSION)) {
    session_start();
    }
	
$id = $_SESSION['id_cliente'];

$sql = "SELECT post.*, especialidade.nome_esp, cad_profissional.nome_pro FROM post
inner join especialidade on especialidade.id_esp = post.id_esp
inner join cad_profissional on cad_profissional.id_pro = post.id_pro WHERE id_cliente = '$id'
order by especialidade.nome_esp, cad_profissional.nome_pro"; 

		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		$registro = mysqli_fetch_array($instrucao);

	echo "<h1>Lista de Reservas</h1> <br> <br>";
	//gera uma tabela pela tag table
	echo "<table >
		<tr>
		<th>Serviço</th>
		<th>Dia</th>
		<th>Hora</th>
		<th>Profissional</th>
		</tr>";
		
		//concluindo operação

	foreach ($instrucao as $exibe) {
		//cria um linha (TR) para cada registro existente na tabela
		//cada TD representa um campo do registro
		echo "
		<!DOCTYPE html>
        <head>
        <meta charset='utf-8'>
		</head>
		<body>
		
		<tr align='center'>
		<td align='center'>".$exibe ['nome_esp']." </td>
		<td>".$exibe['dia']."</td>
		<td>".$exibe['hora']."</td>
		<td>".$exibe['nome_pro']."</td>
		</tr>
		
		</body>
		</html>";
	}
	echo "</table>";
	mysqli_close($conexao);
			
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peak Beauty - Reservas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="../../img/icon.png"/>
    <style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:500');
		
			table {
			position: relative;
			left: 150px;
			width: 550px;
			border: 1px solid #AAA;
			table-layout: fixed;
			border-collapse: collapse;
			}

			h1{
			color: #2b2b2b;
			font-weight: 700;
			font-size: 24px;
			left: 170px;
			top: 100px;
			position: absolute;
			font-family: "Montserrat", sans-serif;
			}

			table td, table th {
				border: 1px solid #b1b1b1;
				text-align: center;
				height: 60px;
				padding: 5px 15px 5px 15px;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				background-color: rgba(0, 0, 0, 0.07);
			}

			td{ 
				color: #2b2b2b;
				font-size: 15px;
				font-family: "Montserrat", sans-serif;

			}
			th{
				color: #2b2b2b;
				font-size: 15px;
				font-weight: 900;
				font-family: "Montserrat", sans-serif;
			}    
    </style>
</head> 