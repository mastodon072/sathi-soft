<?php
$about_page = get_theme_mod('about_page','');
//pre($about_page);

$args = array(
  'p'         => $about_page, 
  'post_type' => 'any'
);
$wp_query = new WP_Query($args);
if($wp_query->have_posts()) {
    $wp_query->the_post();
    $feat_image  = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

    $home_page_titles = get_field('home_page_titles','');
    $title_1 = $home_page_titles['title_1'];
    $title_2 = $home_page_titles['title_2'];
    if(empty($title_2)){
        $title_2 = get_the_title();
    }
    $short_description = $home_page_titles['short_description'];
    $read_more_title = $home_page_titles['read_more_title'];
    if(empty($read_more_title)){
        $read_more_title = "Read More";
    }
    $row = 12;
    if($feat_image){
        $row = 6;
    }

    ?>
    <section class="section-aboutus">
        <div class="container">
            <div class="row">
                <?php if($feat_image){ ?>
                    <div class="col-md-6">
                        <div class="section-aboutus__img-box">
                            <img src="<?php echo $feat_image; ?>" class="section-aboutus__img" alt="<?php the_title(); ?>">
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-<?php echo $row; ?>">
                    <div class="section-aboutus__text-content">
                        <h2 class="heading-primary">
                            <?php if($title_1){ ?>
                                <span class="heading-primary__secondary">
                                    <?php echo $title_1; ?>
                                </span>
                            <?php } ?>
                            <span class="heading-primary__main">
                                <?php echo $title_2; ?>
                            </span>
                        </h2>
                        <?php echo $short_description; ?>
                        <a href="<?php the_permalink(); ?>" class="btn-main"><span><?php echo $read_more_title; ?> &RightArrow;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } wp_reset_query(); wp_reset_postdata(); ?>