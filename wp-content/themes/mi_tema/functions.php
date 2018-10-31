<?php

//Registro de styles
function register_enqueue_style() {
    $theme_data = wp_get_theme();

 /* Registrando estilos */
wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Monoton', null, null, null);
wp_register_style('bootstrap', get_theme_file_uri('/assets/vendor/css/css/bootstrap.min.css'), null, null, 'screen');
wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.4.2/css/all.css', null, null, null);
wp_register_style('style', get_theme_file_uri('/assets/css/style.css'), array('googlefonts'), $theme_data->get('Version'), 'screen');


 /* Estilos en cola */
 wp_enqueue_style('bootstrap');
 wp_enqueue_style('style');
 
}
add_action('wp_enqueue_scripts', 'register_enqueue_style');



//Registro de scripts
function register_enqueue_scripts(){
  $theme_data = wp_get_theme();

  /*Deregister scripts */
  wp_deregister_script( 'jquery');
  wp_deregister_script( 'jquery-migrate');

 /* Registrando scripts */
  wp_register_script('jquery', get_theme_file_uri('/assets/js/jquery-3.3.1.min.js'), null, '3.3.1', true);
  wp_register_script('jquery-migrate', get_theme_file_uri('/assets/js/jquery-migrate-1.4.1.min.js'), array('jquery'), '3.3.1', true);
  wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'),'1.14.3', true);
  wp_register_script('bootstrapcdn','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), null, true);
  wp_register_script('galeriajs', get_theme_file_uri('/assets/js/galeria.js'), array('jquery'), null, true);
 /* Estilos en cola */
   
   wp_enqueue_script('jquery');
   wp_enqueue_script('jquery-migrate');
   wp_enqueue_script('popper');
   wp_enqueue_script('bootstrapcdn');
   wp_enqueue_script('galeriajs');
}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


/* Registrando scripts */

/* logo personalizado*/
function config_custom_logo() {
    add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    ));
  }
  add_action( 'after_setup_theme', 'config_custom_logo' );

/* Tamaños personalizados*/

function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }
  function dl_image_sizes( $sizes ) {
    $add_sizes = array(
      'portfolio-home'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
      'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
    );
    return array_merge( $sizes, $add_sizes );
  }
  if ( function_exists( 'add_theme_support' ) ) {
    add_image_size( 'portfolio-home', 465, 250, true );
    add_image_size( 'square', 400, 400, true );
    add_image_size( 'post-custom-size', 800, 600, true );
    add_image_size( 'custom-size-blog', 400, 300, true );
    add_filter( 'image_size_names_choose', 'dl_image_sizes' );
  }
  add_action( 'after_setup_theme', 'thumbnails_setup' );

  //menus personalizables//

  function menus_setup() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'	=> __( 'Footer Menu' ),
		)
	);
}
add_action( 'after_setup_theme', 'menus_setup' );
// Register Custom Post Type
function proyecto_post_type() {

  $labels = array(
    'name'                  => _x( 'Proyectos', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Proyecto', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Post Types', 'text_domain' ),
    'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Proyecto', 'text_domain' ),
    'description'           => __( 'perzonalizacion del proyecto', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-welcome-view-site',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'proyecto', $args );

}
add_action( 'init', 'proyecto_post_type', 0 );

// Register Custom Post Type
function Fotos_post_type() {

  $labels = array(
    'name'                  => _x( 'Fotos', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Foto', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Fotos', 'text_domain' ),
    'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Foto', 'text_domain' ),
    'description'           => __( 'San Ramón campeonato', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-shield',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'Fotos', $args );

}
// Register Custom Post Type
function Ligas_post_type() {

  $labels = array(
    'name'                  => _x( 'Ligas', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Liga', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Ligas', 'text_domain' ),
    'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Liga', 'text_domain' ),
    'description'           => __( 'Ligas deportivas', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-shield',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'Ligas', $args );

}
add_action( 'init', 'Ligas_post_type', 0 );
add_action( 'init', 'Fotos_post_type', 0 );

function dl_widgets() {
    register_sidebar( array(
        'name' => 'widget footer',
        'id' => 'widget_footer'
    ));

    register_sidebar( array(
        'name' => 'barra lateral',
        'id' => 'sidebar-widget',
        'before_widget' => '<div  id="%1$s" class="widget %2$s" mt-4',
        'after_widget' => '</div>',  
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',

    ));
}

add_action('widgets_init', 'dl_widgets');


?>


