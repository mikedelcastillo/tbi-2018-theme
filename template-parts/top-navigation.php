<?php



?>

<div class="top-header"><div class="top-header-content">
<div class="logo"><img class="img" src="*%20images/logo/Yellow Flag copy.png" alt=""/>
  <img class="img" src="*%20images/logo/Red Flag copy.png" alt=""/><img class="img" src="*%20images/logo/Green Flag copy.png" alt=""/>
</div>
<a href="index.html"><h1><font size="3">THE<br></font> <font size="5vw">BLACK</font><br> <font size="4">INSTITUTE</font></h1></a>
<nav class="desktop-nav">
  <ul>
     <li><a href="donate.html">Donate</a></li>
     <li><a href="contact.html">Contact Us</a></li>
  </ul>
</nav>
</div>


<!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
$description = get_bloginfo( 'description', 'display' );

<?php

$links = get_nav_menu_items_by_slug('top');

var_dump($links);
?>


<?php if ( has_nav_menu( 'top' ) ) : ?>
  <?php wp_nav_menu( array(
    'theme_location' => 'top',
    'menu_id'        => 'top-menu',
  ) ); ?>
<?php endif; ?> -->
