<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doceria Paraty</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- imagem topo -->
    <section id="img-topo">
        <img class="img-responsive" src="images/header.jpg" alt="">
    </section>

    <!-- Topo -->
    <nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pd-0">
                    <div class="block">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Menu Mobile -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    
                                    <!-- logotipo -->
                                    <a class="navbar-brand" href="#">
                                        <img class="img-responsive logo" src="images/logo.png" alt="Logotipo">
                                    </a>

                                </div>

                                <!-- Navegação -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right" id="top-nav">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a id="QuemSomos" href="#">Quem Somos</a></li>
                                        <li><a id="Localizacao" href="#">Localização</a></li>
                                        <li><a id="Contato" href="#">Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="conteudo">

      <?php
        include 'pages/home.php';
      ?>

    </div>

   <!-- Informações e Novidades -->
   <section id="painel-inferior">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow">
                        <h3>NOSSOS <span>CONTATOS</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                    <h4><i class="fa fa-phone"></i>Telefones</h4>
                                    <p>(24) 3072-6859 | (24) 98070-7023</p>

                                </li>
                                <li>
                                    <h4><i class="fa fa-map-marker"></i>Endereço</h4>
                                    <p>Rodovia Paraty-Cunha S/N - Sítio BeiraMata</p>
                                </li>
                                <li>
                                    <h4><i class="fa fa-envelope"></i>e-mail</h4>
                                    <p>doceriaparaty@sitiobeiramata.com.br</p>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block wow">
                        <h3>ÚLTIMAS <span>NOVIDADES</span></h3>
                        <div class="produtos">
                            <ul>
                                <li>
                                    <h4><a href="#">Junho/2021</a></h4>
                                    <p>Chegou o mês das Festas Juninas. Ainda não podemos dançar quadrilha juntos, mas
                                        podemos pedir um delicioso Pé de Moleque em casa, fresquinho e com sabor
                                        irresistível.</p>
                                </li>
                                <li>
                                    <h4><a href="#">Maio/2021</a></h4>
                                    <p>Nesse mês, estamos com promoções incríveis em nossa linha de Pamonhas de Milho
                                        Verde. Confira!</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block wow">
                        <div class="galeria">
                            <h3>GALERIA DE <span>FOTOS</span></h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="images/galeria/foto-doce-1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/galeria/foto-doce-2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/galeria/foto-doce-3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="images/galeria/foto-doce-4.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-media-link">
                            <h3>NOSSAS <span>REDES SOCIAIS</span></h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer id="rodape">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>&copy; 2021 | WALLACE MELO</br>R.A 20067548-5</br>MATERIAL DE AVALIAÇÃO PRÁTICA DE
                            APRENDIZAGEM</br>CURSO SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET</br><a
                                href="https://www.unicesumar.edu.br">Unicesumar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

