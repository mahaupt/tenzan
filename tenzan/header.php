<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>
<?php wp_head(); ?>
</head>
<body>
<header class="text-center">
  <?php get_template_part( 'templates/logo' ); ?>
</header>
<nav>
<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) ); ?>

<div class="strike text-center">
   <span>all about Japanese culture</span>
</div>

</nav>
