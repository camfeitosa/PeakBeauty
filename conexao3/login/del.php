<?php
	include('proteger.php');
	include_once("../../conectaBD.php");
	
if(!isset($_SESSION)) {
	session_start();
}

   // echo "<p> Deletar conta </p>";

$id = $_SESSION['id_cliente'];
$sqlPesq = "SELECT * FROM cad_cliente WHERE id_cliente = '$id'";
$pesquisa = mysqli_query($conexao,$sqlPesq);
	
	
		if (isset($_POST['deletar'])){
		$senha_conf = $_POST['senha_conf'];
	
			
		foreach ($pesquisa as $valor):
		$senha = $valor['senha_cliente'];
		endforeach;
		
		    if ($senha_conf == $senha) {
	
	        $sql = "DELETE FROM cad_cliente WHERE id_cliente= '$id'";
		    $instrucao = mysqli_query($conexao,$sql);
	
	            if (!$instrucao) {
		        die(' Query Inválida: ' . mysqli_error($conexao));
	            } else {
		          mysqli_close($conexao);
		         echo "Removido com Sucesso!";
				 header('Location: logout.php');
		         exit;
	            }
		    } else {
				echo "<h2>Senha incorreta!</h2>";
			}
        }
	
	
?>