<?php
/**
 * The template for displaying table pages
 * Template Name: Table Page
 * This is the template that displays all table pages by default.
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

<?php 
$row = 12;
$page_sidebar = get_field('page_sidebar');
if($page_sidebar){
    $row=9;
    }

?>

    <main class="section-tables">
        <div class="container">
            <div class="row">
            		<div class="col-md-12">
						<?php the_content(); ?>
					</div>

                <div class="col-md-<?php echo $row; ?>">
                    <table class="table">
                    <?php 
                        
                    ?>
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col"><?php echo get_field('title_1',''); ?></th>
                            <th scope="col"><?php echo get_field('title_2',''); ?></th>
                            <th scope="col"><?php echo get_field('title_3',''); ?></th>
                            <th scope="col"><?php echo get_field('title_4',''); ?></th>
                            <th scope="col"><?php echo get_field('title_5',''); ?></th>
                          </tr>
                        </thead>
                        <tbody>
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
                    $k=1;
                    $down_title = get_theme_mod('down_title','');

                    if(empty($down_title)){
                    $down_title = "Download File";
                    }
					while(have_posts()){
						the_post();
						$downloadable_file = get_field('downloadable_file','');
                                        
					
                        ?>
                          <tr>
                            <th scope="row"><?php echo $k; ?></th>
                            <td><?php echo get_field('field_1',''); ?></td>
                            <td><?php echo get_field('field_2',''); ?></td>
                            <td><?php echo get_field('field_1',''); ?></td>
                            
                            <td>
                            <?php if($downloadable_file){ ?>
                            <a href="<?php echo $downloadable_file; ?>" class="btn-text btn--download" download><i class="fas fa-download"></i><?php echo $down_title; ?></a>
                            <?php } ?>
                            </td>
                          </tr>
                          <?php $k++; } ?>
                          
                        </tbody>
                    </table>
                    <div class="section__pagination text-center">
                        
                   	<?php if (function_exists("pagination")) {
                   		pagination();
                   	} ?>
                   
                   <?php wp_reset_query(); ?>
                </div>
                </div>
                <?php if($page_sidebar){ ?>
                <div class="col-md-3">
                    <section class="staff-messages">
                        <div class="container-card staff-message">
                        
                        <?php
                                    $sidebarpage = get_theme_mod('sidebarpage','');
                                    //pre($sidebarpage);
                                    foreach ($sidebarpage as $key => $value) {
                                        $read_title = $value['read_title'];
                                        if(empty($read_title)){
                                            $read_title = "Read More";
                                        }
                                        $pageid = $value['page_link'];
                                        ?>
                                        <div class="card-neo">
                                            <h3 class="staff-message__title">
                                                <?php echo $value['title']; ?>
                                            </h3>
                                            <?php 
                                            $args = array(
                                              'p'         => $pageid, 
                                              'post_type' => 'any'
                                          );
                                            $wp_query = new WP_Query($args);
                                            if($wp_query->have_posts()) {
                                                $wp_query->the_post();
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
                                                    <?php if($email){ ?>
                                                    <p class="contact-text"><i class="fas fa-envelope"></i><?php echo $email; ?></p>
                                                <?php } if($telephone){ ?>
                                                    <p class="contact-text"><i class="fas fa-phone"></i><?php echo $telephone; ?></p>
                                                <?php } if($mobile){ ?>
                                                    <p class="contact-text"><i class="fas fa-mobile-alt"></i><?php echo $mobile; ?></p>
                                                <?php } ?>
                                                    <a href="<?php the_permalink(); ?>" class="btn-text"><?php echo $read_title; ?> &RightArrow;</a>
                                                </div>
                                            <?php } wp_reset_query(); wp_reset_postdata(); ?>
                                            </div>
                                        <?php } ?>
                        </div>
                    </section>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
<?php
get_template_part( 'template-parts/home/content', 'news-highlight' );
}
get_footer();
