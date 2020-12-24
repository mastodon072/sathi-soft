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
			<?php 

			while(have_posts()){
				the_post();
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );


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