<?php 
$term = get_queried_object();
$table_titles = get_field('table_titles',$term);
$title_1 = $table_titles['title_1'];
$title_2 = $table_titles['title_2'];
$title_3 = $table_titles['title_3'];
$down_title = get_theme_mod('down_title','');

?>
<main class="section-tables">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">S.N.</th>
                        <?php if($title_1){ ?>
                            <th scope="col"><?php echo $title_1; ?></th>
                        <?php } ?>
                        <?php if($title_2){ ?>
                            <th scope="col"><?php echo $title_2; ?></th>
                        <?php } ?>
                        <?php if($title_3){ ?>
                            <th scope="col"><?php echo $title_3; ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                  $k=1;
                  while(have_posts()){ 
                    the_post();
                    $table_fields = get_field('table_fields','');
                    $table_field = $table_fields['table_field'];
                    $field_1 = $table_fields['field_1'];
                    if(empty($field_1)){
                        $field_1 = get_the_title();
                    }

                    $field_2 = $table_fields['field_2'];
                    $field_3 = $table_fields['field_3'];

                    $field_4 = $table_fields['field_4'];

                        //pre($table_fields);
                    ?>
                    <tr>


                        <th scope="row"><?php echo $k; ?></th>
                        <td><?php echo $field_1; ?></td>
                        <td><?php echo $field_2; ?>
                        <?php  if( $field_3){ echo " - "; ?>

                        <?php echo $field_3; } ?>

                    </td>
                    <?php if($field_4){ ?>
                        <td><a href="<?php echo $field_4; ?>" class="btn-text btn--download" download><i class="fas fa-download"></i><?php echo $down_title; ?></a></td>
                    <?php } ?>

                </tr>
                <?php $k++; } ?>
                
                
                
                
            </tbody>
        </table>
        <div class="section__pagination text-center">

            <?php if (function_exists("pagination")) {
                pagination();
            } ?>
            <!-- <ul class="page">
                <li class="page__btn"><i class="fas fa-angle-left"></i></li>
                <li class="page__numbers"> 1</li>
                <li class="page__numbers active">2</li>
                <li class="page__numbers">3</li>
                <li class="page__numbers">4</li>
                <li class="page__numbers">5</li>
                <li class="page__numbers">6</li>
                <li class="page__dots">...</li>
                <li class="page__numbers"> 10</li>
                <li class="page__btn"><i class="fas fa-angle-right"></i></li>
            </ul> -->
        </div>
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
                    <?php } ?>
                    <?php if($k>1){ ?>
                    
                    
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
    </div>
</div>
</main>