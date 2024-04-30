  <?php get_header(); ?>
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
                    </p>
                    <?php endwhile;endif;?>        
                </div>
            </section>
        </div>
<?php get_footer(); ?>
  </body>