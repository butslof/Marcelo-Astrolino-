<!doctype html>
<html class="no-js" lang="pt" dir="ltr">
  <head>
      
    <title>Marcelo Astrolino - Desenvolvimento Humano - Sobre</title>

    <?php include 'head.php'; ?>
    <style>
    h1{font-size:60px;color:#15AF98;font-weight:bold;}
    .bg-topo{background:url(imgs/banner/bg-sobre.jpg) no-repeat center ;background-size: cover;height: 882px;padding-top:157px;}
    .coach{border-radius: 20px;}
    .marcador{color:#15AF98;line-height: 37px;}
    /* Small only */
    @media screen and (max-width: 39.9375em) {
      /* .banner-top-home{ background:url(imgs/banner/banner-topo-home-mob.jpg) no-repeat center ;background-size: cover;    height: 569px;} */
    .bg-topo{padding-top: 45px;height: 980px;}
    }
    /* Medium and up */
    @media screen and (min-width: 40em) {

    }

    /* Medium only */
    @media screen and (min-width: 40em) and (max-width: 63.9375em) {
        .bg-topo{padding-top: 65px;height: 1050px;}

    }

    /* Large and up */
    @media screen and (min-width: 64em) {


        

    }

    /* Large only */
    @media screen and (min-width: 64em) and (max-width: 74.9375em) {
    }
    </style>
  </head>
  <body>
      
  <?php include 'topo.php'; ?>
  <section class="row expanded bg-topo" data-aos="fade-up" data-aos-duration="3000">
      <article class="row">
           <div class="column large-6 medium-12 small-12">
                <h1>SOBRE</h1>
                <ul>
                    <li class="marcador"><span class="text-li">Formado em Comunicação Social pela Universidade Anhembi Morumbi;</span></li>
                    <li class="marcador"><span class="text-li">Ator profissional pela CAL- RJ;</span></li>
                    <li class="marcador"><span class="text-li">Master Coach com formação em PNL- Programação;</span></li>
                    <li class="marcador"><span class="text-li">Neurolinguística pelo INAP- RJ;</span></li>
                </ul>
                <p>Especializou -se no Coaching Esportivo e Psicologia Esportiva para atletas de alto rendimento, criou e elaborou uma metodologia própria e inovadora que tem como objetivo desenvolver Inteligência emocional, estratégica e técnica, exclusivamente em atletas de Futebol.</p>
          </div>
          <div class="column large-6 medium-12 small-12">
              <figure>
                  <img src="imgs/coach.jpg" class="coach">
              </figure>
          </div>
      </article>
  </section>
  <div id="trava"></div>

    <?php include 'footer.php'; ?>

  </body>
</html>
