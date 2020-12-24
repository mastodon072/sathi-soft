 <?php 
 $quick_links = get_theme_mod('quick_links','');

 ?>
 <section class="section-quick-links">
        <div class="container">
            <div class="row">
                <div class="container-card">
                    <?php
                        foreach ($quick_links as $key => $value) {
                           
                       if($value['icon_title']){ 
                     ?>
                    <div class="col-md-2">
                        <a href="<?php echo $value['icon_link'] ?>" class="card-neo">
                            <?php if($value['icon_class']){ ?>
                            <div class="imgBx">
                                <i class="fas <?php echo $value['icon_class']; ?>"></i>
                            </div>
                        <?php } ?>

                            <div class="contentBx">
                                <h2><?php echo $value['icon_title']; ?></h2>
                            </div>
                        
                        </a>
                    </div>
                <?php } } ?>

                </div>
            </div>
        </div>
    </section>