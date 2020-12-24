<?php
/**
 * The template for displaying Gallery pages
 * Template Name: Gallery Page
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

	$select_category = get_field('select_category','');
	$num_of_post = get_field('num_of_post','');
	if(empty($num_of_post)){
		$num_of_post = 12;
	}
	$numberofwords = get_field('numberofwords','');
	if(empty($numberofwords)){
		$numberofwords = 10;
	}
	
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




	<main class="gallery-archive">
		<div class="galleries">
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<?php the_content(); ?>
					</div>

					<?php 
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

					query_posts( 
						array ( 
							'post_type' => 'post', 
							'order' => 'DESC',
							'posts_per_page' => $num_of_post,
							'cat' => $select_category,
							'paged' => $paged ) 
					);      

					while(have_posts()){
						the_post();
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );


						?>

						<div class="col-md-3">
							<div class="slick-demo-gallery">
								<a class="gallery" href="<?php the_permalink(); ?>">
									<?php if($feat_image){ ?>
										<div class="gallery__img-box">
											<img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>" class="gallery__img">
										</div>
									<?php } ?>
									<div class="gallery__excerpt">
										<p class="gallery__name">
											<?php the_title(); ?>
										</p>
										<div class="gal_excerpt">
											<p><?php echo wp_trim_words( get_the_excerpt(), $numberofwords, '...' ); ?>
										</p>
									</div>
									<?php  if (has_block('gallery', $post->post_content)) {


										$post_blocks = parse_blocks($post->post_content);

										foreach ($post_blocks as $key => $values) {
											if (in_array("core/gallery", $values)) {

												$photonum_title = get_theme_mod('photonum_title','');
												$upload_title = get_theme_mod('upload_title','');



												$gal_image = $values['attrs']['ids'];

                                                    //pre($gal_image);

												$count = count($gal_image);
                                                    /*pre($count);
                                                    

                                                    
                                                    foreach ($gal_image as $key => $value) {
                                                        
                                                       pre(count($gal_image));
                                                 
                                                   }*/


                                               }

                                           }






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
                           </div>
                       </div>
                   <?php } ?>
                   <div class="col-md-12 col-sm-12">
                   	<?php if (function_exists("pagination")) {
                   		pagination();
                   	} ?>
                   </div>
                   <?php wp_reset_query(); ?>

               </div>

           </div>
       </div>
   </div>
</main>


<?php

get_template_part( 'template-parts/home/content', 'news-highlight' );


}
get_footer();
