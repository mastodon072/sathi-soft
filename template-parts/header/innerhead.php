<?php 
$home_page = get_theme_mod('home_page','');
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