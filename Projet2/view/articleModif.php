<?php
/**
 * @file      home.php
 * @brief     This view is designed to display the home page
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

ob_start();
$title = "SnowPoint . gestion";
?>

<?php if(isset($articleErrorMessage)) : ?>
    <h5><span style="color:#ff0000"><?=$articleErrorMessage;?></span></h5>
<?php else : ?>
    <?php foreach ($articles as $article) :?>


    <!-- Product Detail -->
    <form method="post" action="index.php?action=modifMsql">
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">
                        <div class="item-slick3" data-thumb="<?=$article['photo'];?>">
                            <div class="wrap-pic-w">
                                <img src="<?=$article['photo'];?>" alt="IMG-PRODUCT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    <input type="text" id="model" name="model" value="<?=$article['model'];?>"><br>
                </h4>

                <span class="m-text17">
                    <input type="text" id="price" name="price" value="<?=$article['price'];?>"> $<br>
				</span>

                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Description
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>
                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <textarea id="description" name="description" rows="5" cols="50"><?=$article['description'];?></textarea>
                    </div>
                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <textarea id="descriptionFull" name="descriptionFull" rows="10" cols="50"><?=$article['descriptionFull'];?></textarea>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Additional information
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">

                        audience:<br>
                        <?php if($article['audience']=='Femme') : ?>

                            <input type="radio" id="Femme" name="audience" value="Femme" checked> Femme<br>
                            <input type="radio" id="Homme" name="audience" value="Homme"> Homme<br>

                        <?php elseif ($article['audience']=='Homme') : ?>

                            <input type="radio" id="Femme" name="audience" value="Femme"> Femme<br>
                            <input type="radio" id="Homme" name="audience" value="Homme" checked> Homme<br><br>

                        <?php endif;?>

                        snowLength:<br>
                        <input type="number" id="snowLength" name="snowLength" value="<?=$article['snowLength'];?>"><br><br>

                        level:<br>
                        <input type="radio" id="Débutant" name="level" value="Débutant" <?php if($article['level']=='Débutant') : ?>checked<?php endif;?>> Débutant<br>
                        <input type="radio" id="Intermédiaire" name="level" value="Intermédiaire" <?php if($article['level']=='Intermédiaire') : ?>checked<?php endif;?>> Intermédiaire<br>
                        <input type="radio" id="Standard" name="level" value="Standard" <?php if($article['level']=='Standard') : ?>checked<?php endif;?>> Standard<br>
                        <input type="radio" id="Pro" name="level" value="Pro" <?php if($article['level']=='Pro') : ?>checked<?php endif;?>> Pro<br><br>

                        Brand:<br>
                        <input type="text" id="brand" name="brand" value="<?=$article['brand'];?>"><br><br>

                        Code:<br>
                        <input type="text" id="code" name="code" value="<?=$article['code'];?>">
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Modifier" class="flex-c-m size1 bg4 bo-rad-5 hov1 s-text1 trans-0-4">
    </div>
    </form>
    <?php endforeach;?>
<?php endif;?>

<?php
$content = ob_get_clean();
require "gabarit.php";

