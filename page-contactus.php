<?php
/**
 * The template for displaying Contact pages
 * Template Name: Contact Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sathisoft
 */

get_header();

if(have_posts()){

	the_post(); 
	$home_page = get_theme_mod('home_page','');
	$my_setting = get_theme_mod('my_setting','');


	?>
	<section class="inner-page-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="inner-page-banner__heading">
						<?php the_title(); ?>
					</h2>
				</div>
				<div class="col-md-6">
					<h2 class="inner-page-banner__breadcurmbs">

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb float-right">
								<li class="breadcrumb-item"><a href="<?php echo get_the_permalink($home_page); ?>"><?php echo get_the_title($home_page); ?></a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
							</ol>
						</nav>
					</h2>
				</div>
			</div>
		</div>
	</section>
	<main class="section-contactus">

        <div class="container">
            <div class="row">

                <div class="col-md-9">
                     <div class="contact-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="contact__form">
                    	<?php
                    		echo do_shortcode( '[contact-form-7 id="203" title="Contact Us" html_class="form contact-form"]' );
                    	 ?>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <section class="staff-messages">
                                <div class="container-card staff-message">
                                    <?php
                                    $sidebarpage = get_theme_mod('sidebarpage','');
                                    //pre($sidebarpage);
                                    foreach ($sidebarpage as $key => $value) {
                                        $read_title = $value['read_title'];
                                        if(empty($read_title)){
                                            $read_title = "Read More";
                                        }
                                        $pageid = $value['page_link'];
                                        ?>
                                        <div class="card-neo">
                                            <h3 class="staff-message__title">
                                                <?php echo $value['title']; ?>
                                            </h3>
                                            <?php 
                                            $args = array(
                                              'p'         => $pageid, 
                                              'post_type' => 'any'
                                          );
                                            $wp_query = new WP_Query($args);
                                            if($wp_query->have_posts()) {
                                                $wp_query->the_post();
                                                $feat_image  = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                                                if($feat_image){
                                                    $email = get_field('email','');
                                                    $telephone = get_field('telephone','');
                                                    $mobile = get_field('mobile','');
                                                ?>
                                                <div class="imgBx"><img src="<?php echo $feat_image; ?>" alt="Image"></div>
                                            <?php } ?>
                                                <div class="contentBx">
                                                    <h2 class="staff-message__name"><?php the_title(); ?></h2>
                                                    <p class="paragraph--quote"><?php the_excerpt(); ?></p>
                                                    <?php if($email){ ?>
                                                    <p class="contact-text"><i class="fas fa-envelope"></i><?php echo $email; ?></p>
                                                <?php } if($telephone){ ?>
                                                    <p class="contact-text"><i class="fas fa-phone"></i><?php echo $telephone; ?></p>
                                                <?php } if($mobile){ ?>
                                                    <p class="contact-text"><i class="fas fa-mobile-alt"></i><?php echo $mobile; ?></p>
                                                <?php } ?>
                                                    <a href="<?php the_permalink(); ?>" class="btn-text"><?php echo $read_title; ?> &RightArrow;</a>
                                                </div>
                                            <?php } wp_reset_query(); wp_reset_postdata(); ?>
                                            </div>
                                        <?php } 
                                        $facebook_page_link = get_theme_mod('facebook_link','');
                                        if(!empty($facebook_page_link)) { 
                                            $facebookpage_title = get_theme_mod('facebookpage_title','');
                                        ?>
                                        

                                        <div class="card-neo">
                                            <?php if($facebookpage_title){ ?>
                                            <h3 class="staff-message__title">
                                                <?php echo $facebookpage_title; ?>
                                            </h3>
                                        <?php } ?>
                                            <div class="contentBx"> 

                                                <div class="fb-page" data-href="<?php echo $facebook_page_link; ?>" data-tabs="timeline" data-width="300" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo $facebook_page_link; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $facebook_page_link; ?>"><?php bloginfo('name'); ?></a></blockquote></div>


                                                <!-- <p class="paragraph">Magnam, alias corporis illum at quam, unde nesciunt placeat aliquam exercitationem sequi, dolores quisquam dolore</p> -->
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </section>
                </div>

            </div>
        </div>
    </main>














	<?php

	get_template_part( 'template-parts/home/content', 'news-highlight' );


}
get_footer();
