    
    <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conselho das Secretarias Municipais de Saúde de Rondônia</title>   
    <!-- Swiper slider-->
    <?php wp_head(); ?>  
    
  </head>
  <?php get_header(); ?>


           <!-- HEADING BREADCRUMB-->
           <section class="bg-pentagon py-4">
              <div class="container py-3">
                <div class="row d-flex align-items-center gy-4">
                  <div class="col-md-7">
                  </div>
                  <div class="col-md-5">
                    <!-- Breadcrumb-->
                    <ol class="text-sm justify-content-start justify-content-lg-end mb-0 breadcrumb undefined">
                      <li class="breadcrumb-item"><a class="text-uppercase" href="/">Home</a></li>
                      <?php if(have_posts()):while(have_posts()):the_post();?>	
                        <li class="breadcrumb-item text-uppercase active">   <?php the_title();?>    </li>
                      <?php endwhile;endif;?>  
                    </ol>
                  </div>
                </div>
              </div>
            </section>
  <body>
        <div class="wide" id="all">             
            <section class="py-5">
                <div class="container py-5">
                    <?php if(have_posts()):while(have_posts()):the_post();?>	
                    <h2 class="h1"><?php the_title();?></h2>
                    <p>					
                        <?php the_content();?>
                        <strong><?php echo get_the_date('F j, Y', true); ?></strong>

                    </p>
                    <?php endwhile;endif;?>        
                </div>
            </section>
        </div>
<?php get_footer(); ?>
  </body>