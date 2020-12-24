 <?php 
    $flashnews_title = get_theme_mod('flashnews_title','');
    $highlight_select_categories = get_theme_mod('highlight_select_categories','');
    $highlight_numberofpost = get_theme_mod('highlight_numberofpost','');
    
 ?>
 <div class="news-highlight">
        <div class="ticker-wrap">
            <?php if($flashnews_title){ ?>
            <div class="ticker-heading"><?php echo $flashnews_title; ?></div>
        <?php } 
         $args=array(
                    'posts_per_page' => $highlight_numberofpost, 
                    'post_type' => 'post',
                    'cat' => $highlight_select_categories,
                  );
                  $wp_query = new WP_Query( $args );
        ?>
            <div class="ticker">
                <?php
                 while($wp_query->have_posts()){
                    $wp_query-> the_post();
                 ?>
                <div class="ticker__item">
                   <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            <?php } wp_reset_query(); wp_reset_postdata(); ?>
                
            </div>
        </div>
    </div>