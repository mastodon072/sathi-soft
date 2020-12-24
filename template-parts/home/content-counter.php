<?php
$stat = get_theme_mod('stat','');
?>
<section class="counter-cards">
    <div class="container">
        <div class="row">
            <div class="container-card">
                <?php
                foreach ($stat as $key => $value) {
                    $stattitle = $value['stattitle'];
                    $statnum = $value['statnum'];
                    $staticon = $value['staticon'];

                    ?>
                    <div class="col-md-3">
                        <div href="#" class="card-neo">
                            <?php if($staticon){ ?>
                                <div class="imgBx">
                                    <i class="fas <?php echo $staticon; ?>"></i>
                                </div>
                            <?php } ?>
                            <div class="contentBx">
                                <?php if($statnum){ ?>
                                    <h2 class="counter-card__number"><?php echo $statnum; ?></h2>
                                <?php } if($stattitle){ ?>
                                    <p class="paragraph"><?php echo $stattitle; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
</section>