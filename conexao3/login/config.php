

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peak Beauty - Configurações</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/agend.css">
    <link rel="stylesheet" href="../css/cliente.css">
    <link rel="stylesheet" href="../css/config.css">
    <link rel="icon" type="imagem/png" href="../../img/icon.png"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

    <script>
        function link(){
            window.location = "../..conexao3/index.html";
        }
    </script>
    </head>
    <body>
        <!--Menu-->
        <header>
            <img src="../../img/logo.png" class="logo"alt="logo" onclick="link()">
            <nav> 
                <ul class="nav_links">
                    <li><a href="../../select/index.php">Agendar</a></li>
                    <li><a href="./minha_conta.php">Minha Conta</a></li>
                    <li><a href="./contato.php">Contato</a></li>
                </ul>
            </nav>
            <a class="cta" href="../index.html"><button class="botao">ENTRAR</button></a>

        </header>
        <!--Fim Menu-->

        <!--Menu Cliente-->
         <div class="cliente">
            <div class="cnt-left">
                <div class="clt-home">
                    <img src="../../img/login.png" id="login">
                    <div class="clt">
                    <h2 class="clt-h2">
                            <?php 
                                include('nome.php');
                                        
                                if(!isset($_SESSION)) {
                                    session_start();
                                }
                            ?>
                        </h2>
                        <p class="clt-p" style="margin-left: 10px;">
                        <?php 
                                include('email.php');
                                        
                                if(!isset($_SESSION)) {
                                    session_start();
                                }
                            ?></p>
                    </div>
                </div>
                <a href="./reservas.php" style="color: #2b2b2b;">
                    <div class="clt-reservas">
                        <h2 class="clt-h2">Reservas</h2>
                    </div>
                </a>
                <a href="./config.php" style="color: #2b2b2b;">
                    <div class="clt-config" style="border-left: solid 5px #8b660e;">
                        <h2 class="clt-h2">Configurações da Conta</h2>
                    </div>
                </a>
                <a href="./delet.php" style="color: #2b2b2b;">
                    <div class="clt-delet">
                        <h2 class="clt-h2">Deletar Conta</h2>
                    </div>
                </a>
                <a href="logout.php" style="color: #2b2b2b;">
                    <div class="clt-sair">
                        <h2 class="clt-h2">Sair</h2>
                    </div>
                </a>
            </div>
            <div class="cnt-rigth">
                <div class="clt-text">
                <?php
                include('proteger.php');
                ?>
                <div class="container">
          
		<form action="" method="POST" class="wrapper" >
			<!-- usa campo pesquisado para exibir em placeholder -->
                        <?php
            include('edit.php');
            ?>
			<?php foreach ($pesquisa as $valor): ?>
				
				
				<div class="input-data wrapper">
              <!--  <h1> Edite as informações da sua conta </h1><br> -->
                
                <label>Nome</label>
					<input type="text" name="nome" id="username" class="text-input" required="" placeholder="<?= $valor['nome_cliente']; ?>"/><br/>
					
					<div class="underline"></div>
            		
         		</div><br><br>

				 <div class="input-data wrapper">
                 <label>Email</label>
					<input type="text" name="email" class="text-input" required="" placeholder="<?= $valor['email_cliente']; ?>"/><br/>
					<div class="underline"></div>
            		
				</div><br><br>

				<div class="input-data wrapper">
                <label>Celular</label>
					<input type="text" name="telefone" class="text-input" id="cel" required="" placeholder="<?= $valor['tel_cliente']; ?>"/><br/>
					<div class="underline"></div>
            		
				</div><br><br>

				<script>
					$("#cel").mask("(99) 99999-9999");
				</script>

				<div class="input-data wrapper">
                <label>Nova senha</label>
					<input type="password"class="text-input" required="" placeholder="********" name="senha"/><br/>
					<div class="underline"></div>
            		
			</div><br><br>
               
					<h1>Edite as informações da sua conta</h1><br>
                 
			 <div class="input-data wrapper">
             <label>Senha atual</label>
					<input type="password" class="text-input" required="" placeholder="********"  name="senha_conf"/><br/>		
					<div class="underline"></div>
            		
					<br><br>
					<!-- <a href="">Esqueceu sua senha?</a>-->
				</div><br><br>

				<?php endforeach; ?>	
				<br/><br/><button class="b" type="submit" name="alterar" value="Alterar">Alterar</button>
		</form>
	</div>	
		<br>

                </div>
            </div>
        </div>
        <!--Fim Menu Cliente-->

         <!--Rodapé-->
         <footer class="footer-distributed">

<!--Esquerda-->
    <div class="footer-left">
        <img src="../../img/icon.png" class="icon-footer" alt="icon" onclick="link()">
        <img src="../../img/logo.png" class="logo-footer" alt="logo" onclick="link()">
        <p class="footer-links">
            <a href="../../index.html">Início</a>
            &nbsp;|&nbsp;
            <a href="../../pages/sobrenos.html">Sobre Nós</a>
            &nbsp;|&nbsp;
            <a href="../../pages/contato.html">Contato</a>
        </p>
        <p class="footer-company-name">© Copyright 2022<strong> PeakBeauty </strong>Todos os direitos reservados.</p>
    </div>
<!--Fim Esquerda-->

<!--Centro-->
    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Rua Amapá, 253 - Recanto Silvestre</span>
                Santana de Parnaíba - SP</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>+55 11 98894-5603</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:peak.beauty.pb@gmail.com?subject=Olá">peak.beauty.pb@gmail.com</a></p>
        </div>
    </div>
<!--Fim Centro-->

<!--Direita-->
    <div class="footer-right">
        <p class="footer-company-about">
            <span>Sobre o Site</span>
            Projeto de site criado para fins pedagógicos que envolve os componentes do curso técnico de Informática para Internet.
        </p>
        <div class="footer-icons">
            <a href="https://twitter.com/peakkbeauty" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/peakb.eauty/" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
<!--Fim Direita-->
</footer>
<!--Fim Rodapé-->

</body>
</html>