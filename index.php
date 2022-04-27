<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- meta tag de responsivo e acentuação -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!-- meta tag de otimização SEO-->
            <meta name="description" content=""> 
            <meta name="keywords" content="">
            <meta name="author" content="F1 Technology">
        <!-- tag de titulo do site -->
            <title>Projeto 01</title>
            <link rel="shotcut icon" type="image-x/png" href="./favicon.ico">
        <!-- tag de icon do awesome -->
            <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
            <link rel="stylesheet" href="css/fontawesome.css" type="text/css">
            <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->
        <!-- tag de font do google font -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <!-- tags de css -->
            <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo left">Logomarca</div>
                <nav class="desktop right">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Serviço</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav><!-- fim nav desktop -->

                <nav class="mobile right">
                    <div class="botao-menu-mobile">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div><!-- fim botao-menu-mobile -->
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Serviço</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav><!-- fim nav mobile -->
                <div class="clear"></div>
            </div><!-- fim container -->
        </header><!-- fim header -->

        <section class="banner-principal">
            <div class="overlay"></div><!-- fim overlay -->
            <div class="container">
                <form action="">
                    <h2>Qual o seu Melhor e-mail?</h2>
                    <input type="email" name="email" required>
                    <input type="submit" name="acao" value="Cadastrar!">
                </form>
            </div><!-- fim container -->
        </section><!-- fim section banner-principal -->

        <section class="descricao-autor">
            <div class="container">
                <div class="w50 left">
                    <h2>Luís Felipe Bond</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis sed eros ut porttitor. Maecenas nulla mi, vulputate vitae nisl vitae, volutpat imperdiet leo. Donec a tristique diam. Proin quis turpis dui. Curabitur et odio facilisis magna commodo pellentesque sit amet molestie neque. Duis id dolor eu nibh viverra elementum. Donec sagittis, diam et vulputate auctor, leo nulla lacinia ipsum, nec ullamcorper nisi odio nec elit. Vivamus massa arcu, fermentum sit amet imperdiet vitae, tristique vitae mauris. Aenean quis elit convallis magna bibendum ornare. </p>
                    <p>In hac habitasse platea dictumst. Integer gravida, tortor ac egestas venenatis, justo purus gravida neque, a eleifend tellus diam eget risus. Nunc sapien erat, condimentum eget laoreet tristique, suscipit id elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam nec nunc turpis. Phasellus nec lobortis libero, ut fringilla enim. Aliquam at lectus tincidunt, dictum neque sed, molestie dolor. </p>
                </div><!-- fim w50 left -->

                <div class="w50 left">
                    <img class="right" src="./images/foto.jpg" alt="Minha foto">
                </div><!-- fim w50 left -->
                <div class="clear"></div>
            </div><!-- fim container -->
        </section><!-- fim section descricao-autor -->

        <section class="especialidade">
            
            <div class="container">
                <h2 class="title">Especialidades</h2>

                <div class="w33 left box-especialidade">
                    <h3>
                        <i class="fa fa-css3" aria-hidden="true"></i>
                    </h3>
                    <h4>CSS3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis sed eros ut porttitor. Maecenas nulla mi, vulputate vitae nisl vitae, volutpat imperdiet leo.</p>
                </div><!-- fim box-especialidade -->

                <div class="w33 left box-especialidade">
                    <h3>
                        <i class="fa fa-html5" aria-hidden="true"></i>
                    </h3>
                    <h4>HTML5</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis sed eros ut porttitor. Maecenas nulla mi, vulputate vitae nisl vitae, volutpat imperdiet leo.</p>
                </div><!-- fim box-especialidade -->

                <div class="w33 left box-especialidade">
                    <h3>
                        <i class="fa fa-gg-circle" aria-hidden="true"></i>
                    </h3>
                    <h4>Javascript</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis sed eros ut porttitor. Maecenas nulla mi, vulputate vitae nisl vitae, volutpat imperdiet leo.</p>
                </div><!-- fim box-especialidade -->
                <div class="clear"></div>
            </div><!-- fim container -->
        </section><!-- fim section especialidades -->

        <section class="depoimentos-servicos">
            <div class="container">
                <div class="w50 left depoimentos-container">
                    <h2 class="title">Depoimentos</h2>
                    <div class="depoimentos-single">
                        <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis sed eros ut porttitor. Maecenas nulla mi, vulputate vitae nisl vitae, volutpat imperdiet leo."</p>
                        <p class="nome-autor">Lorem Ipsum</p>
                    </div><!-- fim depoimentos-single -->

                    <div class="depoimentos-single">
                        <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis sed eros ut porttitor. Maecenas nulla mi, vulputate vitae nisl vitae, volutpat imperdiet leo."</p>
                        <p class="nome-autor">Lorem Ipsum</p>
                    </div><!-- fim depoimentos-single -->

                    <div class="depoimentos-single">
                        <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis sed eros ut porttitor. Maecenas nulla mi, vulputate vitae nisl vitae, volutpat imperdiet leo."</p>
                        <p class="nome-autor">Lorem Ipsum</p>
                    </div><!-- fim depoimentos-single -->
                </div><!-- fim w50 left depoimentos-container-->
                
                <div class="w50 left servicos-container">
                    <h2 class="title">Serviços</h2>
                    <div class="servicos">
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        </ul>
                    </div><!-- fim servicos -->
                </div><!-- fim w50 left servicos-container-->
                <div class="clear"></div>
            </div><!-- fim container -->
        </section><!-- fim section depoimentos-servicos -->

        <footer>
            <div class="container">
                <p>Todos os direitos reservados!</p>
            </div><!-- fim container -->
        </footer>
    </body>
</html>