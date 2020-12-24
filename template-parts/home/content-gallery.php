<?php 
$gallery_title = get_theme_mod('gallery_title','');
$gallerycat = get_theme_mod('gallerycat','');
$gallery_numberofpost = get_theme_mod('gallery_numberofpost','');
$photonum_title = get_theme_mod('photonum_title','');
$upload_title = get_theme_mod('upload_title','');
?>
<section class="section-gallery">
    <div class="container">
        <div class="row">
            <?php if($gallery_title){ ?>
                <a style="margin: auto;" href="<?php echo get_post_type_archive_link( 'sathi_gallery' ); ?>"><h2 class="heading-secondary text-center">
                    <?php echo $gallery_title; ?>
                </h2></a>
            <?php } ?>
            <div class="glider-contain">
                <div class="galleries slick-demo"> <!-- slick-demo-lighbox -->
                    <?php 
                    $args=array(
                        'posts_per_page' => $gallery_numberofpost, 
                        'post_type' => 'sathi_gallery',
                        'ignore_sticky_posts' => 1
                    );
                    $wp_query = new WP_Query( $args );
                    if($wp_query->have_posts()){
                        while($wp_query->have_posts()) {
                            $wp_query->the_post();
                            $feat_image  = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            if($feat_image){
                                $gallery_images = get_field('gallery_images','');
                                $count = count($gallery_images);
                                
                                ?>
                                <a class="gallery" href="<?php the_permalink(); ?>">
                                    <div class="gallery__img-box">
                                        <img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>" class="gallery__img">
                                    </div>
                                    <div class="gallery__excerpt">
                                        <p class="gallery__name">
                                            <?php the_title(); ?>
                                        </p>
                                        <?php  if ($count) {
                                            /*$post_blocks = parse_blocks($post->post_content);

                                            foreach ($post_blocks as $key => $values) {
                                                if (in_array("core/gallery", $values)) {



                                                    $gal_image = $values['attrs']['ids'];

                                                    

                                                    $count = count($gal_image);
                                                    


                                                }

                                            }*/






                                            ?>

                                            <p class="gallery__description">
                                                <?php if($count){ ?>
                                                    <span class="gallery__photos-no"><i class="far fa-image"></i></i><?php echo $count; ?> <?php echo $photonum_title; ?></span>
                                                <?php } ?>
                                                <time class="gallery__upload-date" datetime="2020-11-15"><i class="far fa-clock"></i><?php echo $upload_title; ?> <?php echo get_the_date('j M, Y'); ?></time>
                                            </p>
                                        <?php } ?>
                                    </div>
                                </a>
                            <?php } } } wp_reset_query(); wp_reset_postdata(); ?>




                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>