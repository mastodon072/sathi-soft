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

            $gallery_images = get_field('gallery_images','');
                                $count = count($gallery_images);
                                
				?>

				<div class="col-md-4">
					<a class="news-card" href="<?php the_permalink(); ?>">
						<?php if($feat_image){ ?>
							<div class="news-card__img-box">
								<img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>" class="news-card__img">
							</div>
						<?php } ?>
						<div class="news-card__meta-data">
							<h2 class="news-card__title">
								<?php the_title(); ?>
							</h2>
							<p class="news-card__description">
								<span class="news-card__author"> 
									<i class="far fa-user"></i>
									<?php echo get_the_author(); ?>
								</span>
								 <?php if($count){ ?>
                                                    <span class="gallery__photos-no"><i class="far fa-image"></i></i><?php echo $count; ?> <?php echo $photonum_title; ?></span>
                                                <?php } ?>
								<time class="news-card__upload-date" datetime="2020-11-15"><i class="far fa-clock"></i><?php echo $upload_title; ?> <?php echo get_the_date('j M, Y'); ?></time>
							</p>
						</div>
					</a>
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
</main>




<?php 
}
//get_sidebar();
get_footer();
