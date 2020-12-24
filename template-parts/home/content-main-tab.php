<?php
$tabcat = get_theme_mod('tabcat','');
$tab_numberofpost = get_theme_mod('tab_numberofpost','');
$down_title = get_theme_mod('down_title','');

if(empty($tab_numberofpost)){
    $tab_numberofpost = 5;
}

if(empty($down_title)){
    $down_title = "Download File";
}
?>
<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="content-tab">          
                    <!-- START TABS DIV -->
                    <div class="tabbable-responsive">
                        <div class="tabbable">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <?php 
                                $k=1;
                                $l=1;
                                foreach ($tabcat as $key => $value) {

                                    $rem = $l%5;
                                    if($rem==0){
                                        $class="fa-newspaper";
                                    }
                                    if($rem==1){
                                        $class="fa-info-circle";
                                    }
                                    if($rem==2){
                                        $class="fa-user-tie";
                                    }
                                    if($rem==3){
                                        $class="fa-wallet";
                                    }
                                    if($rem==4){
                                        $class="fa-suitcase";
                                    }
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $active = ($k == 1)?"active":""; ?>" id="<?php echo $key; ?>-tab" data-toggle="tab" href="#<?php echo $key; ?>" role="tab" aria-controls="<?php echo $key; ?>" aria-selected="<?php echo $active = ($k == 1)?"true":"false"; ?>"><i class="fas <?php echo $class; ?>"></i><?php echo get_cat_name($value);?></a>
                                    </li>
                                    <?php $k++; $l++; } ?>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="tab-content">

                          <?php 
                          $k=1;
                          foreach ($tabcat as $key => $value) { ?>
                            <div class="tab-pane fade <?php echo $active = ($k == 1)?"show active":""; ?>" class="news-section" id="<?php echo $key; ?>" role="tabpanel" aria-labelledby="<?php echo $key; ?>-tab">
                                <div class="news-section__container">
                                    <?php
                                    $args=array(
                                        'posts_per_page' => $tab_numberofpost, 
                                        'post_type' => 'post',
                                        'cat' => $value,
                                        'ignore_sticky_posts' => 1
                                    );
                                    $wp_query = new WP_Query( $args );
                                    $k = 1;
                                    while($wp_query->have_posts()) {
                                        $wp_query->the_post();
                                        $downloadable_file = get_field('downloadable_file','');
                                        
                                        ?>
                                        <div class="news-item">
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


                                                                    if($gal_image){
                                                                    $cnt = 1;

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
                                        <?php } wp_reset_query(); wp_reset_postdata(); ?>



                                    </div>
                                    <?php 
                                    $view_all_title = get_theme_mod('view_all_title','');
                                    if(empty($view_all_title)){
                                        $view_all_title = "View All";
                                    }
                                    ?>
                                    <div class="tab-pane__footer">
                                        <a href="<?php echo get_category_link( $value ); ?>" class="btn-text float-right"><?php echo $view_all_title; ?> <?php echo get_cat_name($value);?> &RightArrow;</a>
                                    </div>
                                </div>
                                <?php $k++; } ?>

                            </div>
                            <!-- END TABS DIV -->
                        </section>
                        <section class="content-slider">
                            <?php 

                            $tabslidercat = get_theme_mod('tabslidercat','');
                            $tab_slider_numberofpost = get_theme_mod('tab_slider_numberofpost','');

                            $args=array(
                                'posts_per_page' => $tab_slider_numberofpost, 
                                'post_type' => 'post',
                                'cat' => $tabslidercat,
                                'ignore_sticky_posts' => 1
                            );
                            $wp_query = new WP_Query( $args );
                            if($wp_query->have_posts()){
                                ?>
                                <div id="demo" class="carousel slide" data-ride="carousel">
                                    <ul class="carousel-indicators">
                                        <?php
                                        $k=0;
                                        while($wp_query->have_posts()) {
                                            $wp_query->the_post();
                                            $feat_image  = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                            if($feat_image){
                                             ?>
                                             <li data-target="#demo" data-slide-to="<?php echo $k; ?>" class="<?php echo $active = ($k == 0)?"active":""; ?>"></li>
                                             <?php $k++; } } ?>

                                         </ul>
                                         <div class="carousel-inner">
                                            <?php 
                                            $k=0;
                                            while($wp_query->have_posts()) {
                                                $wp_query->the_post();
                                                $feat_image  = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                                if($feat_image){
                                                 ?>

                                                 <div class="carousel-item <?php echo $active = ($k == 0)?"active":""; ?>">
                                                    <img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>" width="1100" height="500"> 
                                                </div>
                                                <?php $k++; } } wp_reset_query(); wp_reset_postdata(); ?>

                                            </div>
                                        </div>

                                    <?php } wp_reset_query(); wp_reset_postdata(); ?>
                                </section>
                            </div>
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
                                            <?php $k++; } } wp_reset_query(); wp_reset_postdata();
                                            $facebook_page_link = get_theme_mod('facebook_link','');
                                            if(!empty($facebook_page_link)) { 
                                                $facebookpage_title = get_theme_mod('facebookpage_title','');
                                                ?>


                                                <div class="card-neo">
                                                    <?php if($facebookpage_title){ ?>
                                                        <h3 class="staff-message__title">
                                                            <?php echo $facebookpage_title; ?>
                                                        </h3>
                                                    <?php } ?>
                                                    <div class="contentBx"> 

                                                        <div class="fb-page" data-href="<?php echo $facebook_page_link; ?>" data-tabs="timeline" data-width="300" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo $facebook_page_link; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $facebook_page_link; ?>"><?php bloginfo('name'); ?></a></blockquote></div>


                                                        <!-- <p class="paragraph">Magnam, alias corporis illum at quam, unde nesciunt placeat aliquam exercitationem sequi, dolores quisquam dolore</p> -->
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>