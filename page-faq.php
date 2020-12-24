<?php
/**
 * The template for displaying FAQs pages
 * Template Name: FAQ Page
 * This is the template that displays all Faq pages.
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



    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="row">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <section class="section-faq">
                        <div class="accordion" id="faq">
                            <?php
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

                    query_posts( 
                        array ( 
                            'post_type' => 'post', 
                            'order' => 'DESC',
                            'posts_per_page' => $num_of_post,
                            'cat' => $select_category,
                            'paged' => $paged ) 
                    ); $k = 1;     

                    while(have_posts()){
                        the_post();
                        //$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );


                        ?>

                            <div class="card">
                                <div class="card-header" id="faqhead<?php echo $k; ?>">
                                    <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq<?php echo $k; ?>" aria-expanded="true" aria-controls="faq<?php echo $k; ?>">
                                        <?php the_title(); ?>
                                    </a>
                                    <i class="fas fa-angle-down"></i>
                                </div>
                                <div id="faq<?php echo $k; ?>" class="collapse <?php echo $active = ($k == 1)?"show":""; ?>" aria-labelledby="faqhead<?php echo $k; ?>" data-parent="#faq">
                                    <div class="card-body">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>

                            <?php $k++; } ?>
                   <div class="col-md-12 col-sm-12">
                    <?php if (function_exists("pagination")) {
                        pagination();
                    } ?>
                   </div>
                   <?php wp_reset_query(); ?>





                            
                           
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </main>


    <?php

    get_template_part( 'template-parts/home/content', 'news-highlight' );


}
get_footer();
