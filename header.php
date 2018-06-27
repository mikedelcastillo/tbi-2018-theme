<?php

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/normalize.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slick.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/text-style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal-default-theme.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style-mobile.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slick-theme.css"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
