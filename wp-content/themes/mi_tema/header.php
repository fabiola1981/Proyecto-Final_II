<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
<body class="lateral" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/cancha.jpg);">

  <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>
<?php echo get_template_part('template_part/nav') ?>
