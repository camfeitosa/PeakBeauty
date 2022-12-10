<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Peak Beauty - Minha Conta</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/agend.css">
    <link rel="stylesheet" href="../css/cliente.css">
    <link rel="icon" type="imagem/png" href="../../img/icon.png"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script>
        function link(){
            window.location = "../../index.html";
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
                    <li><a href="./minha_conta.php" style="color: #e3ae36;">Minha Conta</a></li>
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
                    <h2 class="clt-h2"> <?php session_start(); 
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
                            ?> </p>
                    </div>
                </div>
                <a href="./reservas.php" style="color: #2b2b2b;">
                    <div class="clt-reservas">
                        <h2 class="clt-h2">Reservas</h2>
                    </div>
                </a>
                <a href="./config.php" style="color: #2b2b2b;">
                    <div class="clt-config">
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
                    <img src="../../img/home.png" id="home">
                    <h1 class="clt-h1">Página Inicial do Perfil</h1>
                    <p class="clt-p">Aqui você verá o resumo do seu perfil</p>
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
                        <a href="./contato.php">Contato</a>
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