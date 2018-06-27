<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/normalize.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/lick.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal-default-theme.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style-mobile.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slick-theme.css"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
$description = get_bloginfo( 'description', 'display' );



<?php if ( has_nav_menu( 'top' ) ) : ?>
  <?php wp_nav_menu( array(
    'theme_location' => 'top',
    'menu_id'        => 'top-menu',
  ) ); ?>
<?php endif; ?>
