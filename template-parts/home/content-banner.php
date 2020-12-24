  <?php
  $banner_select_categories = get_theme_mod('banner_select_categories','');
  $banner_numberofpost = get_theme_mod('banner_numberofpost','');

  $args=array(
    'posts_per_page' => $banner_numberofpost, 
    'post_type' => 'post',
    'cat' => $banner_select_categories,
    'ignore_sticky_posts' => 1
  );
  $wp_query = new WP_Query( $args );

  ?>
  <div id="banner-slider" class="banner-slider carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php
      $k = 1;
      while($wp_query->have_posts()) {
        $wp_query->the_post();
        $feat_image  = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        if($feat_image){
        ?>
        <div class="carousel-item <?php echo $active = ($k == 1)?"active":""; ?>">
          <img src="<?php echo $feat_image; ?>" class="carousel-img" alt="<?php the_title(); ?>">
          <div class="carousel-content">
            <h1 class="carousel-heading">
              <?php the_title(); ?>
            </h1>
            <p class="carousel-paragraph">
              <?php the_excerpt(); ?>
            </p>
          </div>
        </div>
      <?php } $k++;  } wp_reset_query(); wp_reset_postdata(); ?>
      </div>
      <a class="carousel-control-prev" href="#banner-slider" role="button" data-slide="prev">
        <div class="carousel-icon-bg-left">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </div>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#banner-slider" role="button" data-slide="next">
        <div class="carousel-icon-bg-right">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </div>
        <span class="sr-only">Next</span>
      </a>
    </div>