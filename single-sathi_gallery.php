<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sathisoft
 */

get_header();

if(have_posts()){

		the_post();
	
		?>

		<!-- InnerPage Banner  -->
		<?php 
   			//get_template_part( 'template-parts/header/content', 'innerhead' ); 
		?>
		<?php 
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

		<main class="news-detail-content">
			<div class="container">
				<div class="row">
					
					<div class="col-md-8">
						<article class="news-detail">
							<header class="news-detail__header">
								<h2 class="news-detail__heading"><?php the_title(); ?></h2>
								<section class="news-detail__metadata">
									<time class="news-detail__published-date" datetime="2020-08-03"><i class="far fa-clock"></i><?php echo get_the_date('j M, Y'); ?></time>
									<span class="news-detail__author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="far fa-user"></i><?php echo get_the_author(); ?></a></span>
								</section>
							</header>
							<section class="news-detail__body">
								<?php the_content(); ?>
                            <!-- <div class="news-detail__image-thumbnail">
                                <ul class="image-thumbnail" id="image-thumbnail">
                                    <li class="image-thumbnail__box">
                                        <a href="image/Banner-img-1.jpg" class="image-thumbnail__link" target="_blank" class="thumbnail"><img class="image-thumbnail__image" src="image/Banner-img-1.jpg" alt=""></a>
                                    </li>
                                    <li class="image-thumbnail__box">
                                        <a href="image/Banner-img-2.jpg" class="image-thumbnail__link" target="_blank" class="thumbnail"><img class="image-thumbnail__image" src="image/Banner-img-2.jpg" alt=""></a>
                                    </li>
                                    <li class="image-thumbnail__box">
                                        <a href="image/Banner-img-3.jpg" class="image-thumbnail__link" target="_blank" class="thumbnail"><img class="image-thumbnail__image" src="image/Banner-img-3.jpg" alt=""></a>
                                    </li>
                                    <li class="image-thumbnail__box">
                                        <a href="image/Banner-img-1.jpg" class="image-thumbnail__link" target="_blank" class="thumbnail"><img class="image-thumbnail__image" src="image/Banner-img-1.jpg" alt=""></a>
                                    </li>
                                </ul>
                            </div> -->
                            
                            
                            
                            
                            <?php
                            $gallery_images = get_field('gallery_images','');
                            
                            //pre($gallery_images);
                            
                            ?>
                            
                            
                            
                            <div class="news-detail__image-thumbnail">
                                <ul class="image-thumbnail" id="image-thumbnail">
                                <?php foreach($gallery_images as $key => $value){ ?>
                                    <li class="image-thumbnail__box">
                                        <a href="<?php echo $value['image']; ?>" class="image-thumbnail__link" target="_blank" class="thumbnail"><img class="image-thumbnail__image" src="<?php echo $value['image']; ?>" alt=""></a>
                                    </li>
                                    <?php } ?>
                                   
                                </ul>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <?php 
                            $downloadable_file = get_field('downloadable_file','');
                            if($downloadable_file){ 
                            	$down_title = get_theme_mod('down_title','');

                            	if(empty($down_title)){
                            		$down_title = "Download File";
                            	}

                            	?>


                            	<a href="<?php echo $downloadable_file; ?>" class="btn--download btn-text float-right" download><i class="fas fa-download"></i><?php  echo $down_title; ?></a>
                            <?php } ?>

                            <?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' ); ?>

                        </section>
                    </article>
                </div>

                <?php
                
                $sidebartitle = get_theme_mod('sidebartitle','');
                $sidebarcat = $my_setting;



                $sidebar_numberofpost = get_theme_mod('sidebar_numberofpost','');
                if(empty($sidebartitle)){
                	$sidebartitle = get_cat_name( $sidebarcat );
                }
                ?>
                <div class="col-md-4">
                	<aside class="information-sidebar">
                		<h2 class="information-sidebar__heading"><?php echo $sidebartitle; ?></h2>
                		<ul class="information-sidebar__content">
                			<?php 
                			$args=array(
                				'posts_per_page' => $sidebar_numberofpost, 
                				'post_type' => 'post',
                				'cat' => $sidebarcat,
                				'ignore_sticky_posts' => 1
                			);
                			$wp_query = new WP_Query( $args );
                			$k = 1;
                			while($wp_query->have_posts()) {
                				$wp_query->the_post();

                				?>
                				<li href="<?php the_permalink(); ?>" class="information">
                					<a href="<?php the_permalink(); ?>" class="information__link">
                						<time datetime="2020-08-05" class="information__published-date">
                							<span><?php the_time('j'); ?> </span>
                							<span><?php the_time('M'); ?> </span>
                						</time>
                						<div class="information__metadata">
                							<header class="information__title">
                								<?php the_title(); ?>
                							</header>
                						</div>
                					</a>
                				</li>
                			<?php } wp_reset_query(); wp_reset_postdata(); ?>
                			
                			
                		</ul>
                	</aside>
                </div>
            </div>
        </div>
    </main>

    <?php
}
//get_sidebar();
get_footer();
