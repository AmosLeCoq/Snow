<?php
/**
 * @file      home.php
 * @brief     This view is designed to display the home page
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

ob_start();
$title = "SnowPoint . Accueil";
?>

    <!-- Cart -->
<?php if(isset($articleErrorMessage)) : ?>
    <h5><span style="color:#ff0000"><?=$articleErrorMessage;?></span></h5>
<?php else : ?>

    <section class="cart bgwhite p-t-70 p-b-100">

    <td class="column-1"></td><br>
    <table class="table-shopping-cart">
    <tr class="table-head">
        <th class="column-1">Image</th>
        <th class="column-1">Name</th>
        <th class="column-1">Price</th>
        <th class="column-1">Modification</th>
        <th class="column-1">Supprimer</th>
    </tr>
    <?php foreach ($articles as $article) :?>
        <tr class="table-row">
            <td class="column-1">
                <div class="cart-img-product b-rad-4 o-f-hidden">
                    <?php if(is_file($article['photo'])) :?>
                        <img src="<?=$article['photo']?>" alt="IMG-PRODUCT">
                    <?php endif; ?>
                </div>
            </td>
            <td class="column-1"><?=$article['model']?></td>
            <td class="column-1"><?=$article['price']?> $</td>
            <td class="column-1"><button onclick="window.location.href='index.php?action=modif&code=<?=$article['code']?>'" class="flex-c-m size1 bg4 bo-rad-5 hov1 s-text1 trans-0-4">Modifier</button>
            <td class="column-1"><button onclick="window.location.href='index.php?action=remove&code=<?=$article['code']?>'" class="flex-c-m size1 bg4 bo-rad-5 hov1 s-text1 trans-0-4">Supprimer</button>
        </tr>
    <?php endforeach;?>
<?php endif;?>
    </table>
    </section>


<?php
$content = ob_get_clean();
require "gabarit.php";

