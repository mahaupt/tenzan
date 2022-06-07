<?php

function tenzan_menu_setup() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header (Main)' ),
      'footer-menu' => __( 'Footer' )
    )
  );
}
add_action( 'init', 'tenzan_menu_setup' );

function tenzan_custom_logo_setup() {
  $defaults = array(
      'height'               => 100,
      'width'                => 400,
      'flex-height'          => true,
      'flex-width'           => true,
      'header-text'          => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, 
  );

  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'init', 'tenzan_custom_logo_setup' );


function tenzan_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Widget Area',
		'id'            => 'footer_widget_area',
		'before_widget' => '<div class="col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'tenzan_widgets_init' );

?>