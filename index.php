<!doctype html>
<html class="no-js" lang="pt" dir="ltr">
  <head>
      
    <title>Marcelo Astrolino - Desenvolvimento Humano</title>
    <?php include 'head.php'; ?>
    <style>
    /* menu scroll */
    div.is-stuck div.top, div.is-stuck div.top-bar, div.is-stuck div.top-bar ul{background-color:white !important}
    div.is-stuck div.top{-webkit-box-shadow: -2px 10px 18px -8px rgba(0,0,0,0.57);-moz-box-shadow: -2px 10px 18px -8px rgba(0,0,0,0.57);box-shadow: -2px 10px 18px -8px rgba(0,0,0,0.57);}
    #example-menu ul li a {color:white;font-size: 16px;text-transform: uppercase;}
    #example-menu ul li a:hover{color:#15AF98;}
    div.is-stuck div.top-bar div.box-logo-desk figure a img{width: 190px;}
    div.is-stuck div#example-menu.top-bar{height:56px;}
    div.is-stuck div.top-bar ul.vertical.medium-horizontal.menu.dropdown{height:17px;}
    div.is-stuck div.top-bar ul.vertical.medium-horizontal.menu.dropdown li{margin-top: -30px;}
    div.is-stuck div.top-bar ul.vertical.medium-horizontal.menu.dropdown li{margin-top: -28px;}
    div.is-stuck div.top-bar ul.vertical.medium-horizontal.menu.dropdown li a{font-size: 13px !important;color:#000000 !important;}
    div.is-anchored div.top-bar div.box-logo-desk #logo_topo{display:none;}
    div.is-stuck div.top-bar div.box-logo-desk #logo_topo{display:block;}
    div.is-anchored div.top-bar div.box-logo-desk #logo_topo_home{display:block;}
    div.is-stuck div.top-bar div.box-logo-desk #logo_topo_home{display:none;}
    div.is-stuck div.top-bar ul.vertical.medium-horizontal.menu.dropdown li a:hover{color:#15AF98 !important;}
    div.is-stuck div.top-bar ul.vertical.medium-horizontal.menu.dropdown li .divisor{ color:#000000 !important;   margin-top: -26px !important;}
    div.is-stuck div.top-bar ul.vertical.medium-horizontal.menu.dropdown    .redes-menu{display:none;}
    /* fim menu scroll */

    h1{font-weight:bold;}
    .btn-conheca{color:white;margin-left:3px;font-weight:bold;background-color:#15AF98;padding:10px;}
    .btn-conheca:hover{color:#004c45;}
    .btn-conheca span{margin-right:10px;}
    .btn-descer{content: url(imgs/icons/icone-baixo.png);}
    .btn-descer:hover {content: url(imgs/icons/icone-baixo-green.png);}
    h2{font-size:60px;color:#15AF98;font-weight:bold;margin-top:164px;}
    h3{color:#15AF98;font-weight:bold;}
    .box-txt-servicos span, ul.servicos li{color:#000000;font-size: 21px;line-height: 40px;}
    .servicos{margin-top:47px;margin-bottom:93px;}
    .box-txt-servicos{margin-bottom:90px;}
    .btn-servicos{color:white;background-color:#15AF98;font-weight:bold;padding:7px !important;width: 129px;border-radius: 8px;font-size: 20px;margin-bottom:42px;}
    .btn-servicos:hover{background-color:#000000;}
    .box-servicos{padding: 22px;border-radius: 14px;-webkit-box-shadow: 1px 5px 16px -4px rgba(74,74,74,1);-moz-box-shadow: 1px 5px 16px -4px rgba(74,74,74,1);box-shadow: 1px 5px 16px -4px rgba(74,74,74,1);}
    .box-servicos figure{margin-top: -74px;margin-bottom: 36px;}
    .background-palestras{  background:url(imgs/banner/banner-palestras.jpg) no-repeat center ;background-size: cover;height:1000px;}
    .line-palestras{margin-top:157px;}
    .background-btn-palestra-1, .background-btn-palestra-2, .background-btn-palestra-3, .background-btn-palestra-4{max-width:511px;padding:26px;padding-right: 0;}
    .background-btn-palestra-1 p, .background-btn-palestra-2 p, .background-btn-palestra-3 p, .background-btn-palestra-4 p{margin-top: 17px;font-size: 25px;}
    
    .background-btn-palestra-1{background:url(imgs/icons/btn-palestra-1.jpg) no-repeat center}
    .background-btn-palestra-2{background:url(imgs/icons/btn-palestra-2.jpg) no-repeat center}
    .background-btn-palestra-3{background:url(imgs/icons/btn-palestra-3.jpg) no-repeat center}
    .background-btn-palestra-4{background:url(imgs/icons/btn-palestra-4.jpg) no-repeat center}
    .title-palestra{font-size:60px;font-weight:bold;}
    .bg-depoimentos{background-color:#707070;padding-top: 41px;padding-bottom: 41px;}
    .autor-depoimento{display:block;font-size: 13px;}
    .depoimento{padding-right: 34px;padding-left: 34px;}
    .aspas{width:54px !important;}
    /* Small only */
    @media screen and (max-width: 39.9375em) {
      .banner-top-home{ background:url(imgs/banner/banner-topo-home-mob.jpg) no-repeat center ;background-size: cover;    height: 569px;}
      h1{background-color: #0000007d;padding: 10px;    font-size: 29px;margin-top: 179px;}
      .btn-descer{margin-top: 118px;}
      .box-servicos{margin-bottom: 57px !important;}
      .no-bold{font-size:27px;}
      h2{font-size: 57px;}
      .servicos{text-align: center;}
      .background-btn-palestra-1 p a img, .background-btn-palestra-2 p a img, .background-btn-palestra-3 p a img, .background-btn-palestra-4 p a img{margin-top: -9px;max-width: 58px;}
      .background-btn-palestra-1 p, .background-btn-palestra-2 p, .background-btn-palestra-3 p, .background-btn-palestra-4 p{margin-top: 17px;font-size: 20px;}
      .background-palestras{height: 402px;padding-top:80px;}
      .line-palestras{margin-top:0px;}
      .title-palestra {font-size: 44px;}
      h2{margin-top: 66px;}
    }
    /* Medium and up */
    @media screen and (min-width: 40em) {

    }

    /* Medium only */
    @media screen and (min-width: 40em) and (max-width: 63.9375em) {
      .banner-top-home{ background:url(imgs/banner/banner-topo-home-mob.jpg) no-repeat center ;background-size: cover;height: 569px;}
      h1{background-color: #0000007d;padding: 10px;    font-size: 29px;margin-top: 179px;}
      .btn-descer{margin-top: 160px;}     
      .box-servicos{margin-bottom: 57px !important;}
      .background-btn-palestra-1 p a img, .background-btn-palestra-2 p a img, .background-btn-palestra-3 p a img, .background-btn-palestra-4 p a img{    margin-top: -49px;max-width: 99px;}
      .box-servicos{max-width: 324px;}
      .line-palestras {margin-top: 17px;}
      h2{margin-top: 76px;}
      .background-palestras{height: 427px;padding-top: 91px;}

    }

    /* Large and up */
    @media screen and (min-width: 64em) {
      .banner-top-home{ background:url(imgs/banner/banner-topo-home.jpg) no-repeat center ;background-size: cover;height:1000px;}
      .banner-top-home{margin-top: -112px;}
      .top, .top-bar, .top-bar ul{background-color:transparent;}
      h1{font-size:60px;margin-top: 334px;}
      .btn-descer{margin-top: 333px;}
      #logo{background:url(imgs/logos/logo.png);}
      .box-servicos{max-width: 324px;}
      .background-btn-palestra-1, .background-btn-palestra-2, .background-btn-palestra-3, .background-btn-palestra-4{margin-left:23px;}
      .line-btn-palestras{margin-top: 162px;}
      .background-btn-palestra-1 p a img, .background-btn-palestra-2 p a img, .background-btn-palestra-3 p a img, .background-btn-palestra-4 p a img{    margin-top: -49px;max-width: 99px;}
      .background-palestras{width: 48%;padding-top: 362px;}
      .depoimento p{font-size: 26px;}

        

    }

    /* Large only */
    @media screen and (min-width: 64em) and (max-width: 74.9375em) {
    }
    </style>
  </head>
  <body>
      
  <?php include 'topo.php'; ?>
  <section class="row expanded banner-top-home" data-aos="fade-up" data-aos-duration="3000" >
    <article class="row">
        <div class="column large-12 medium-12 small-12">
            <h1>
                <span class="no-bold">DESENVOLVIMENTO</span><br>PESSOAL, PROFISSIONAL<br>E ESPORTIVO.
            </h1>
            <a href="#servicos" data-smooth-scroll class="btn-conheca">CONHEÇA</a>
        </div>
        <div class="column large-12 medium-12 small-12">
            <div class="text-center">
              <a href="#servicos" data-smooth-scroll class="btn-descer"></a>
            </div>
        </div>
    </article>
  </section>
  <div id="trava"></div>
  <section class="row" >
    <article class="column large-12 medium-12 small-12 text-center">
      <h2 id="servicos">SERVIÇOS</h2>
      <div class="box-txt-servicos columns large-5 small-centered" >
        <span>
          Desenvolva as habilidades necessárias para
          promover e administrar melhor a sua vida pessoal
          seu negócio e mais: 
        </span>
      </div>
    </article>
  </section>
  <section class="row small-up-1 medium-up-2 large-up-3 text-center">
    <article class="column column-block" data-aos="flip-left">
        <div class="box-servicos">
          <figure>
            <img src="imgs/icons/icon-profissional.png">
          </figure>
          <h3>PROFISSIONAL</h3>
          <ul class="no-bullet text-left servicos">
            <li>- Preparação;</li>
            <li>- Foco;</li>
            <li>- Versatilidade.</li>
          </ul>
          <div class="text-center">
            <a href="profissional.php" class="button btn-servicos">Saiba mais</a>
          </div>
        </div>
    </article>
    <article class="column column-block" data-aos="flip-left">
        <div class="box-servicos">
          <figure>
            <img src="imgs/icons/icon-pessoal.png">
          </figure>
          <h3>PESSOAL</h3>
          <ul class="no-bullet text-left servicos">
            <li>- Autoconhecimento;</li>
            <li>- Inteligência Emocional;</li>
            <li>- Evolução.</li>
          </ul>
          <div class="text-center">
            <a href="pessoal.php" class="button btn-servicos">Saiba mais</a>
          </div>
        </div>
    </article>
    <article class="column column-block" data-aos="flip-left">
        <div class="box-servicos">
          <figure>
            <img src="imgs/icons/icon-esportes.png">
          </figure>
          <h3>ESPORTES</h3>
          <ul class="no-bullet text-left servicos">
            <li>- Raciocínio Lógico;</li>
            <li>- Desempenho;</li>
            <li>- Tomada de Decisão.</li>
          </ul>
          <div class="text-center">
            <a href="esportes.php" class="button btn-servicos">Saiba mais</a>
          </div>
        </div>
    </article>
  </section>
  <section class="row expanded line-palestras">
    <article class="column large-6 medium-12 small-12 background-palestras">
      <div class="row">
        <div class="columns large-8 large-centered">
          <h4 class="title-palestra">PALESTRAS</h4>
          <p>
            Especializadas e personalizadas para atender<br>
            a cada necessidade, para ajudar, <br>
            informar e preparar. 
          </p>
          <a href="#" class="btn-conheca">SAIBA MAIS</a>
        </div>
      </div>
    </article>
    <article class="column large-6 medium-12 small-12 line-btn-palestras" >
      <div class="row" data-aos="fade-up" data-aos-duration="2000">
          <div class="background-btn-palestra-1">
            <p>
              COMO PROSPERAR<br>
              NOS NEGÓCIOS?
              <a href="#"><img src="imgs/icons/btn-seta.jpg" class="float-right"></a>
            </p>
          </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-duration="2000">
        <div class="background-btn-palestra-2">
          <p>
            APRENDA A SER<br>
            UMA PESSOA MELHOR
            <a href="#"><img src="imgs/icons/btn-seta.jpg" class="float-right"></a>
          </p>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-duration="2000">
        <div class="background-btn-palestra-3">
          <p>
            DICAS PARA TER<br>
            MAIS DISCIPLINA
            <a href="#"><img src="imgs/icons/btn-seta.jpg" class="float-right"></a>
          </p>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-duration="2000">
        <div class="background-btn-palestra-4">
          <p>
            DICAS PARA UMA<br>
            MELHOR POSTURA
            <a href="#"><img src="imgs/icons/btn-seta.jpg" class="float-right"></a>
          </p>
        </div>
      </div>
    </article>
  </section>
  <section class="row expanded bg-depoimentos">
     <div class="row">
        <article class="columns small-12 medium-12 large-11 small-centered large-centered">
          <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="depoimento" class="float-center">
                  <p class="text-center">
                      <img src="imgs/icons/aspas-left.png" class="aspas float-left"><br>
                      Participar do treinamento com o Marcelo foi um processo de descoberta!<br>
                      Durante as sessões eu tomei consciência do que eu queria para a minha vida.
                      <span class="autor-depoimento text-center">Gabriel, 24 anos - Designer Gráfico</span>
                      <img src="imgs/icons/aspas-right.png" class="aspas float-right">
                  </p>
                </div>
              </div>
              <div class="item">
                <div class="depoimento" class="float-center">
                  <p class="text-center">
                      <img src="imgs/icons/aspas-left.png" class="aspas float-left"><br>
                      Participar do treinamento com o Marcelo foi um processo de descoberta!<br>
                      Durante as sessões eu tomei consciência do que eu queria para a minha vida.
                      <span class="autor-depoimento text-center">Gabriel, 24 anos - Designer Gráfico</span>
                      <img src="imgs/icons/aspas-right.png" class="aspas float-right">
                  </p>
                </div>
              </div>
              <div class="item">
                <div class="depoimento" class="float-center">
                  <p class="text-center">
                    <img src="imgs/icons/aspas-left.png" class="aspas float-left"><br>
                      Participar do treinamento com o Marcelo foi um processo de descoberta!<br>
                      Durante as sessões eu tomei consciência do que eu queria para a minha vida.
                      <span class="autor-depoimento text-center">Gabriel, 24 anos - Designer Gráfico</span>
                      <img src="imgs/icons/aspas-right.png" class="aspas float-right">
                  </p>
                </div>
              </div>
          </div>
        </article>
     </div>
  </section>
  
<?php include 'footer.php'; ?>
<script>

  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true,
              dots:false
          },
          600:{
              items:1,
              nav:true,
              dots:false
          },
          1000:{
              items:1,
              nav:true,
              loop:false,
              dots:false
          }
      }
  })


</script>
  </body>
</html>
