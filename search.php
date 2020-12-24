<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sathisoft
 */

get_header();

$home_page = get_theme_mod('home_page','');
$my_setting = get_theme_mod('my_setting','');

if(have_posts()){

	the_post(); 
	
	
	
	?>
	<section class="inner-page-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="inner-page-banner__heading">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'sathi-soft' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h2>
				</div>
				<div class="col-md-6">
					<h2 class="inner-page-banner__breadcurmbs">

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb float-right">
								<li class="breadcrumb-item"><a href="<?php echo get_the_permalink($home_page); ?>"><?php echo get_the_title($home_page); ?></a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search: %s', 'sathi-soft' ), '<span>' . get_search_query() . '</span>' );
								?></li>
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
					<?php 
					while(have_posts()){
						the_post();
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );


						?>
						<div class="col-md-3">
							<div class="demo-gallery">
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
										<p class="gallery__description">
											<span class="gallery__photos-no"><?php the_excerpt(); ?></span>
											<time class="gallery__upload-date" datetime="2020-11-15"><i class="far fa-clock"></i> <?php echo get_the_date('j M, Y'); ?></time>
										</p>
									</div>
								</a>
							</div>
						</div>
					<?php }   ?>
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
	get_template_part( 'template-parts/home/content', 'news-highlight' );

} else{ ?>

	<section class="inner-page-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="inner-page-banner__heading">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'sathi-soft' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h2>
				</div>
				<div class="col-md-6">
					<h2 class="inner-page-banner__breadcurmbs">

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb float-right">
								<li class="breadcrumb-item"><a href="<?php echo get_the_permalink($home_page); ?>"><?php echo get_the_title($home_page); ?></a></li>
								<li class="breadcrumb-item active" aria-current="page"><?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search: %s', 'sathi-soft' ), '<span>' . get_search_query() . '</span>' );
								?></li>
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
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sathi-soft' ); ?></p>

						<?php
					//get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'sathi-soft' ); ?></h2>
							<ul>
								<?php
								wp_list_categories(
									array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									)
								);
								?>
							</ul>
						</div><!-- .widget -->
						<?php
					/* translators: %1$s: smiley */
					$sathi_soft_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'sathi-soft' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$sathi_soft_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

					</div>
				</div>
			</div>
		</div>
	</main>

<?php }
//get_sidebar();
get_footer();
