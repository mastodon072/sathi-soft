<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sathisoft
 */

get_header();
?>

<?php 
//$my_section = get_theme_mod('my_section','');
//pre($my_section);

$template_parts = get_theme_mod( 'my_section', array( 
        'banner',
        'news-highlight',
        'quick-links',
        'aboutus',
        'main-tab',
        'counter',
        'testimonials',
        'gallery') );

// Loop parts.
foreach ( $template_parts as $template_part ) {
    //get_template_part( 'partial-templates/' . $template_part );
get_template_part( 'template-parts/home/content', $template_part );
}

?>


    <!-- Slider Section -->

    <!-- <div id="banner-slider" class="banner-slider carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri(); ?>/image/Banner-img-1.jpg" class="carousel-img" alt="...">
            <div class="carousel-content">
                <h1 class="carousel-heading">
                    Celebrating World Postal Day 2019
                </h1>
                <p class="carousel-paragraph">
                    This is paragraph
                </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/image/Banner-img-2.jpg" class="carousel-img" alt="...">
            <div class="carousel-content">
                <h1 class="carousel-heading">
                    Visit Nepal 2020
                </h1>
                <p class="carousel-paragraph">
                    This is paragraph
                </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/image/Banner-img-3.jpg" class="carousel-img" alt="...">
            <div class="carousel-content">
                <h1 class="carousel-heading">
                    Heading Text
                </h1>
                <p class="carousel-paragraph">
                    This is paragraph
                </p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#banner-slider" role="button" data-slide="prev">
            <div class="carousel-icon-bg-left">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </div>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#banner-slider" role="button" data-slide="next">
          <div class="carousel-icon-bg-right">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </div>
          <span class="sr-only">Next</span>
        </a>
    </div>
 -->
    <!-- News Ticker -->
    <!-- <div class="news-highlight">
        <div class="ticker-wrap">
            <div class="ticker-heading">News Highlights</div>
            <div class="ticker">
                <div class="ticker__item">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.
                </div>
                <div class="ticker__item">
                    Vice mlkshk crucifix beard chillwave meditation hoodie asymmetrical Helvetica.
                </div>
                <div class="ticker__item">
                    Ugh PBR&B kale chips Echo Park.
                </div>
                <div class="ticker__item">
                    Gluten-free mumblecore chambray mixtape food truck.
                </div>
            </div>
        </div>
    </div>
 -->
    <!-- Section QuickLinks -->
    
    <!-- Section About Us -->
   <!--  <section class="section-aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-aboutus__img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/section-aboutus-img.jpg" class="section-aboutus__img" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-aboutus__text-content">
                        <h2 class="heading-primary">
                            <span class="heading-primary__secondary">
                                The point of using Lorem Ipsum
                            </span>
                            <span class="heading-primary__main">
                                Get to know how we act.
                            </span>
                        </h2>
                        <p class="paragraph">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.
                        </p>
                        <p class="paragraph">
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                        </p>
                        <a href="" class="btn-main"><span>Read More &RightArrow;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 -->


    <!-- <section class="counter-cards">
        <div class="container">
            <div class="row">
                <div class="container-card">
                    <div class="col-md-3">
                        <div href="#" class="card-neo">
                            <div class="imgBx">
                                <i class="fas fa-university"></i>
                            </div>
                            <div class="contentBx">
                                <h2 class="counter-card__number">420</h2>
                                <p class="paragraph">Online Course</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div href="#" class="card-neo">
                            <div class="imgBx">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="contentBx">
                                <h2 class="counter-card__number">200</h2>
                                <p class="paragraph">Tutors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div href="#" class="card-neo">
                            <div class="imgBx">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="contentBx">
                                <h2 class="counter-card__number">320</h2>
                                <p class="paragraph">Students taught</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div href="#" class="card-neo">
                            <div class="imgBx">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div class="contentBx">
                                <h2 class="counter-card__number">480</h2>
                                <p class="paragraph">Sucess Stories</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 -->
    <!-- <section class="section-testimonials">
        <div class="container">
            <div class="row">
                <h2 class="heading-secondary text-center">
                    Testimonials
                </h2>
                <div class="glider-contain">
                    <div class="testimonials">
                        <div class="glider">
                            <div class="testimonial">
                                <div class="testimonial__excerpt">
                                    <div class="testimonial__img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/user-img.jpg" alt="" class="testimonial__img">
                                    </div>
                                    <div class="testimonial__user-details">
                                        <p class="testimonial__user-name">
                                            Jhon Doe
                                        </p>
                                        <p class="testimonial__user-post">
                                            Creative Director
                                        </p>
                                        <span class="testimonial__user-ratings">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </span>
                                    </div>


                                </div>
                                <p class="testimonial__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quis illo asperiores distinctio saepe, repellat nisi ratione molestiae excepturi eaque temporibus iure suscipit! Atque necessitatibus facilis culpa labore temporibus nesciunt.
                                </p>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial__excerpt">
                                    <div class="testimonial__img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/user-img.jpg" alt="" class="testimonial__img">
                                    </div>
                                    <div class="testimonial__user-details">
                                        <p class="testimonial__user-name">
                                            Jhon Doe
                                        </p>
                                        <p class="testimonial__user-post">
                                            Creative Director
                                        </p>
                                        <span class="testimonial__user-ratings">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </span>
                                    </div>


                                </div>
                                <p class="testimonial__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quis illo asperiores distinctio saepe, repellat nisi ratione molestiae excepturi eaque temporibus iure suscipit! Atque necessitatibus facilis culpa labore temporibus nesciunt.
                                </p>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial__excerpt">
                                    <div class="testimonial__img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/user-img.jpg" alt="" class="testimonial__img">
                                    </div>
                                    <div class="testimonial__user-details">
                                        <p class="testimonial__user-name">
                                            Jhon Doe
                                        </p>
                                        <p class="testimonial__user-post">
                                            Creative Director
                                        </p>
                                        <span class="testimonial__user-ratings">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </span>
                                    </div>


                                </div>
                                <p class="testimonial__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quis illo asperiores distinctio saepe, repellat nisi ratione molestiae excepturi eaque temporibus iure suscipit! Atque necessitatibus facilis culpa labore temporibus nesciunt.
                                </p>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial__excerpt">
                                    <div class="testimonial__img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/user-img.jpg" alt="" class="testimonial__img">
                                    </div>
                                    <div class="testimonial__user-details">
                                        <p class="testimonial__user-name">
                                            Jhon Doe
                                        </p>
                                        <p class="testimonial__user-post">
                                            Creative Director
                                        </p>
                                        <span class="testimonial__user-ratings">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </span>
                                    </div>


                                </div>
                                <p class="testimonial__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quis illo asperiores distinctio saepe, repellat nisi ratione molestiae excepturi eaque temporibus iure suscipit! Atque necessitatibus facilis culpa labore temporibus nesciunt.
                                </p>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial__excerpt">
                                    <div class="testimonial__img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/user-img.jpg" alt="" class="testimonial__img">
                                    </div>
                                    <div class="testimonial__user-details">
                                        <p class="testimonial__user-name">
                                            Jhon Doe
                                        </p>
                                        <p class="testimonial__user-post">
                                            Creative Director
                                        </p>
                                        <span class="testimonial__user-ratings">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </span>
                                    </div>


                                </div>
                                <p class="testimonial__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quis illo asperiores distinctio saepe, repellat nisi ratione molestiae excepturi eaque temporibus iure suscipit! Atque necessitatibus facilis culpa labore temporibus nesciunt.
                                </p>
                            </div>

                        </div>
                    </div>
                    <button aria-label="Previous" class="glider-prev glider-prev-testimonial">&LeftArrow;</button>
                    <button aria-label="Next" class="glider-next glider-next-testimonial">&RightArrow;</button>
                    <div role="tablist" class="dots"></div>
                </div>
            </div>
        </div>

    </section>
 -->
    <!-- <section class="section-gallery">
        <div class="container">
            <div class="row">
                <h2 class="heading-secondary text-center">
                    Our Gallery
                </h2>
                <div class="glider-contain">
                    <div class="galleries slick-demo slick-demo-lighbox">
                        <a class="gallery" href="#">
                            <div class="gallery__img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/Banner-img-1.jpg" alt="" class="gallery__img">
                            </div>
                            <div class="gallery__excerpt">
                                <p class="gallery__name">
                                    Visit Nepal 2020
                                </p>
                                <p class="gallery__description">
                                    <span class="gallery__photos-no"><i class="far fa-image"></i></i>32 photos in this archive</span>
                                    <time class="gallery__upload-date" datetime="2020-11-15"><i class="far fa-clock"></i>uploaded on 15 Dec, 2020</time>
                                </p>
                            </div>
                        </a>
                        <a class="gallery" href="#">
                            <div class="gallery__img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/Banner-img-2.jpg" alt="" class="gallery__img">
                            </div>
                            <div class="gallery__excerpt">
                                <p class="gallery__name">
                                    DPO &dash; Annual Press Conference
                                </p>
                                <p class="gallery__description">
                                    <span class="gallery__photos-no"><i class="far fa-image"></i></i>15 photos in this archive</span>
                                    <time class="gallery__upload-date" datetime="2020-11-15"><i class="far fa-clock"></i>uploaded on 15 Nov, 2020</time>
                                </p>
                            </div>
                        </a>
                        <a class="gallery" href="#">
                            <div class="gallery__img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/Banner-img-3.jpg" alt="" class="gallery__img">
                            </div>
                            <div class="gallery__excerpt">
                                <p class="gallery__name">
                                    DPO &dash; Annual Press Conference
                                </p>
                                <p class="gallery__description">
                                    <span class="gallery__photos-no"><i class="far fa-image"></i></i>14 photos in this archive</span>
                                    <time class="gallery__upload-date" datetime="2020-11-15"><i class="far fa-clock"></i>uploaded on 15 Nov, 2020</time>
                                </p>
                            </div>
                        </a>
                        <a class="gallery" href="#">
                            <div class="gallery__img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/Banner-img-1.jpg" alt="" class="gallery__img">
                            </div>
                            <div class="gallery__excerpt">
                                <p class="gallery__name">
                                    DPO &dash; Annual Press Conference
                                </p>
                                <p class="gallery__description">
                                    <span class="gallery__photos-no"><i class="far fa-image"></i></i>14 photos in this archive</span>
                                    <time class="gallery__upload-date" datetime="2020-11-15"><i class="far fa-clock"></i>uploaded on 15 Nov, 2020</time>
                                </p>
                            </div>
                        </a>
                        <a class="gallery" href="#">
                            <div class="gallery__img-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/Banner-img-2.jpg" alt="" class="gallery__img">
                            </div>
                            <div class="gallery__excerpt">
                                <p class="gallery__name">
                                    DPO &dash; Annual Press Conference
                                </p>
                                <p class="gallery__description">
                                    <span class="gallery__photos-no"><i class="far fa-image"></i></i>14 photos in this archive</span>
                                    <time class="gallery__upload-date" datetime="2020-11-15"><i class="far fa-clock"></i>uploaded on 15 Nov, 2020</time>
                                </p>
                            </div>
                        </a>
                </div>
                </div>

                </div>
            </div>
        </div>
    </section> -->
<?php
//get_sidebar();
get_footer();
