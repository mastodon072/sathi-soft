<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sathisoft
 */

?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php if (is_active_sidebar('footer-1')) { ?>

                    <?php dynamic_sidebar('footer-1'); ?>

                <?php } ?>
                <!-- <h4 class="footer__heading">Downloads</h4>
                    <ul class="footer__content">
                        <li class="footer__legal-item"><a href="#" class="footer__link">Terms &amp; conditions</a></li>
                        <li class="footer__legal-item"><a href="#" class="footer__link">Privacy policy</a></li>
                        <li class="footer__legal-item"><a href="#" class="footer__link">Cookie policy</a></li>
                        <li class="footer__legal-item"><a href="#" class="footer__link">Contact us</a></li>
                    </ul> -->
            </div>
            <div class="col-md-3">
                <?php if (is_active_sidebar('footer-2')) { ?>

                    <?php dynamic_sidebar('footer-2'); ?>

                <?php } ?>
                <!--                     <h4 class="footer__heading">Quick Links</h4>
                    <ul class="footer__content">
                        <li class="footer__legal-item"><a href="#" class="footer__link">Terms &amp; conditions</a></li>
                        <li class="footer__legal-item"><a href="#" class="footer__link">Privacy policy</a></li>
                        <li class="footer__legal-item"><a href="#" class="footer__link">Cookie policy</a></li>
                        <li class="footer__legal-item"><a href="#" class="footer__link">Contact us</a></li>
                    </ul> -->
            </div>
            <div class="col-md-3">
                <!-- <h4 class="footer__heading">Extra Links</h4>
                    <ul class="footer__content">
                        <li class="footer__legal-item"><a href="#" class="footer__link">Terms &amp; conditions</a></li>
                        <li class="footer__legal-item"><a href="#" class="footer__link">Privacy policy</a></li>
                        <li class="footer__legal-item"><a href="#" class="footer__link">Cookie policy</a></li>
                        <li class="footer__legal-item"><a href="#" class="footer__link">Contact us</a></li>
                    </ul> -->
                <?php if (is_active_sidebar('footer-3')) { ?>

                    <?php dynamic_sidebar('footer-3'); ?>

                <?php } ?>
            </div>
            <div class="col-md-3">
                <?php if (is_active_sidebar('footer-4')) { ?>

                    <?php dynamic_sidebar('footer-4'); ?>

                <?php } ?>
                <!-- <h4 class="footer__heading">Contact</h4>
                    <ul class="footer__contacts">
                        <li class="footer__contact">

                            <span class="contact__info"><i class="fas fa-envelope"></i>info@dand.dpo.com</span>
                        </li>
                        <li class="footer__contact">
                            <span class="contact__info"><i class="fas fa-phone"></i>020 XXX XXXX</span>
                        </li>
                        <li class="footer__contact">

                            <span class="contact__info"><i class="fas fa-map-marker-alt"></i>Dang-4, Hattisar</span>
                        </li>
                    </ul> -->
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <span class="footer__copyright-text col-md-6">
                    &copy; <script>
                        document.write(new Date().getFullYear());
                    </script> All copyrights claimed by <?php echo bloginfo("name"); ?>
                </span>
                <span class="footer__developedby col-md-6">
                    <a target="_blank" href="https://sathisoft.com">SathiSoft</a>
                </span>
            </div>
        </div>

    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/libraries/glider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/libraries/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/libraries/slick-lightbox.js"></script>
<script type="text/javascript">
    $('.image-thumbnail').slickLightbox();
</script>

<script>
    new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        draggable: true,
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },
        responsive: [{
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    duration: 0.25
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    duration: 0.25
                }
            }, {
                // screens greater than >= 1200
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    duration: 0.25
                }
            }
        ]
    });
</script>
<script type="text/javascript">
    $('.slick-demo-lighbox').slickLightbox({
        images: ['http://placekitten.com/1000/600', 'http://placekitten.com/1010/606', 'http://placekitten.com/1060/636']
    });

    $('.slick-demo').slick({
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
<?php wp_footer(); ?>

</body>

</html>