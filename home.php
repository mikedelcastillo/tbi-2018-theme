<?php get_header() ?>
<?php var_dump(getenv('EXISTS')); ?>
<section class="index landing">
  <div class="container">
    <div class="content">
      <?php get_template_part( 'template-parts/top-navigation'); ?>

      <?php
        $links = get_nav_menu_items_by_slug('pillars');

        foreach($links as $link){
          ?>
          <div class="index-content">
  					<div class="<?php echo strtolower($link->title); ?>"><?php echo $link->title; ?></div>
  					<a href="<?php echo $link->url; ?>">
  						<div class="<?php echo strtolower($link->title); ?>-spiel">
                <?php echo $link->description; ?>
              </div>
  					</a>
  				</div>
          <?php
        }
      ?>

      <div class="top-footer">
					<div class="top-footer-container">
						<?php get_template_part( 'template-parts/top-social'); ?>
            <?php get_template_part( 'template-parts/top-newsletter'); ?>
					</div>
				</div>
    </div>
  </div>
</section>

<?php get_footer() ?>
