<?php
/*
Template Name: Blog Personalizado
*/
?>


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
   
      <section class="py-5">
        <div class="container py-4">
          <div class="row gy-5">
            <div class="col-lg-9">

            <?php $args = array(               
             'category_name'=> 'blog',    
             //'post_type'=>'fundamental_um',            
            'posts_per_page'=>'12',
             );  
             ?>
           
            
           
              <div class="row gy-5 mb-5">
              <?php
             $loop=new WP_QUERY($args);
             if($loop->have_posts()):while($loop->have_posts()):$loop->the_post();
             ?>
                <!-- Blog box-->
                <div class="col-lg-4 col-md-6">

                  <div class="box-image">
                    <div class="mb-4 primary-overlay">
                    <?php if (has_post_thumbnail()): ?>
                      <div class="mb-4 primary-overlay">
                          <img class="img-fluid" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>" alt="...">
                      </div>
                    <?php endif; ?>
                    </div>

                    <div class="text-center">                   
                      <h3 class="h4 text-uppercase text-primary"><a class="text-reset" href="<?php the_permalink(); ?>"><?php the_title();?> </a></h3>
                      <p class="text-gray-600 text-sm text-start"><?php the_excerpt();?></p>
                    </div>
                  </div>

                </div>

                <?php endwhile;endif;?>           
                <?php wp_reset_postdata();?>

              </div>
            </div>
          </div>
        </div>
      </section>

      <?php get_footer(); ?>
        </div>





               
               