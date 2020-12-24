<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sathisoft
 */

get_header();


// get the current taxonomy term
$term = get_queried_object();
$gallery_type_style = get_field('gallery_type_style',$term);
$table_type_style = get_field('table_type_style',$term);
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
	 <?php if ( have_posts() ) { ?>
<?php if($gallery_type_style){ 
get_template_part( 'template-parts/archive/content', 'gallery' );

} elseif($table_type_style){
get_template_part( 'template-parts/archive/content', 'table' );

} else{
get_template_part( 'template-parts/archive/content', 'news' );

}


    get_template_part( 'template-parts/home/content', 'news-highlight' );


}
//get_sidebar();
get_footer();
