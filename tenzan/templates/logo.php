<?php

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
echo '<a href="' . esc_attr( home_url() ) . '">';
if ( has_custom_logo() ) {
    echo '<img class="site-logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<img class="site-logo" src="'. get_stylesheet_directory_uri() . '/assets/img/logo_md_text.png" alt="' . get_bloginfo( 'name' ) . '">';
}
echo '</a>';

?>