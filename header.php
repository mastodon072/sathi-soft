<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sathisoft
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/image/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/image/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/image/favicon/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=1654364331336973&autoLogAppEvents=1" nonce="at558Out"></script>

<body <?php body_class(); ?>>

	<!-- Top Header -->
	<section class="section-top">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<ul class="social-medias">
						<?php
						$facebook_page_link = get_theme_mod('facebook_link', '');
						$twitter_link = get_theme_mod('twitter_link', '');

						$instagram_link = get_theme_mod('insta_link', '');
						$youtube_link = get_theme_mod('youtube_link', '');
						$linkedin_link = get_theme_mod('linkedin_link', '');
						?>
						<?php if (!empty($facebook_page_link)) { ?>
							<li class="social-medias__item">
								<a href="<?php echo $facebook_page_link; ?>" class="social-medias__link"><i class="fab fa-facebook-f"></i></a>
							</li>
						<?php }
						if (!empty($twitter_link)) { ?>
							<li class="social-medias__item">
								<a href="<?php echo $twitter_link; ?>" class="social-medias__link"><i class="fab fa-twitter"></i></a>
							</li>
						<?php }
						if (!empty($instagram_link)) { ?>
							<li class="social-medias__item">
								<a href="<?php echo $instagram_link; ?>" class="social-medias__link"><i class="fab fa-instagram"></i></a>
							</li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-md-7">
					<div class="accessibility float-right">
						<ul class="accessibility-font">
							<li class="accessibility-font__item">
								<input type="radio" name="accessibility" id="site-font-small" class="site-font-small">
								<label for="site-font-small" class="accessibility-font__link accessibility-font__link--small">A&dash;</label>
							</li>
							<li class="accessibility-font__item">
								<input type="radio" name="accessibility" id="site-font-normal" class="site-font-normal" checked>
								<label for="site-font-normal" class="accessibility-font__link accessibility-font__link--normal">A</label>
							</li>
							<li class="accessibility-font__item">
								<input type="radio" name="accessibility" id="site-font-plus" class="site-font-plus">
								<label for="site-font-plus" class="accessibility-font__link accessibility-font__link--plus">A&plus;</label>
							</li>
						</ul>
						<ul class="accessibility-contrast">
							<li class="accessibility-contrast__item">
								<input type="checkbox" name="" id="site-theme-toggler" class="site-theme-toggler">
								<label for="site-theme-toggler" class="accessibility-contrast__link">
									<i class="far fa-eye-slash"></i>
								</label>
							</li>
						</ul>
						<ul class="accessibility-date">
							<li class="accessibility-date__item">
								<a href="#" class="accessibility-date__link"><time datetime="2020-10-31"><?php echo date("F j, Y, l"); ?></time></a>
							</li>
						</ul>
						<ul class="accessibility-languages">
							<a class="accessibility-language" href="#">
								<svg class="accessibility-language__icon" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" class="lang-svg">
									<circle cx="256" cy="256" r="256" style="fill: rgb(240, 240, 240);"></circle>
									<g>
										<polygon points="510.497,283.826 510.491,283.818 510.49,283.826  " style="fill: rgb(0, 82, 180);"></polygon>
										<path d="M510.49,283.826c0-0.002,0.001-0.004,0.001-0.008L229.746,1.331 c-12.665,1.291-25.058,3.505-37.109,6.574C81.898,36.1,0,256,0,256s358.398,239.835,399.285,212.164 c8.181-5.536,16.025-11.533,23.493-17.953L256.395,283.826H510.49z" style="fill: rgb(0, 82, 180);"></path>
									</g>
									<path d="M445.217,256L196.245,7.029C83.688,33.946,0,135.192,0,256c0,141.384,114.616,256,256,256 c53.629,0,103.397-16.502,144.529-44.689L189.217,256H445.217z" style="fill: rgb(216, 0, 39);"></path>
									<g>
										<polygon points="243.472,377.993 212.207,363.287 228.856,333.008 194.906,339.503 190.604,305.205  166.957,330.43 143.31,305.205 139.007,339.503 105.058,333.007 121.707,363.287 90.441,377.993 121.707,392.698 105.058,422.978  139.009,416.484 143.309,450.78 166.957,425.555 190.604,450.78 194.906,416.484 228.855,422.979 212.206,392.7  " style="fill: rgb(240, 240, 240);"></polygon>
										<polygon points="222.609,141.983 199.869,131.288 211.978,109.265 187.285,113.989 184.156,89.043  166.957,107.39 149.758,89.043 146.628,113.989 121.935,109.265 134.045,131.288 111.304,141.983 166.957,153.115  " style="fill: rgb(240, 240, 240);"></polygon>
										<path d="M233.739,141.983c0,36.883-29.9,66.783-66.783,66.783s-66.783-29.9-66.783-66.783" style="fill: rgb(240, 240, 240);"></path>
									</g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
									<g></g>
								</svg>
								<span classs="accessibility-language__text">Nepali</span>
							</a>
							<a class="accessibility-language hidden" href="#">
								<svg class="accessibility-language__icon " viewBox="0 0 431 431" fill="none" class="lang-svg">
									<g filter="url(#filter0_d)">
										<path d="M427 211.5C427 328.307 332.307 423 215.5 423C98.6925 423 4 328.307 4 211.5C4 211.55 215.5 0.023959 215.5 0C332.307 0 427 94.6925 427 211.5Z" fill="#0052B4"></path>
										<path d="M215.501 0C215.489 0 215.476 0.000845703 215.464 0.000845703L215.501 0Z" fill="#F0F0F0"></path>
										<path d="M214.934 211.5H215.5C215.5 211.308 215.5 211.125 215.5 210.934C215.312 211.123 215.123 211.312 214.934 211.5Z" fill="#F0F0F0"></path>
										<path d="M215.5 110.349C215.5 73.1337 215.5 48.7476 215.5 0.000976562H215.464C98.6727 0.0199785 4 94.7034 4 211.5H114.348V149.362L176.486 211.5H214.935C215.124 211.312 215.312 211.123 215.501 210.934C215.501 196.685 215.501 183.971 215.501 172.488L153.362 110.349H215.5Z" fill="#F0F0F0"></path>
										<path d="M111.002 27.5867C77.9225 46.4226 50.4226 73.9225 31.5867 107.002V211.5H86.7609V82.7617V82.7609H215.5C215.5 65.3593 215.5 48.7813 215.5 27.5867H111.002V27.5867Z" fill="#D80027"></path>
										<path d="M215.5 185.491L140.357 110.349H114.348C114.348 110.348 114.348 110.349 114.348 110.349L215.499 211.5H215.5C215.5 211.5 215.5 193.568 215.5 185.491Z" fill="#D80027"></path>
										<path d="M131.557 248.283L143.165 272.554L169.377 266.496L157.638 290.704L178.717 307.42L152.472 313.336L152.546 340.239L131.557 323.408L110.569 340.239L110.642 313.336L84.3965 307.42L105.476 290.704L93.7364 266.496L119.95 272.554L131.557 248.283Z" fill="#F0F0F0"></path>
										<path d="M320.659 294.261L326.462 306.397L339.569 303.367L333.699 315.471L344.239 323.83L331.116 326.787L331.153 340.239L320.659 331.823L310.165 340.239L310.201 326.787L297.079 323.83L307.618 315.471L301.749 303.367L314.855 306.397L320.659 294.261Z" fill="#F0F0F0"></path>
										<path d="M266.667 165.522L272.47 177.658L285.577 174.628L279.708 186.732L290.247 195.091L277.125 198.048L277.161 211.5L266.667 203.084L256.173 211.5L256.209 198.048L243.087 195.091L253.626 186.732L247.757 174.628L260.864 177.658L266.667 165.522Z" fill="#F0F0F0"></path>
										<path d="M320.659 91.9563L326.462 104.093L339.569 101.063L333.7 113.167L344.238 121.525L331.116 124.484L331.153 137.935L320.659 129.519L310.165 137.935L310.201 124.484L297.079 121.525L307.617 113.167L301.749 101.063L314.855 104.093L320.659 91.9563Z" fill="#F0F0F0"></path>
										<path d="M367.82 147.13L373.623 159.267L386.729 156.237L380.86 168.341L391.399 176.699L378.277 179.658L378.313 193.109L367.82 184.693L357.326 193.109L357.361 179.658L344.239 176.699L354.779 168.341L348.909 156.237L362.015 159.267L367.82 147.13Z" fill="#F0F0F0"></path>
										<path d="M334.097 211.5L338.662 225.55H353.435L341.483 234.234L346.049 248.283L334.097 239.6L322.146 248.283L326.71 234.234L314.759 225.55H329.532L334.097 211.5Z" fill="#F0F0F0"></path>
									</g>
									<defs>
										<filter id="filter0_d" x="0" y="0" width="431" height="431" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
											<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
											<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></feColorMatrix>
											<feOffset dy="4"></feOffset>
											<feGaussianBlur stdDeviation="2"></feGaussianBlur>
											<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
											<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feBlend>
											<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feBlend>
										</filter>
									</defs>
								</svg>
								<span classs="accessibility-language__text">English</span>
							</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Logo Banner -->
	<div class="container">
		<div class="row">
			<header class="header">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<div class="header__logo">
						<?php
						$logo_img = get_theme_mod('logo_img', '');
						$logo_title_one = get_theme_mod('logo_title_one', '');
						$logo_title_two = get_theme_mod('logo_title_two', '');
						$logo_title_three = get_theme_mod('logo_title_three', '');
						$nepal_logo = get_theme_mod('nepal_logo', '');
						if ($logo_img) {
						?>
							<img src="<?php echo $logo_img; ?>" alt="<?php bloginfo('name'); ?> logo">
						<?php } ?>

						<h1 class="site-tagline">
							<?php if ($logo_title_one) { ?>
								<span class="site-tagline--primary-text"><?php echo $logo_title_one; ?></span>
							<?php }
							if ($logo_title_two) { ?>
								<span class="site-tagline--secondary-text"><?php echo $logo_title_two; ?></span>
							<?php }
							if ($logo_title_three) { ?>
								<span class="site-tagline--tertiary-text"><?php echo $logo_title_three; ?></span>
							<?php } ?>
						</h1>
					</div>
				</a>
				<?php //if($nepal_logo){ 
				?>
				<div class="header__nepal-map">
					<img src="<?php //echo $nepal_logo;
								?><?php echo get_template_directory_uri(); ?>/image/nepal-map.gif" alt="Map of Nepal">
				</div>
				<?php //} 
				?>
			</header>
		</div>
	</div>

	<!-- Main Navigation -->

	<!-- menustart -->
	<nav class="site-navigation">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg">
					<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
					</button>
					
					<?php
						wp_nav_menu(array(
							'theme_location'    => 'primary',
							'container'       	=> 'div',
							'container_id'    	=> 'navbarSupportedContent',
							'container_class' 	=> 'collapse navbar-collapse justify-content-end',
							'menu_id'         	=> false,
							'menu_class'      	=> 'navbar-nav mr-auto',
							'depth'           	=> 3,
							'items_wrap'		=> '<ul class="navbar-nav mr-auto">%3$s</ul>', 
							'fallback_cb'     	=> 'wp_bootstrap_navwalker::fallback',
							'walker'          	=> new WP_Bootstrap_Navwalker()
						));
					?>

				</nav>
			</div>
		</div>
	</nav>
	<!-- menuend -->
	<div class="collapse search-form-container" id="collapseExample">
		<div class="card card-body">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<form action="<?php echo home_url();?>" class="form-inline" id="form">
							<div class="form-inline__group">
								<input type="search" id="search" class="form-inline__input" placeholder="Insert Your Query" name="s" required>
								<button type="submit" class="btn--search" placeholder="" value=""><i class="fas fa-search"></i></button>
							</div>
						</form>
					</div>

				</div>
			</div>

		</div>
	</div>