<?php get_header() ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/donate-contact.css"/>

  <section class="index landing">
    <div class="container">
      <div class="content">
        <?php get_template_part('template-parts/top-navigation'); ?>

        <div class="landing-content">
          <div class="donate">

            <!-- Description -->
            <div class="donate-desc">

              <h1>Please Support Our Mission</h1>

              <p>With your support we can bring justice to communities of color.<br> Every contribution helps, please donate today.</p>

              <p> To donate by check, please mail to:<br/> The Black Institute, 39 Broadway, Suite 1740<br> New York, NY 10006.
              </p>

            </div>

            <!-- Amount -->
            <div class="donate-amount">
              <div class="donate-buttons">

                <button class="btn-donate">$5</button>
                <button class="btn-donate">$10</button>
                <button class="btn-donate">$15</button>
                <button class="btn-donate">$20</button>
                <button class="btn-donate">$25</button>
                <button class="btn-donate">$50</button>
                <button class="btn-donate">$100</button>
                <button class="btn-donate">Other Amt.</button>

              </div>
            </div>

          </div>
        </div>

        <div class="top-footer">
  					<div class="top-footer-container">
  						<?php get_template_part('template-parts/top-social'); ?>

              <div class="newsletter">
                <input class="email" type="submit" name="" value="Proceed to Paypal">
              </div>

  					</div>
  				</div>
      </div>
    </div>
  </section>




<?php get_footer() ?>
