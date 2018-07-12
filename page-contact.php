<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/donate-contact.css"/>

  <section class="index landing">
    <div class="container">
      <div class="content">
        <?php get_template_part('template-parts/top-navigation'); ?>

        <div class="landing-content">
          <div class="contact">
            <form action="">

              <!-- Name Input -->
              <input type="text" id="name" name="name" placeholder="Name">

              <!-- Email Input -->
              <input type="text" id="email" name="email" placeholder="Email">

              <!-- Message Input -->
              <textarea id="message" name="message" placeholder="Message"></textarea>

            </form>
          </div>
        </div>

        <div class="top-footer">
  					<div class="top-footer-container">
  						<?php get_template_part('template-parts/top-social'); ?>

              <div class="newsletter">
                <input class="email" type="submit" name="" value="Submit">
              </div>

  					</div>
  				</div>
      </div>
    </div>
  </section>




<?php get_footer() ?>
