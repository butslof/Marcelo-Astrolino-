<?php

if( !empty ($_SESSION["newsession"]) ){
    $mensagem=  $_SESSION["newsession"];
    echo"<div data-alert class='alert-box' style='    background-color:#15af98; color: white;text-align: center;font-weight: bold;font-size: 22px;padding: 28px;'>
            $mensagem
            </div>" ;
    unset($_SESSION["newsession"]);
}
// $url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
<header >
<div data-sticky-container>
    <div data-sticky data-options="marginTop:0;" id="verificar" data-top-anchor="trava" data-aos="fade-up" data-aos-duration="2000">
    <div class="top"  data-aos="fade-up">
            <div class="row row-nav">
                    <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="large">
                        <div class="column small-6">
                            <div class="title-bar-title">
                                <figure>
                                    <a href="/astrolino/"><img src="imgs/logos/logo-escuro.png"></a>
                                </figure>   
                            </div>
                        </div>
                        <div class="column small-6">
                             <button class="icon-menu float-right" type="button" data-toggle="example-menu"></button>
                        </div>                                                                                      
                    </div>        
                <div class="top-bar" id="example-menu">
                    <div class="box-logo-desk">
                        <figure id="logo_topo_home">
                            <a href="/astrolino/"><img src="imgs/logos/logo.png"></a>
                        </figure>
                        <figure id="logo_topo">
                            <a href="/astrolino/"  ><img src="imgs/logos/logo-escuro.png"></a>
                        </figure>
                    </div>
                    <ul class="vertical medium-horizontal dropdown menu "  data-responsive-menu="accordion medium-dropdown">
                        <li class="menu-top" ><a href="sobre.php">SOBRE</a><span class="divisor" ></span></li>
                        <li class="menu-top" ><a href="profissional.php">PROFISSIONAL</a><span class="divisor" ></span></li>
                        <li class="menu-top" ><a href="pessoal.php">PESSOAL</a><span class="divisor" ></span></li>
                        <li class="menu-top" ><a href="esportes.php">ESPORTES</a><span class="divisor" ></span></li>
                        <li class="menu-top" ><a href="#">PALESTRAS</a><span class="divisor" ></span></li>
                        <li class="menu-top" ><a href="#contato" data-smooth-scroll>CONTATO</a></li>
                        <li class="menu-top redes-menu" ><a href="#"><img src="imgs/icons/instagram.png"></a></li>
                        <li class="menu-top redes-menu" ><a href="#"><img src="imgs/icons/linkedin.png"></a></li>
                        <li class="menu-top redes-menu" ><a href="#"><img src="imgs/icons/facebook.png"></a></li>
                    </ul>         
                </div>
            </div>
        </div>
    </div>
</div>
</header>
