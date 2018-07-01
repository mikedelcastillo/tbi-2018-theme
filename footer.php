
<!-- Footer -->
  <footer><div class="footer-content">

      <!-- Call-to-Action -->
      <div class="footer-item spiel">

      <h1>Join The Black Institute</h1>
      <i>in shaping the intellectual discourse and public policy in America from a Black perspective, including all people of color in the United States and throughout the Diaspora...</i><br>

      <div class="buttons">
        <?php
          $links = get_nav_menu_items_by_slug('top');
          foreach ($links as $link) {
              ?><a href="<?php echo $link->url; ?>"><div class="circle"><?php echo $link->title; ?></div></a><?php
          }
        ?>
      </div>

      </div>

      <!-- Navigation -->
      <div class="footer-item navigation">

      <div class="links">
          <?php
            $links = get_nav_menu_items_by_slug('navigation');
            foreach ($links as $link) {
                ?> <li><a href="<?php echo $link->url; ?>"><?php echo $link->title; ?></a></li><?php
            }
          ?>
      </div>

      <div class="footer-content">

          <div class="footer-item details">
          39 Broadway Avenue<br>
          17th Floor, Suite 1740<br>
          New York, NY 10006
          </div>

          <div class="footer-item details">
          Phone (212) 871-6899 <br>
          Fax (917) 591-5281 <br>
          info@theblackinstitute.com
          </div>

      </div>

      </div>

  </div></footer>

<!-- Acknowledgement -->
<footer>

<div class="footer-content">
  <div class="acknowledgement"></div>
  <!-- <div class="acknowledgement"><b>Developed by the Computer Society of Ateneo.</b></div> -->
  <div class="acknowledgement"><b>Developed by the ___.</b></div>
</div>

</footer>


<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-migrate.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/remodal.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/slick.js"></script> -->

<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/script.js"></script> -->

<?php

wp_footer();

?></body>
</html>
