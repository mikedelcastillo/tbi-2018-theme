<div class="social-media">
  <ul>
    <?php
      $links = get_nav_menu_items_by_slug('social');
      foreach ($links as $link) {
          ?><li><a href="<?php echo $link->url; ?>"><img src="<?php echo get_template_directory_uri() ?>/img/icons/<?php echo strtolower(preg_replace('/\s/i', '', $link->title)); ?>.svg" alt="<?php echo $link->title; ?>"></a></li>

          <li><a href=""></a></li><?php
      }
    ?>
  </ul>
</div>
