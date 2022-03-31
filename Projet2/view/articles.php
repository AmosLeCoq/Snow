<?php

$title = 'SnowPoint . Articles';

ob_start();

?>

<form method="get">
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(view/content/images/home_slide_11.jpg);">
        <h2 class="l-text2 t-center">
            Nos Snows
        </h2>
    </section>
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                    <!-- Product -->
                    <div class="row">

                        <?php if(isset($articleErrorMessage)) : ?>
                            <h5><span style="color:#ff0000"><?=$articleErrorMessage;?></span></h5>
                        <?php else : ?>
                            <?php foreach ($articles as $article) :?>

                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">

                                    <?php if(is_file($article['photo'])) :?>
                                    <img src="<?=$article['photo']?>" alt="IMG-PRODUCT">
                                    <?php else:?>
                                    <img src="view/content/images/no_image_snow_small.png" alt="IMG-PRODUCT">
                                    <?php endif; ?>

                                    <!-- Button -->
                                    <div class="block2-overlay trans-0-4">
                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <input type="button" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" value="Add to Cart">
                                        </div>
                                    </div>
                                    <!-- Fin Button -->

                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="index.php?action=article&code=<?=$article['code']?>" class="block2-name dis-block s-text3 p-b-5">
                                        <?=$article['model']?>
                                    </a>
                                    <span class="block2-price m-text6 p-r-5">
                                            <?=$article['price']?> $
                                    </span>
                                </div>
                            </div>
                        </div>

                        <?php endforeach;?>
                        <?php endif;?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination flex-m flex-w p-t-26">
                        <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                        <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
