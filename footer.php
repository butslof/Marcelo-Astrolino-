    <footer class="row expanded" id="contato">
        <section class="row">
            <article class="column large-12 text-center">
                <h5 class="title-contato">CONTATO</h5>
            </article>
        </section>
        <section class="row line-form-footer">
            <article class="column large-4">
                <h6 class="subs-contato">Informações</h6>
                <span><img src="imgs/icons/EmailIcon.png" class="icons-contato"><a href="mailto:contato@marceloastrolino.com.br" class="links-contato">contato@marceloastrolino.com.br</a></span><br><br>
                <span><img src="imgs/icons/PhoneIcon.png" class="icons-contato"><a href="tel:13 99781-3737" class="links-contato">13 99781-3737</a></span>
            </article>
            <article class="column large-7 line-form">
                <h6 class="subs-contato">Formulário de contato</h6>
                <span>Preencha abaixo e em breve entraremos em contato.</span><br><br>
                <form action="envia-contato.php" method="POST" data-abide novalidate>
                    <div class="columns large-6 coluna-form">
                        <input type="text" name="nome" placeholder="Nos diga o seu nome*" required>
                        <span class="form-error">Por favor preencha o campo.</span>	
                    </div>
                    <div class="columns large-6 coluna-form">
                        <input type="email" name="email" placeholder="Deixe aqui o seu e-mail*" required pattern="email">
                        <span class="form-error">Por favor preencha o campo ou verifique o endereço digitado.</span>
                    </div>
                    <div class="columns large-6 coluna-form">
                        <input type="text" name="telefone" placeholder="Qual o seu telefone?*" required pattern="integer">
                        <span class="form-error">Por favor preencha o campo ou verifique o endereço digitado.</span>
                    </div>
                    <div class="columns large-6 coluna-form">
                        <input type="text" name="assunto" placeholder="Assunto*" required>
                        <span class="form-error">Por favor preencha o campo.</span>	
                    </div>
                    <div class="columns large-12 coluna-form">
                        <textarea name="mensagem" required placeholder="Qual a sua mensagem?*" required></textarea>
                        <span class="form-error">Por favor preencha o campo.</span>	
                    </div>
                    <div class="columns large-12 coluna-form">
                        <input type="submit" value="ENVIAR" class="float-right submit button">
                    </div>
                </form>
            </article>
        </section>    
    </footer>
    <section class="row expanded bg-direitos">
        <article class="row direitos">
            <div class="column large-2 medium-12 small-12 col-logo-footer">
                <figure>
                    <img src="imgs/logos/icon-footer.png">
                </figure>
            </div>
            <div class="column large-8 medium-12 small-12 col-direitos ">
                <a href="https://plyn.com.br/" target="_blank" class="link-direitos"><p ><strong>Copyright © Marcelo Astrolino</strong> - todos os direitos reservados. Website by PLYN!</p></a>
            </div>
            <div class="column large-2 medium-12 small-12 col-redes-footer">
                <ul class="no-bullet menu menu-redes-footer">
                    <li><a href="#"><img src="imgs/icons/instagram.png"></a></li>
                    <li><a href="#"><img src="imgs/icons/linkedin.png"></a></li>
                    <li><a href="#"><img src="imgs/icons/facebook.png"></a></li>
                </ul>
            </div>
        </article>
    </section>
    
    <link rel="stylesheet" href="css/icomoon.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" type="text/css"> 

    <script src="js/vendor/minify/jquery.js"></script>
    <script src="js/vendor/minify/what-input.js"></script>
    <script src="js/vendor/minify/foundation.js"></script>
    <script src="js/vendor/minify/app.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    AOS.init();
    </script>
