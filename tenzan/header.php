<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/assets/jquery.min.js'; ?>">
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/assets/bootstrap/js/bootstrap.min.js'; ?>">
</script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/assets/bootstrap/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
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
