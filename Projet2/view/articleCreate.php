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

<!-- Product Detail -->
<form method="post" action="index.php?action=createMsql">
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">


            <div class="w-size14 p-t-30 respon5">

                <div class="wrap-pic-w">
                    <input type="file" id="photo" name="photo">
                </div>
                <br>

                <span class="m-text17">
                     <input type="text" id="model" name="model" value="">Model<br>
                </span>

                <span class="m-text17">
                    <input type="number" id="price" name="price" value=""> $<br>
                </span>
                <br>

                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Description
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>
                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <textarea id="description" name="description" rows="5" cols="50">description Min</textarea>
                    </div>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <textarea id="descriptionFull" name="descriptionFull" rows="10" cols="50">description Full</textarea>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Additional information
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        Audience:<br>
                        <input type="radio" id="Femme" name="audience" value="Femme"> Femme<br>
                        <input type="radio" id="Homme" name="audience" value="Homme"> Homme<br><br>
                        SnowLength:<br>
                        <input type="number" id="snowLength" name="snowLength" value="100">cm<br><br>
                        Level:<br>
                        <input type="radio" id="Débutant" name="level" value="Débutant"> Débutant<br>
                        <input type="radio" id="Intermédiaire" name="level" value="Intermédiaire"> Intermédiaire<br>
                        <input type="radio" id="Standard" name="level" value="Standard"> Standard<br>
                        <input type="radio" id="Pro" name="level" value="Pro"> Pro<br><br>
                        Code:<br>
                        <input type="text" id="code" name="code" value="D222"><br><br>
                        Brand:<br>
                        <input type="text" id="brand" name="brand" value="brand"><br><br>
                        qtyAvailable:<br>
                        <input type="number" id="qtyAvailable" name="qtyAvailable" value="0">qty<br>
                    </div>
                </div>
            </div>
            <input type="submit" value="Créer" class="flex-c-m size1 bg4 bo-rad-5 hov1 s-text1 trans-0-4">
        </div>
    </div>
</form>

<?php
$content = ob_get_clean();
require "gabarit.php";

