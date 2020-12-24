<?php
/**
 * Template Name: Member Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sathisoft
 */

get_header();


if(have_posts()){

	the_post();
	$home_page = get_theme_mod('home_page','');
	$highlight_select_categories = get_theme_mod('highlight_select_categories','');
//    pre($highlight_select_categories);

	
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	$member_post = get_field('member_post');
	$email = get_field('email');
	$telephone = get_field('telephone');
	$mobile = get_field('mobile');

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

	<main class="section-staff-details">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a class="staff" href="#">
						<?php if($feat_image){ ?>
							<div class="staff__img-box">
								<img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>" class="staff__img">
							</div>
						<?php } ?>
						<div class="staff__excerpt">
							<p class="staff__name">
								<?php the_title(); ?>
							</p>
							<?php if($member_post){ ?>
								<p class="staff__designation">
									<?php echo $member_post; ?>
								</p>
							<?php } ?>
							<p class="staff__description">
								<?php if($mobile){ ?>
									<span class="staff__contant-no"><i class="fas fa-mobile-alt"></i><?php echo $mobile; ?></span>
								<?php } if($email){ ?>
									<span class="staff__email"><i class="far fa-envelope"></i><?php echo $email; ?></span>
								<?php } ?>
							</p>
						</div>
					</a>
				</div>
				<div class="col-md-8">
					<div class="staff-details">



						<div class="col-md-12">
							<?php the_content(); ?>
						</div>



					</div>
				</div>

			</div>
		</div>
	</main>

	<?php

	get_template_part( 'template-parts/home/content', 'news-highlight' );

}

//get_sidebar();
get_footer();
