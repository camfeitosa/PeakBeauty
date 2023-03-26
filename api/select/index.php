<?php session_start(); 
	include('proteger.php');
			
	if(!isset($_SESSION)) {
		session_start();
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Agendamento</title>	
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="./css_agend/agend.css">
		<link rel="icon" type="imagem/png" href="imagem/icon.png" />
    	<script>
			function link(){
				window.location = "../index.html";
			}
		</script>

		<style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
	</head>
	<body>
	 <header>
            <img src="../img/logo.png" class="logo"alt="logo" onclick="link()">
            <nav> 
                <ul class="nav_links">
                    <li><a href="index.php">Agendar</a></li>
                    <li><a href="../conexao3/login/minha_conta.php">Minha Conta</a></li>
                    <li><a href="../conexao3/login/contato.php">Contato</a></li>
                </ul>
            </nav>
            <a class="cta" href="../conexao3/index.html"><button class="botao">ENTRAR</button></a>
        </header> 
		
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Agende seu horário</h1>
				<p>E tenha uma experiência incrível com Peaky Beauty</p>
			</div>
			
			<?php include_once("../conectaBD.php"); 
				if(!empty($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			
			<form class="form-horizontal" method="POST" action="salvar_post.php">
				<div class="form-group">
					<label class="col-sm-2 control-label">Serviços:</label>
					<div class="col-sm-10">
						<select class="form-control" name="id_cargo" id="id_cargo">
							<option class="" value="">Escolha a especialidade</option>
							<?php
								$result_cat_post = "SELECT * FROM cargo ORDER BY nome";
								$resultado_cat_post = mysqli_query($conexao, $result_cat_post);
								while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
									echo '<option value="'.$row_cat_post['id_cargo'].'">'.$row_cat_post['nome'].'</option>';
								}
							?>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<span class="carregando">Aguarde, carregando...</span>					
						<select class="form-control" name="id_sub_cargo" id="id_sub_cargo">
							<option class="" value="">Escolha um serviço</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Dia: </label>
					<div class="col-sm-10">
						<!--<span class="carregando">Aguarde, carregando...</span>-->			
						<input type="date" min="2022-11-26" max="2023-03-31"  class="form-control" name="id_dia" id="id_dia" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Horário: </label>
					<div class="col-sm-10">
						<!--<span class="carregando">Aguarde, carregando...</span>-->						
						<input type="time"  min="09:00" max="21:00" class="form-control" name="id_hora" id="id_hora" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Profissional: </label>
					<div class="col-sm-10">
						<span class="carregando">Aguarde, carregando...</span>					
						<select class="form-control" name="id_sub_pro" id="id_sub_pro">
							<option value="">Escolha um profissional</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit"  class="botao1" name="Agendar" value="Agendar">
					</div>
				</div>
			</form>
		
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	
		<script type="text/javascript">
		$(function(){
			$('#id_cargo').change(function(){
				if( $(this).val() ) {
					$('#id_sub_cargo').hide();
					$('.carregando').show();
					$.getJSON('sub_categorias_post.php?search=',{id_cargo: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha um serviço</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id_esp + '">' + j[i].nome_esp + '</option>';
						}	
						$('#id_sub_cargo').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#id_sub_cargo').html('<option value="">–Escolha um serviço–</option>');
				}
			});
		});
		</script>


<script type="text/javascript">
		$(function(){
			$('#id_cargo').change(function(){
				if( $(this).val() ) {
					$('#id_sub_pro').hide();
					$('.carregando').show();
					$.getJSON('sub_categorias_post2.php?search=',{id_cargo: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha um profissional</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id_pro + '">' + j[i].nome_pro + '</option>';
						}	
						$('#id_sub_pro').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#id_sub_pro').html('<option value="">–Escolha um profissional–</option>');
				}
			});
		});
		</script>

</body>
</html>