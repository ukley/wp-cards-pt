<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conselho das Secretarias Municipais de Saúde de Rondônia</title>   

    <?php wp_head(); ?>  
    
  </head>
  <?php get_header(); ?>


      <?php
        $background = get_template_directory_uri() . '/assets/img/back01.jpg';
      ?>
      <section class="text-white bg-cover bg-center primary-overlay overlay-dense" style="background: url('<?php echo $background;?>') repeat">
        <div class="overlay-content py-5">
          <div class="container py-4">
            <!-- Hero slider-->
            <div class="swiper-container homepage-slider">
              <div class="swiper-wrapper">
                <!-- Hero Slide-->


                <?php
                  $noticias_query = new WP_Query(array(
                      'post_type' => 'post',  // Certifique-se de que está configurado para 'post' ou o tipo de postagem desejado
                      'posts_per_page' => 4,  // Número de posts a serem exibidos
                  ));

                  if ($noticias_query->have_posts()) :
                      while ($noticias_query->have_posts()) : $noticias_query->the_post();
                ?>
             
                    <div class="swiper-slide h-auto mb-5">
                      <div class="row gy-5 h-100 align-items-center">
                        <div class="col-lg-5 text-lg-end"><img class="ml-auto img-fluid" src="" alt="">

                          <h1 class="text-uppercase"><?php the_title();?></h1>
                          <ul class="list-unstyled text-uppercase fw-bold mb-0">
                            <li class="mb-2"> <?php echo wp_trim_words(get_the_content(), 20, '...'); ?></li>
                          </ul>
                        </div>
                          <?php 
                            $imagem_id = get_post_thumbnail_id();
                            $imagem_src = wp_get_attachment_image_src($imagem_id, 'full');
                          ?>
                        <div class="col-lg-7"><img class="img-fluid" src="<?php echo $imagem_src[0]; ?>" alt="<?php the_title(); ?>" width="550px" height="auto"></div>
                      </div>
                    </div>
                
                  <?php endwhile;endif;?>

                  
                </div>              
              </div>
              <div class="swiper-pagination swiper-pagination-light"></div>
            </div>
          </div>
        </div>
      </section>



     

      <?php
        $background = get_template_directory_uri() . '/assets/img/background.jpg';
        ?>

      <section class="py-5 bg-fixed bg-cover bg-center dark-overlay" style="background: url('<?php echo $background;?>')">
        <div class="overlay-content">
          <div class="container py-4 text-white text-center">
            <div class="icon icon-outlined icon-lg mx-auto mb-4">
                    <svg class="svg-icon text-white svg-icon-lg">
                      <use xlink:href="#numbers-1"> </use>
                    </svg>
            </div>
            <h2 class="text-uppercase mb-3">Conheça nossas ações e trabalho</h2>
          </div>
        </div>
      </section>


       
      <section class="py-5">
        <div class="container py-4">
          <header class="mb-5">
            <h2 class="lined lined-center text-uppercase mb-4">Diretoria</h2>
          </header>

          
          <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
      <div class="carousel-inner">                  
        <div class="carousel-item active">
          <div class="row gy-4">
            <!-- Team member  -->
            <div class="col-lg-3 col-md-6 text-center"><a href="#"><img class="avatar avatar-xxl p-2 mb-4" src="https://cosemsrondonia.org.br/wp-content/uploads/2024/02/WhatsApp-Image-2024-02-26-at-20.41.43.jpeg" alt="Vera Lucia"></a>
              <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="#">Vera Lúcia Quadros</a></h3>
              <p class="text-muted small text-uppercase">Presidente</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-instagram"></i></a></li>

                <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
              </ul>
            </div>

            <!-- Team member  -->
            <div class="col-lg-3 col-md-6 text-center"><a href="#"><img class="avatar avatar-xxl p-2 mb-4" src="https://cosemsrondonia.org.br/wp-content/uploads/2024/02/2-Vice-presidente-Lorena-Pereira-Fiorenzani-Turco.png" alt="Lorena Pereira"></a>
              <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="#">Lorena Pereira Fiorenzani Turco</a></h3>
              <p class="text-muted small text-uppercase">Vice-Presidente</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 text-center"><a href="#"><img class="avatar avatar-xxl p-2 mb-4" src="https://cosemsrondonia.org.br/wp-content/uploads/2024/03/3-2a-Vice-Presidente-da-Macro-I-Tatiane-de-Almeida-Domingues.jpeg" alt="Tatiane de Almeida Domingues "></a>
              <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="#">Tatiane de Almeida Domingues </a></h3>
              <p class="text-muted small text-uppercase">2ª Vice-Presidente da Macro I </p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-instagram"></i></a></li>

                <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
              </ul>
            </div>


            <!-- Team member  -->

             <!-- Team member  -->
             <div class="col-lg-3 col-md-6 text-center"><a href="#"><img class="avatar avatar-xxl p-2 mb-4" src="https://cosemsrondonia.org.br/wp-content/uploads/2024/02/6-1o-Secretario-Gilmar-da-Silva-Ferreira.jpg" alt="Marcel Leme Cristaldo"></a>
              <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="#">Marcel Leme Cristaldo</a></h3>
              <p class="text-muted small text-uppercase">2º Vice-Presidente da Macro II </p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
              </ul>
            </div>
           


           
          </div>              
            </div>





















          <!-- segundo slide -->
          <div class="carousel-item">
          <div class="row gy-4">
            <!-- Team member  -->
            <div class="col-lg-3 col-md-6 text-center"><a href="#"><img class="avatar avatar-xxl p-2 mb-4" src="https://cosemsrondonia.org.br/wp-content/uploads/2024/02/5-Diretor-Financeiro-Arildo-Moreira.jpg" alt="Arildo Moreira"></a>
              <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="#">Arildo Moreira</a></h3>
              <p class="text-muted small text-uppercase">Diretor Financeiro</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
              </ul>
            </div>

             <!-- Team member  -->
             <div class="col-lg-3 col-md-6 text-center"><a href="#"><img class="avatar avatar-xxl p-2 mb-4" src="https://cosemsrondonia.org.br/wp-content/uploads/2024/02/6-1o-Secretario-Gilmar-da-Silva-Ferreira.jpg" alt="Patrícia Magalhães"></a>
              <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="#">Gilmar da Silva Ferreira</a></h3>
              <p class="text-muted small text-uppercase">1° Secretário</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
              </ul>
            </div>

           


            <!-- Team member  -->
            <div class="col-lg-3 col-md-6 text-center"><a href="#"><img class="avatar avatar-xxl p-2 mb-4" src="https://cosemsrondonia.org.br/wp-content/uploads/2024/02/7-2o-Secretario-Jair-Godinho-da-Silva.jpg" alt="Arildo Moreira"></a>
              <h3 class="h4 mb-1 text-uppercase"><a class="text-reset" href="#">Jair Godinho da Silva</a></h3>
              <p class="text-muted small text-uppercase">2ºSecretário</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="social-link facebook" href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="social-link email" href="#"><i class="fas fa-envelope"></i></a></li>
              </ul>
            </div>
          </div>     
               </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
            </div>

        </div>
                  </div>
      </section>




     <!-- PACKAGES SECTION-->
     <section class="py-5">
      <div class="container py-4">
        <header class="mb-5">
          <h2 class="lined lined-center text-uppercase mb-4">Transparência, segurança e eficiência</h2>
          <p class="lead text-center"> Conheça nossos instrumentos normativos utilizados para regulamentar e orientar procedimentos, práticas e diretrizes específicas.</p>
        </header>
        <div class="row align-items-center gy-4">


          <!-- package-->
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header py-5 border-0 text-center">
                <h4 class="mb-3 text-uppercase">Estatuto COSEMS-RO</h4>
                <h4 class="h1 mb-0"><i class="fa fa-copy"></i></h4>
              </div>
              <div class="card-body px-4 px-xl-5 text-center py-3">
                <ul class="list-unstyled d-inline-block">
                  
                </ul><a class="btn btn-outline-primary w-100 mb-3" href="https://cosemsrondonia.org.br/wp-content/uploads/2024/02/ESTATUTO-COSEMS-RO-2023-Pronto-Assinado.pdf">Visualizar</a>
              </div>
            </div>
          </div>


            <!-- package-->
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header py-5 border-0 text-center">
                <h4 class="mb-3 text-uppercase">Resoluções</h4>
                <h4 class="h1 mb-0"><i class="fa fa-file"></i></h4>
              </div>
              <div class="card-body px-4 px-xl-5 text-center py-3">
                <ul class="list-unstyled d-inline-block">
                  
                </ul><a class="btn btn-outline-primary w-100 mb-3" href="/index.php/resolucoes">Visualizar</a>
              </div>
            </div>
          </div>

   <!-- package-->
   <div class="col-lg-4 col-md-6">
    <div class="card">
      <div class="card-header py-5 border-0 text-center">
        <h4 class="mb-3 text-uppercase">Notas Técnicas</h4>
        <h4 class="h1 mb-0"><i class="fa fa-book"></i></h4>
      </div>
      <div class="card-body px-4 px-xl-5 text-center py-3">
        <ul class="list-unstyled d-inline-block">
          
        </ul><a class="btn btn-outline-primary w-100 mb-3" href="/index.php/notas-tecnicas">Visualizar</a>
      </div>
    </div>
  </div>



        </div>
      </div>
    </section>
    <section class="py-5" id="noticias">
    <div class="container py-4">
        <header class="mb-5">
            <h2 class="lined lined-center text-uppercase mb-4">Notícias</h2>
            <p class="lead">Atualizações e insights: mantenha-se informado com as últimas notícias do Cosems-RO. <a href="https://cosemsrondonia.org.br/blog/">Veja mais em nosso blog</a></p>
        </header>
        <div class="row gy-5">
            <?php
            $noticias_query = new WP_Query(array(
                'post_type' => 'post',  // Certifique-se de que está configurado para 'post' ou o tipo de postagem desejado
                'posts_per_page' => 4,  // Número de posts a serem exibidos
            ));

            if ($noticias_query->have_posts()) :
                while ($noticias_query->have_posts()) : $noticias_query->the_post();
            ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="box-image">
                            <div class="mb-4 primary-overlay">
                                <?php
                                $imagem_id = get_post_thumbnail_id();
                                $imagem_src = wp_get_attachment_image_src($imagem_id, 'medium');
                                ?>
                                <img class="img-fluid" src="<?php echo $imagem_src[0]; ?>" alt="<?php the_title(); ?>">
                                <div class="overlay-content d-flex flex-column justify-content-center p-4">
                                    <ul class="list-inline mb-0 box-image-content text-center">
                                        <li class="list-inline-item">
                                            <a class="btn btn-outline-light" href="<?php the_permalink(); ?>">
                                                <i class="fas fa-link me-2"></i>Veja Mais ...
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="h4 text-uppercase text-primary">
                                    <a class="text-reset" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p class="text-gray-600 text-sm text-start">
                                    <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                </p>
                                <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>">Continue Lendo...</a>
                                
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Restaura os dados originais do post
            endif;
            ?>
        </div>
    </div>
</section>

        <?php get_footer(); ?>
        </div>


        <script>
    var swiper = new Swiper('.swiper-container', {
        // Parâmetros de configuração aqui
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>



        <script>
            // ------------------------------------------------------- //
            //   Inject SVG Sprite - 
            //   see more here 
            //   https://css-tricks.com/ajaxing-svg-sprite/
            // ------------------------------------------------------ //
            function injectSvgSprite(path) {
            
                var ajax = new XMLHttpRequest();
                ajax.open("GET", path, true);
                ajax.send();
                ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
                }
            }
            // // this is set to BootstrapTemple website as you cannot 
            // // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
            // // while using file:// protocol
            // // pls don't forget to change to your domain :)
            // injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
            
            </script>
            <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
