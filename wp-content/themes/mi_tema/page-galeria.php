<?php get_header(); ?>
<!-- Template Name:galeria -->
<div>
<h1 class="text-center display-4 my-4">Galería de Imágenes</h1>
<div class="container">
<div class="row">

          <?php
              $arg = array(
                'post_type'    => 'Fotos',
                'posts_per_page' => 6
              );

              $get_arg = new WP_Query( $arg );

              while ( $get_arg->have_posts() ) {
                $get_arg->the_post();
              ?>
<div class="card-deck col-md-4 mb-5 p-3">
  <div class="card">
    <center><h3><?php the_title() ?></h3></center>
    <div class="card-body">
      <img class="img-fluid" src="<?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
    </div>
  </div> 
</div>
 <?php } wp_reset_postdata();
        ?>
 </div>
</div>
<?php get_footer(); ?>

