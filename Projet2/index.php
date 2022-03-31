<?php
/**
 * @file      index.php
 * @brief     This file is the rooter managing the link with controllers.
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   26-MAR-2021
 */

require "controller/navigation.php";
require "controller/users.php";
require "controller/articles.php";

session_start();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'login' :
            login($_POST);
            break;
        case 'register':
            register($_POST);
            break;
        case 'logout':
            logout();
            break;
        case 'displayArticles':
            displayArticles();
            break;
        case 'article':
            $code=$_GET['code'];
            articles($code);
            break;
        case 'articlesAdmin':
            articlesAdmin();
            break;
        case 'modif':
            $code=$_GET['code'];
            modif($code);
            break;
        case 'modifMsql':
            modifMsql($_POST);
            break;
        case 'remove':
            $code=$_GET['code'];
            removeArticle($code);
            break;
        case 'create':
            create();
            break;
        case 'createMsql':
            createMsql($_POST);
            break;
        case 'panier':
            viewPanier();
            break;
        default :
            lost();
    }
} else {
    home();
}