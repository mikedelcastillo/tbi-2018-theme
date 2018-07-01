<div class="top-header">
  <div class="top-header-content">
    <a href="<?php echo esc_url(home_url('/')); ?>"><h1><font size="3">THE<br></font> <font size="5vw">BLACK</font><br> <font size="4">INSTITUTE</font></h1></a>
    <nav class="desktop-nav">
      <ul>
        <?php
          $links = get_nav_menu_items_by_slug('top');
          foreach ($links as $link) {
              ?> <li><a href="<?php echo $link->url; ?>"><?php echo $link->title; ?></a></li><?php
          }
        ?>
      </ul>
    </nav>
  </div>
</div>
