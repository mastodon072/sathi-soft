<?php

Kirki::add_config( 'cool_theme_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
	'priority' => 100,
) );



Kirki::add_panel( 'header_setting', array(
	'priority'    => 10,
	'title'       => esc_attr__( 'Header Setting', 'test' ),
	'description' => esc_attr__( 'Header Section setting', 'test' ),
) );


Kirki::add_panel( 'home_setting', array(
	'priority'    => 10,
	'title'       => esc_attr__( 'Home page setting Setting', 'test' ),
	'description' => esc_attr__( 'Home page setting Section setting', 'test' ),
) );


//top header 

Kirki::add_section( 'social_options', array(
	'title'          => esc_attr__( 'Header Social Media Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Social Media', 'test' ),
	'panel'          => 'header_setting',
	'priority'       => 170,
) );



Kirki::add_field( 'cool_theme_config', [
	'type'        => 'image',
	'settings'    => 'social_default_img',
	'label'       => esc_html__( 'Social media Default image', 'test' ),
	'description' => esc_html__( 'default image for social media sharing.', 'test' ),
	'section'     => 'social_options',
	'priority' => 10,
	'default'     => '',
] );


Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'facebook_appid',
	'label'    => __( 'Give facebook appid', 'test' ),
	'section'  => 'social_options',
	'default'  => esc_attr__( ' ', 'test' ),
	'priority' => 12
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'facebook_pageid',
	'label'    => __( 'Give facebook pageid', 'test' ),
	'section'  => 'social_options',
	'default'  => esc_attr__( '', 'test' ),
	'priority' => 12
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'facebook_link',
	'label'    => __( 'Give facebook link', 'test' ),
	'section'  => 'social_options',
	'default'  => esc_attr__( 'https://www.facebook.com/', 'test' ),
	'priority' => 12,
	
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'twitter_link',
	'label'    => __( 'Give twitter link', 'test' ),
	'section'  => 'social_options',
	'default'  => esc_attr__( 'https://www.twitter.com/', 'test' ),
	'priority' => 13,
) );


Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'youtube_link',
	'label'    => __( 'Give youtube link', 'test' ),
	'section'  => 'social_options',
	'default'  => esc_attr__( 'https://www.youtube.com/', 'test' ),
	'priority' => 15,
) );


Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'insta_link',
	'label'    => __( 'Give instagram link', 'test' ),
	'section'  => 'social_options',
	'default'  => esc_attr__( 'https://www.instagram.com/', 'test' ),
	'priority' => 16,
) );


Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'linkedin_link',
	'label'    => __( 'Give linkedin link', 'test' ),
	'section'  => 'social_options',
	'default'  => esc_attr__( 'https://www.linkedin.com/', 'test' ),
	'priority' => 17,
) );



/*logo section*/
Kirki::add_section( 'logo_section', array(
	'title'          => esc_attr__( 'Logo Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Site Logo', 'test' ),
	'panel'          => 'header_setting',
	'priority'       => 170,
) );

Kirki::add_field( 'cool_theme_config', [
	'type'        => 'image',
	'settings'    => 'logo_img',
	'label'       => esc_html__( 'Logo image', 'test' ),
	'description' => esc_html__( 'upload logo.', 'test' ),
	'section'     => 'logo_section',
	'priority' => 10,
	'default'     => '',
] );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'logo_title_one',
	'label'    => __( 'Logo Title 1', 'test' ),
	'section'  => 'logo_section',
	'default'  => esc_attr__( 'NEPAL GOVERNMENT', 'test' ),
	'priority' => 16,
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'logo_title_two',
	'label'    => __( 'Logo Title 2', 'test' ),
	'section'  => 'logo_section',
	'default'  => esc_attr__( 'MINISTRY OF COMMUNICATION AND INFORMATION TECHNOLOGY', 'test' ),
	'priority' => 16,
) );
Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'logo_title_three',
	'label'    => __( 'Logo Title 3', 'test' ),
	'section'  => 'logo_section',
	'default'  => esc_attr__( 'DISTRICT POSTAL OFFICE ‐ DANG', 'test' ),
	'priority' => 16,
) );


Kirki::add_field( 'cool_theme_config', [
	'type'        => 'image',
	'settings'    => 'nepal_logo',
	'label'       => esc_html__( 'Nepali Flag Logo image', 'test' ),
	'description' => esc_html__( 'upload Nepali Flag logo.', 'test' ),
	'section'     => 'logo_section',
	'priority' => 10,
	'default'     => '',
] );


/*home page heightlight section*/

Kirki::add_section( 'sortable_section', array(
	'title'          => esc_attr__( 'Sortable Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Sortable Section.', 'test' ),
	'panel'          => 'home_setting',
	'priority'       => 10,
) );


Kirki::add_field( 'cool_theme_config', array(
	'type'        => 'sortable',
	'settings'    => 'my_section',
	'label'       => __( 'Sortable section', 'test' ),
	'section'     => 'sortable_section',
	'default'     => array(
		'banner',
		'news-highlight',
		'quick-links',
		'aboutus',
		'main-tab',
		'counter',
		'testimonials',
		'gallery'
		
	),
	'choices'     => array(
		'banner' => esc_attr__( 'Main Banner', 'textdomain' ),
		'news-highlight' => esc_attr__( 'flash news', 'textdomain' ),
		'quick-links' => esc_attr__( 'Quick Links', 'textdomain' ),
		'aboutus' => esc_attr__( 'Aboutus', 'textdomain' ),
		'main-tab' => esc_attr__( 'Main tab', 'textdomain' ),
		'counter' => esc_attr__( 'Counter', 'textdomain' ),
		'testimonials' => esc_attr__( 'Testimonials', 'textdomain' ),
		'gallery' => esc_attr__( 'gallery', 'textdomain' ),
	),
	'priority'    => 10,
) );


/*banner section*/
Kirki::add_section( 'banner_section', array(
	'title'          => esc_attr__( 'Banner Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Main Banner section', 'test' ),
	'panel'          => 'home_setting',
	'priority'       => 170,
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'        => 'select',
	'settings'    => 'banner_select_categories',
	'label'       => esc_html__( 'select category', 'kirki' ),
	'section'     => 'banner_section',
	'default'     => 'slider',
	'priority'    => 1,
	'multiple'    => 1,
	'choices'     => Kirki_Helper::get_terms( array('taxonomy' => 'category') ),
) );

Kirki::add_field( 'cool_theme_config', [
	'type'        => 'slider',
	'settings'    => 'banner_numberofpost',
	'label'       => esc_html__( 'Number of posts to show', 'kirki' ),
	'section'     => 'banner_section',
	'default'     => 5,
	'priority'    => 1,
	'choices'     => [
		'min'  => 0,
		'max'  => 15,
		'step' => 1,
	],
] );


/*highlight section*/
Kirki::add_section( 'highlight_section', array(
	'title'          => esc_attr__( 'Highlight Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Highlight section', 'test' ),
	'panel'          => 'home_setting',
	'priority'       => 170,
) );


Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'flashnews_title',
	'label'    => __( 'Give flash news title', 'test' ),
	'section'  => 'highlight_section',
	'default'  => esc_attr__( 'NEWS HIGHLIGHTS', 'test' ),
	
) );


Kirki::add_field( 'cool_theme_config', array(
	'type'        => 'select',
	'settings'    => 'highlight_select_categories',
	'label'       => esc_html__( 'select category', 'kirki' ),
	'section'     => 'highlight_section',
	'default'     => 'slider',
	'priority'    => 1,
	'multiple'    => 1,
	'choices'     => Kirki_Helper::get_terms( array('taxonomy' => 'category') ),
) );









Kirki::add_field( 'cool_theme_config', [
	'type'        => 'slider',
	'settings'    => 'highlight_numberofpost',
	'label'       => esc_html__( 'Number of posts to show', 'kirki' ),
	'section'     => 'highlight_section',
	'default'     => 5,
	'priority'    => 1,
	'choices'     => [
		'min'  => 0,
		'max'  => 15,
		'step' => 1,
	],
] );


/*quick links section*/

Kirki::add_section( 'quick_section', array(
	'title'          => esc_attr__( 'Quick Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Quick section', 'test' ),
	'panel'          => 'home_setting',
	'priority'       => 170,
) );



Kirki::add_field( 'cool_theme_config', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Quick Links', 'test' ),
	'section'     => 'quick_section',
	'priority'    => 10,
	'row_label' => array(
		'type'  => 'field',
		'value' => esc_attr__('Quick Links', 'test' ),
		'field' => 'link_text',
	),
	'button_label' => esc_attr__('Add New Links', 'test' ),
	'settings'     => 'quick_links',

	'fields' => array(
		

		'icon_class' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Fontawasome Class', 'test' ),
			'description' => esc_attr__( 'example: fa-external-link-square-alt, fa-newspaper, fa-cloud-download-alt, fa-calendar-check, fa-image, fa-file-archive', 'test' ),
			'default'     => '',
		),

		
		'icon_title' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Title', 'test' ),
			'description' => esc_attr__( 'Write Title', 'test' ),
			'default'     => '',
		),


		'icon_link' => array(
			'type'        => 'url',
			'label'       => esc_attr__( 'Link', 'test' ),
			'description' => esc_attr__( 'Paste the url', 'test' ),
			'default'     => '',
		),		
	)
) );

/*aboutus section*/

Kirki::add_section( 'about_section', array(
	'title'          => esc_attr__( 'About Section', 'test' ),
	'description'    => esc_attr__( 'Setting For About section', 'test' ),
	'panel'          => 'home_setting',
	'priority'       => 170,
) );


Kirki::add_field( 'cool_theme_config', [
	'type'        => 'dropdown-pages',
	'settings'    => 'about_page',
	'label'       => esc_html__( 'Select Page', 'kirki' ),
	'section'     => 'about_section',
	'default'     => 42,
	'priority'    => 10,
] );


/*Main Tab Section*/

Kirki::add_section( 'tab_section', array(
	'title'          => esc_attr__( 'Tab Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Tab section', 'test' ),
	'panel'          => 'home_setting',
	'priority'       => 170,
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'        => 'select',
	'settings'    => 'tabcat',
	'label'       => esc_html__( 'Select Category', 'kirki' ),
	'section'     => 'tab_section',
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 10,
	'choices'     => Kirki_Helper::get_terms( array('taxonomy' => 'category') ),
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'view_all_title',
	'label'    => __( 'View all title', 'test' ),
	'section'  => 'tab_section',
	'default'  => esc_attr__( 'View All', 'test' ),
	'priority' => 10,
) );

Kirki::add_field( 'cool_theme_config', [
	'type'        => 'slider',
	'settings'    => 'tab_numberofpost',
	'label'       => esc_html__( 'Number of posts to show', 'kirki' ),
	'section'     => 'tab_section',
	'default'     => 5,
	'priority'    => 10,
	'choices'     => [
		'min'  => 0,
		'max'  => 15,
		'step' => 1,
	],
] );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'down_title',
	'label'    => __( 'Download title', 'test' ),
	'section'  => 'tab_section',
	'default'  => esc_attr__( 'Download File', 'test' ),
	'priority' => 10,
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'        => 'select',
	'settings'    => 'tabslidercat',
	'label'       => esc_html__( 'Select Slider Category', 'kirki' ),
	'section'     => 'tab_section',
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => Kirki_Helper::get_terms( array('taxonomy' => 'category') ),
) );

Kirki::add_field( 'cool_theme_config', [
	'type'        => 'slider',
	'settings'    => 'tab_slider_numberofpost',
	'label'       => esc_html__( 'Number of Slider to show', 'kirki' ),
	'section'     => 'tab_section',
	'default'     => 5,
	'priority'    => 10,
	'choices'     => [
		'min'  => 0,
		'max'  => 15,
		'step' => 1,
	],
] );


Kirki::add_field( 'cool_theme_config', [
	'type'        => 'slider',
	'settings'    => 'staff_numberofpost',
	'label'       => esc_html__( 'Number of posts to show', 'kirki' ),
	'section'     => 'tab_section',
	'default'     => 5,
	'priority'    => 10,
	'choices'     => [
		'min'  => 0,
		'max'  => 15,
		'step' => 1,
	],
] );


Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'raed_more_title',
	'label'    => __( 'Read More title', 'test' ),
	'section'  => 'tab_section',
	'default'  => esc_attr__( 'Read More', 'test' ),
	'priority' => 10,
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'facebookpage_title',
	'label'    => __( 'Facebook page title', 'test' ),
	'section'  => 'tab_section',
	'default'  => esc_attr__( 'OUR FACEBOOK PAGE', 'test' ),
	'priority' => 10,
) );

/*Stat Section*/

Kirki::add_section( 'stat_section', array(
	'title'          => esc_attr__( 'Stat Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Stat section', 'test' ),
	'panel'          => 'home_setting',
	'priority'       => 170,
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Stat', 'test' ),
	'section'     => 'stat_section',
	'priority'    => 10,
	'row_label' => array(
		'type'  => 'field',
		'value' => esc_attr__('Stats', 'test' ),
		'field' => 'link_text',
	),
	'button_label' => esc_attr__('Add New Stat', 'test' ),
	'settings'     => 'stat',

	'fields' => array(
		

		'stattitle' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Title', 'test' ),
			'description' => esc_attr__( 'Stat Title', 'test' ),
			'default'     => '',
		),

		
		'statnum' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Stat Number', 'test' ),
			'description' => esc_attr__( 'Write stat number', 'test' ),
			'default'     => '',
		),


		'staticon' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'icon class', 'test' ),
			'description' => esc_attr__( 'Write fontawasome icon class Eg: fa-university, fa-graduation-cap, fa-school, fa-crown', 'test' ),
			'default'     => '',
		),		
	)
) );


/*Testimonial*/
Kirki::add_section( 'test_section', array(
	'title'          => esc_attr__( 'Testimonial Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Testimonial section', 'test' ),
	'panel'          => 'home_setting',
	'priority'       => 170,
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'test_title',
	'label'    => __( 'Title', 'test' ),
	'section'  => 'test_section',
	'default'  => esc_attr__( 'Testimonial', 'test' ),
	'priority' => 10,
) );




Kirki::add_field( 'cool_theme_config', [
	'type'        => 'slider',
	'settings'    => 'test_numberofpost',
	'label'       => esc_html__( 'Number of posts to show', 'kirki' ),
	'section'     => 'test_section',
	'default'     => 5,
	'priority'    => 10,
	'choices'     => [
		'min'  => 0,
		'max'  => 15,
		'step' => 1,
	],
] );

/*gallery section*/

Kirki::add_section( 'gallery_section', array(
	'title'          => esc_attr__( 'Gallery Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Gallery section', 'test' ),
	'panel'          => 'home_setting',
	'priority'       => 170,
) );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'gallery_title',
	'label'    => __( 'Title', 'test' ),
	'section'  => 'gallery_section',
	'default'  => esc_attr__( 'Gallery', 'test' ),
	'priority' => 10,
) );



Kirki::add_field( 'cool_theme_config', [
	'type'        => 'slider',
	'settings'    => 'gallery_numberofpost',
	'label'       => esc_html__( 'Number of posts to show', 'kirki' ),
	'section'     => 'gallery_section',
	'default'     => 5,
	'priority'    => 10,
	'choices'     => [
		'min'  => 0,
		'max'  => 15,
		'step' => 1,
	],
] );

Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'photonum_title',
	'label'    => __( 'Number of photos Title', 'test' ),
	'section'  => 'gallery_section',
	'default'  => esc_attr__( 'photos in this archive', 'test' ),
	'priority' => 10,
) );
Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'upload_title',
	'label'    => __( 'Uploaded on Title', 'test' ),
	'section'  => 'gallery_section',
	'default'  => esc_attr__( 'Uploaded On', 'test' ),
	'priority' => 10,
) );



/*single post settings*/
Kirki::add_panel( 'singlepost_setting', array(
	'priority'    => 10,
	'title'       => esc_attr__( 'Single page Setting', 'test' ),
	'description' => esc_attr__( 'Single Page setting', 'test' ),
) );

Kirki::add_section( 'single_page', array(
	'title'          => esc_attr__( 'Single Page Section', 'test' ),
	'description'    => esc_attr__( 'Setting For Single section', 'test' ),
	'panel'          => 'singlepost_setting',
	'priority'       => 170,
) );


Kirki::add_field( 'cool_theme_config', [
	'type'        => 'dropdown-pages',
	'settings'    => 'home_page',
	'label'       => esc_html__( 'Select Home Page', 'kirki' ),
	'section'     => 'single_page',
	'default'     => 42,
	'priority'    => 10,
] );



Kirki::add_field( 'cool_theme_config', array(
	'type'     => 'text',
	'settings' => 'sidebartitle',
	'label'    => __( 'Title', 'test' ),
	'section'  => 'single_page',
	'default'  => esc_attr__( 'Information', 'test' ),
	'priority' => 10,
) );




Kirki::add_field( 'cool_theme_config', [
	'type'        => 'slider',
	'settings'    => 'sidebar_numberofpost',
	'label'       => esc_html__( 'Number of posts to show', 'kirki' ),
	'section'     => 'single_page',
	'default'     => 5,
	'priority'    => 10,
	'choices'     => [
		'min'  => 0,
		'max'  => 15,
		'step' => 1,
	],
] );


Kirki::add_field( 'my_config', array(
	'type'        => 'select',
	'settings'    => 'my_setting',
	'label'       => esc_html__( 'Select Sidebar Category', 'kirki' ),
	'section'     => 'single_page',
	'default'     => '8',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => Kirki_Helper::get_terms( array('taxonomy' => 'category') ),
) );


/*General Section*/

Kirki::add_panel( 'general_setting', array(
	'priority'    => 10,
	'title'       => esc_attr__( 'General Setting', 'test' ),
	'description' => esc_attr__( 'General setting', 'test' ),
) );

Kirki::add_section( 'general_page', array(
	'title'          => esc_attr__( 'General Section', 'test' ),
	'description'    => esc_attr__( 'Setting For General section', 'test' ),
	'panel'          => 'general_setting',
	'priority'       => 170,
) );

Kirki::add_field( 'cool_theme_config', [
	'type'        => 'slider',
	'settings'    => 'archive_numberofwords',
	'label'       => esc_html__( 'Number of Words to show', 'kirki' ),
	'section'     => 'general_page',
	'default'     => 5,
	'priority'    => 10,
	'choices'     => [
		'min'  => 0,
		'max'  => 50,
		'step' => 1,
	],
] );


Kirki::add_field( 'cool_theme_config', [
	'type'        => 'checkbox',
	'settings'    => 'show_sidebar_archive',
	'label'       => esc_html__( 'Show Sidebar on Archive page', 'kirki' ),
	'description' => esc_html__( '', 'kirki' ),
	'section'     => 'general_page',
	'default'     => true,
] );
