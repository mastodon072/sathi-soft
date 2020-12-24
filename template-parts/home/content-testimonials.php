    <?php
    $test_title = get_theme_mod('test_title','');
    $testcat = get_theme_mod('testcat','');
    $test_numberofpost = get_theme_mod('test_numberofpost','');
    ?>
    <section class="section-testimonials">
        <div class="container">
            <div class="row">
                <?php if($test_title){ ?>
                    <h2 class="heading-secondary text-center">
                        <?php echo $test_title; ?>
                    </h2>
                <?php } ?>
                <div class="glider-contain">
                    <div class="testimonials">
                        <div class="glider">
                            <?php 
                            $args=array(
                                'posts_per_page' => $test_numberofpost, 
                                'post_type' => 'sathi_testimonial',
                                'ignore_sticky_posts' => 1
                            );
                            $wp_query = new WP_Query( $args );
                            if($wp_query->have_posts()){
                                while($wp_query->have_posts()) {
                                    $wp_query->the_post();
                                    $feat_image  = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                    $memberpost = get_field('post','');
                                    $memberstar = get_field('star','');

                                    $star = '<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>';

                                    if($memberstar==0){
                                        $star = '<span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>';
                                    }

                                    if($memberstar==1){
                                        $star = '<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>';
                                    }

                                    if($memberstar==2){
                                        $star = '<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>';
                                    }

                                    if($memberstar==3){
                                        $star = '<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>';
                                    }

                                    if($memberstar==4){
                                        $star = '<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>';
                                    }
                                    if($memberstar==5){
                                        $star = '<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>';
                                    }

                                    ?>
                                    <div class="testimonial">
                                        <div class="testimonial__excerpt">
                                            <?php if($feat_image){ ?>
                                                <div class="testimonial__img-box">
                                                    <img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>" class="testimonial__img">
                                                </div>
                                            <?php } ?>
                                            <div class="testimonial__user-details">
                                                <p class="testimonial__user-name">
                                                    <?php the_title(); ?>
                                                </p>
                                                <?php if($memberpost){ ?>
                                                    <p class="testimonial__user-post">
                                                        <?php echo $memberpost; ?>
                                                    </p>
                                                <?php } ?>
                                                <span class="testimonial__user-ratings">
                                                    <?php echo $star; ?>
                                                </span>
                                            </div>


                                        </div>
                                        <p class="testimonial__text">
                                            <?php echo get_the_content(); ?>
                                        </p>
                                    </div>
                                <?php } } wp_reset_query(); wp_reset_postdata(); ?>
                                
                            </div>
                        </div>
                        <button aria-label="Previous" class="glider-prev glider-prev-testimonial">&LeftArrow;</button>
                        <button aria-label="Next" class="glider-next glider-next-testimonial">&RightArrow;</button>
                        <div role="tablist" class="dots"></div>
                    </div>
                </div>
            </div>

        </section>