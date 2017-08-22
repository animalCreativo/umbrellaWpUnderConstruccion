<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage  webTemplate Animal Creativo
 * @since  webTemplate Animal Creativo 1.0
 */

get_header(); 

?>

<div class="row " id="bodyContainerBuild">
    <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
      <?php query_posts('post_per_pages=10') ?>
      <?php query_posts('order=Asc&cat=18') ?> <!-- categoria construccion -->
      <?php 
      $i = 0; 
      if (have_posts()) : while ( have_posts() ) : the_post(); ?>
      <?php if (  $i ==  0 ) { ?>
          <div class="small-12 columns text-center align-bottom" id="buildTitle">
            <h3><?php the_content() ?></h3>
          </div>
         <?php } else {  ?>
          <div class="small-12 columns text-center" id="buildTexto">
            <h1> <?php the_content() ?> </h1>
          </div>
          <?php } ?>
      <?php
      $i = $i +1;  
      endwhile; ?>
      <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; // End have_posts() check. ?>

</div>

  


     

<?php get_footer(); ?>

