<?php 
$show_sidebar_archive = get_theme_mod('show_sidebar_archive','');

$row = 12;
if($show_sidebar_archive){
	$row=9;
}


$down_title = get_theme_mod('down_title','');


if(empty($down_title)){
	$down_title = "Download File";
}



?>

<main class="news-archive">
	<div class="container">
		<div class="row">


			<div class="col-md-<?php echo $row; ?>">
				<div class="news-section">
					<div class="news-section__container">
						<?php 


						while(have_posts()){
							the_post();
							$downloadable_file = get_field('downloadable_file','');

							?>


							<div href="<?php the_permalink(); ?>" class="news-item">
								<time datetime="2020-08-05" class="news-item__published-date">
									<span><?php the_time('j'); ?> </span>
									<span><?php the_time('M'); ?> </span>

								</time>
								<div class="news-item__excerpt">
									<header class="news-item__heading">
										<a href="<?php the_permalink(); ?>" class="news-item__heading-link"><?php the_title(); ?></a>
									</header>
									<time class="news-item__published-times-ago" datetime="2020-08-03"><i class="far fa-clock"></i><?php k99_relative_time(); ?></time>
									<div class="news-item__footer-content">
										<?php 
										if (has_block('gallery', $post->post_content)) {
											$post_blocks = parse_blocks($post->post_content);

                                                        //pre($post_blocks);

											?>
											<ul class="image-thumbnail" id="image-thumbnail">
												<?php 



												foreach ($post_blocks as $key => $values) {
													if (in_array("core/gallery", $values)) {

														$gal_image = $values['attrs']['ids'];
														$cnt = 1;
														if($gal_image){
														foreach ($gal_image as $key => $val) { 
															$img_atts = wp_get_attachment_image_src($val, 'full');
															if($cnt<=4){

																?>
																<li class="image-thumbnail__box">
																	<a href="<?php echo $img_atts[0]; ?>" class="image-thumbnail__link" target="_blank" class="thumbnail"><img class="image-thumbnail__image" src="<?php echo $img_atts[0]; ?>" alt=""></a>
																</li>
																<?php $cnt++;
															} }
														}

														}
													} 

													?>



												</ul>
											<?php } if($downloadable_file){ ?>
												<a href="<?php echo $downloadable_file; ?>" class="btn-text btn--download" download><i class="fas fa-download"></i><?php echo $down_title; ?></a>
											<?php } ?>
										</div>
									</div>
								</div>

							<?php } ?>

							<?php //wp_reset_query(); ?>

						</div>
						<div class="section__pagination text-center">

							<?php if (function_exists("pagination")) {
								pagination();
							} ?>

						</div>
					</div>
				</div>


				<?php if($show_sidebar_archive){ ?>			
					<div class="col-md-3">
						<section class="staff-messages">
        <div class="container-card staff-message">
            <?php
            $read_title = get_theme_mod('raed_more_title','');
            if(empty($read_title)){
                $read_title = "Read More";
            }

            $staff_numberofpost = get_theme_mod('staff_numberofpost','');
            $args=array(
                'posts_per_page' => $staff_numberofpost, 
                'post_type' => 'sathi_staff',
                'ignore_sticky_posts' => 1
            );
            $wp_query = new WP_Query($args);
            if($wp_query->have_posts()) {
                $k=1;
                while ($wp_query->have_posts()) {
                    $wp_query->the_post();
                    $htitle = get_field('home_page_title','');
                    if($k==1){
                    ?>
                    <div class="card-neo">
                        <h3 class="staff-message__title">
                            <?php echo $htitle; ?>
                        </h3>
                        <?php 
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

                            <a href="<?php the_permalink(); ?>" class="btn-text"><?php echo $read_title; ?> &RightArrow;</a>
                        </div>

                    </div>
                    <?php } if($k>1){ ?>
                    
                    
                    <div class="card-neo">
                        <h3 class="staff-message__title">
                            <?php echo $htitle; ?>
                        </h3>
                        <?php 
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
                            


                            <?php if($email){ ?>
                                <p class="contact-text"><i class="fas fa-envelope"></i><?php echo $email; ?></p>
                            <?php } if($telephone){ ?>
                                <p class="contact-text"><i class="fas fa-phone"></i><?php echo $telephone; ?></p>
                            <?php } if($mobile){ ?>
                                <p class="contact-text"><i class="fas fa-mobile-alt"></i><?php echo $mobile; ?></p>
                            <?php } ?>
                            <a href="<?php the_permalink(); ?>" class="btn-text"><?php echo $read_title; ?> &RightArrow;</a>
                        </div>

                    </div>
                    
                    <?php } ?>
                    <?php $k++; } } wp_reset_query(); wp_reset_postdata(); ?>
                    
                </div>
            </section>
					</div>
				<?php } ?>
			</div>
		</div>
	</main>
	<?php ?>