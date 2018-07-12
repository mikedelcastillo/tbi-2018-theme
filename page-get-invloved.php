<?php /* Template Name: Get Involved */ ?>
<?php get_header() ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/article.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/article-mobile.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/misc-links.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/about.css"/>

<div class="content">
  <?php get_template_part('template-parts/top-navigation'); ?>
</div>

<section class="section">
  <div class="article">

    <!-- Header-Careers -->
    <div class="header">
      <h2><i>Get Involved</i></h2>
    </div>

    <!-- Careers -->
    <section class="careers">
      <div class="container">
        <div class="content">
          <h1 class="title">Career Opportunities</h1>

          <?php
          $args = array( 'posts_per_page' => 999999, 'offset'=> 0, 'category' => 4 );

          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <!-- Job A -->
              <div class="job">
                <!-- Description -->
                <div class="job-description">
                  <h3><?php the_title(); ?></h3>
                  <?php the_content(); ?>
                </div>

                <!-- Button -->
                <form class="job-submit" action="<?php echo get_post_meta(get_the_ID(), "attachment_url", true)?>">
                  <button class="btn-submit" >Submit App</button>
                </form>
              </div>
              <hr>
          <?php endforeach;
          wp_reset_postdata();?>

        </div>
      </div>
    </section>

    <!-- Header-Events -->
    <div class="header">
      <h2><i>Upcoming Events</i></h2>
    </div>

    <?php
    $args = array( 'posts_per_page' => 999999, 'offset'=> 0, 'category' => 4 );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <div class="careers">
      <div class="container">
        <div class="content">
          <div class="event">
          <!-- Image -->
          <div class="leadership-img"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></div>
          <!-- Event A -->
          <div class="getinvolve-content">
          <h2 class="title"><?php the_title(); ?><br></h2>
          <h2 class="details">
          <i><?php the_date(); ?></i>
          <?php the_content(); ?>
          </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach;
    wp_reset_postdata();?>

  </div>

</section>


<?php get_footer() ?>
