<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
      <section class="container-fluid about-bg text-center">
          <div class="container">
   
<!--placeholder for about me-->
              <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
              <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
              <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

          
              <div class="blocker"></div>
              
          </div> <!--container-->
    
      </section>
      
      
      
      
      
      <section class="container-fluid articles-bg">
          <div class="container">
              <div class="row"> <!--row to get access to bootstrap columns-->
                  <div>
                      <h3 class="text-center article-title "><?php the_field('titleforarticles'); ?></h3>
                  </div>
                  <div class="col-md-4 article-cent">

<!--placeholder for col1-->
                      <img class="img-responsive" alt=“portait” src="<?php the_field('articleimage'); ?>">
                      <h4><?php the_field('articletitle'); ?></h4>
                      <p><?php the_field('articleexcerpt'); ?> </p>
                      <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>

                  </div> <!--column-->
                  
                  <div class="col-md-4 article-cent">

<!--placeholder for col2-->
                      <img class="img-responsive" alt=“model” src="<?php the_field('articleimage2'); ?>">
                      <h4><?php the_field('articletitle2'); ?></h4>
                      <p><?php the_field('articleexcerpt2'); ?> </p>
                      <a href="<?php the_field('readmore2'); ?>" class="readmore">CONTINUE READING</a>

                  </div> <!--column-->
                  
                  <div class="col-md-4 article-cent">

<!--placeholder for col3-->
                      <img class="img-responsive" alt=“racetrack” src="<?php the_field('articleimage3'); ?>">
                      <h4><?php the_field('articletitle3'); ?></h4>
                      <p><?php the_field('articleexcerpt3'); ?> </p>
                      <a href="<?php the_field('readmore3'); ?>" class="readmore">CONTINUE READING</a>

                  </div> <!--column-->
              
              </div> <!--row-->
          
          </div> <!--container-->
      </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>