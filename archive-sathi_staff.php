<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sathisoft
 */

get_header();
if ( have_posts() ) {
	$home_page = get_theme_mod('home_page','');
	?>


	<section class="inner-page-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="inner-page-banner__heading">
						<?php the_archive_title(); ?>
					</h2>
				</div>
				<div class="col-md-6">
					<h2 class="inner-page-banner__breadcurmbs">

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb float-right">
								<li class="breadcrumb-item"><a href="<?php echo get_the_permalink($home_page); ?>"><?php echo get_the_title($home_page); ?></a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php the_archive_title(); ?></li>
							</ol>
						</nav>
					</h2>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$numberofwords = get_theme_mod('archive_numberofwords','');
	if(empty($numberofwords)){
		$numberofwords = 10;
	}
	$photonum_title = get_theme_mod('photonum_title','');
	$upload_title = get_theme_mod('upload_title','');

	?>

	
	<main class="news-grid-archive">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php the_archive_description(); ?>
				</div>
				<?php 
				while(have_posts()){
					the_post();
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					$member_post = get_field('member_post');
					$email = get_field('email');
					$telephone = get_field('telephone');
					$mobile = get_field('mobile');

					?>


					<div class="col-md-3">
						<a class="staff" href="<?php the_permalink(); ?>">
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
									<?php } ?>
									<?php if($email){ ?>
										<span class="staff__email"><i class="far fa-envelope"></i><?php echo $email; ?></span>
									<?php } ?>
								</p>
							</div>
						</a>
					</div>
					<?php 
				}
				?>

				<div class="col-md-12 col-sm-12">
					<?php if (function_exists("pagination")) {
						pagination();
					} ?>
				</div>

			</div>
		</div>
	</div>
</main>




<?php 
}
//get_sidebar();
get_footer();
