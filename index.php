<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <?php
      include_once ('pages/header.php'); 
    ?>
  	<link href="agency.css" type="text/css" rel="stylesheet">


  <title>Sobre mim - Weslei</title>

  </head>

  <body id="page-top">

    <!-- Barra navegacao -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Sobre mim</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Exp. Profissional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase"> Bem vindo ao meu perfil! </div>
          
        </div>
      </div>
    </header>


    <!-- Exp Profissional -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">  Experiência Profissional </h2>
            <h3 class="section-subheading text-muted">Um breve resumo da minha carreira profissional.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Auxiliar Administrativo</h4>
              <p class="text-muted">Ambiente Escolar</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Controle de Credencial</h4>
              <p class="text-muted">Comic Con Experience 2017</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Analista de Suporte</h4>
              <p class="text-muted">Estágio na area de TI</p>
            </div>
          </div>
          </div>
        </div>
    </section>

    <!-- Sobre mim -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Sobre mim </h2>
            <h3 class="section-subheading text-muted">Conheça um pouco sobre minha pessoa :D .</h3>
          </div>
        </div>
      </div>
      <ul class="slider">
            <li>
              <input type="radio" id="slide1" name="slide" checked>
              <label for="slide1"></label>
              <img src="img/1.jpg" />
            </li>
            <li>
              <input type="radio" id="slide2" name="slide">
              <label for="slide2"></label>
              <img src="img/2.jpg" />
            </li>
            <li>
              <input type="radio" id="slide3" name="slide">
              <label for="slide3"></label>
              <img src="img/3.jpg" />
            </li>
          </ul>
          <h3 class="section-sobremim text-muted"><br> Meu sonho é trabalhar com eventos na área de jogos eletrônicos.<br> 
          Desde pequeno jogando grande títulos da indústria de "games", pretendo divulgar isso.<br>
           Um amante de pizza também.
        
        </h3>     
    </section>

    <!-- Contato -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contato</h2>
            <h3 class="section-subheading"> 
            <font color="white"><b>E-mail: </b>wesleii.silvaa@gmail.com </font><br>
            <font color="white"><b>Facebook: </b>facebook.com/weslei.luizdasilva </font><br>
            <font color="white"><b>Celular: </b>(12) 99110-5859 </font><br>
          </h3>   

          </div>
        </div>
      </div>
    </section>

    <!-- roda-pé -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <span class="copyright">&copy; <?php echo date('Y'); ?>. Template original retirado de htpps://startbootstrap.com/template-overviews/agency/</span>          
          </div>          
        </div>
      </div>
    </footer>

    <!-- Exp Profissional Modelos -->

    <!-- Modelo 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  
                  <h2 class="text-uppercase">Auxiliar Administrativo</h2>
                  <p class="item-intro text-muted">Ambiente Escolar.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <p>
                    Fazendo serviços administrativos, auxilio na rotina da creche , mantendo documentação, ambiente e relação entre pais/escola em ordem.<br>
                    Em 2017, também trabalhei como Inspetor de condução escolar, mantendo a segurança das crianças durante a estrada.
                  </p>
                  <ul class="list-inline">
                    <li>Data: março 2017 / Atual</li>
                    <li>Local: Ambiente Escolar</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modelo 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  
                  <h2 class="text-uppercase">Controle de<br>Credencial</h2>
                  <p class="item-intro text-muted">Comic Con Experiencie 2017</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>
                    Do dia 06 a 10 de dezembro de 2017, participei do evento CCXP 2017. Tinha como função fazer o 
                    controle da credencial de quem vinha ao evento. Tal experiência sera inesquecivel,
                    uma vez que sonho trabalhar com eventos de grande porte.
                  </p>
                  <ul class="list-inline">
                    <li>Data: Dezembro 2017</li>
                    <li>Local: CCXP 2017</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modelo 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                 
                  <h2 class="text-uppercase">Analista de suporte</h2>
                  <p class="item-intro text-muted">Estágio de TI</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>
                    Durante o ano de 2016, tive minha primeira experiência profissional na area de TI.
                    Fui analista de suporte de uma micro empresa (Custom Data).
                    Tal experiência não foi das melhores, digamos que fui "funcionário pela metade do preço".
                  </p>
                  <ul class="list-inline">
                    <li>Data: Jan/Nov 2016</li>
                    <li>Local: Custom Data</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


 <?php
    include_once ('pages/js.php');
  ?>

  </body>

</html>
