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
	$home_page = get_theme_mod('home_page','');
	$highlight_select_categories = get_theme_mod('highlight_select_categories','');
//    pre($highlight_select_categories);

	
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					$member_post = get_field('member_post');
					$email = get_field('email');
					$telephone = get_field('telephone');
					$mobile = get_field('mobile');
					$experience_title = get_field('experience_title','');
					$experience_description = get_field('experience_description','');
					$academic_title = get_field('academic_title','');
					$academic_description = get_field('academic_description','');
					$recognition_title = get_field('recognition_title','');
					$recognition_description = get_field('recognition_description','');
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
            	<div class="col-md-12">
            		<?php the_content(); ?>
            	</div>
                <div class="col-md-3">
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
                <div class="col-md-9">
                    <div class="staff-details">
                        <section class="content-tab">          
                            <!-- START TABS DIV -->
                            <div class="tabbable-responsive">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    	<?php if($experience_title){ ?>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true"><i class="fas fa-newspaper"></i><?php echo $experience_title; ?></a>
                                        </li>
                                    <?php } if($academic_title){ ?>
                                        <li class="nav-item">
                                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false"><i class="fas fa-info-circle"></i>
                                            	<?php echo $academic_title; ?></a>
                                        </li>
                                        <?php } if($experience_title){ ?>
                                        <li class="nav-item">
                                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false"><i class="fas fa-user-tie"></i><?php echo $recognition_title; ?></a>
                                         </li>
                                     <?php } ?>
                                    </ul>
                                </div>
                            </div>
                                   <?php if($experience_description){ ?> 
                            <div class="tab-content">
                                <div class="tab-pane fade show active" class="staff-experience" id="first" role="tabpanel" aria-labelledby="first-tab">
                                	<?php echo $experience_description ?>
                                   
                                </div>
                            <?php }  if($academic_description){ ?> 
                                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                                	<?php echo $academic_description; ?>
                                    
                                </div>
                                <?php }  if($recognition_description){ ?> 
                                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                                	<?php echo $recognition_description; ?>
                                    
                                </div>
                            <?php } ?>
                            </div>
                            <!-- END TABS DIV -->
                        </section>
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
