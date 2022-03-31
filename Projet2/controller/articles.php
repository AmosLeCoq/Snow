<?php

function displayArticles()
{
    try {
            // look for data in db
            require_once "model/articlesManager.php";
            $articles = getArticles();
    }
    catch (ModelSataBaseExceptiion $ex){
        $articleErrorMessage="nous rencontrons temporairement technique";
    } finally {
        require"view/articles.php";
    }
}

function articles($code)
{
    try {
        // look for data in db
        require_once "model/articlesManager.php";
        $articles = findArticle($code);
    }
    catch (ModelSataBaseExceptiion $ex){
        $articleErrorMessage="nous rencontrons temporairement technique";
    } finally {
        require"view/articles-detail.php";
    }
}

function articlesAdmin()
{
    try {
        // look for data in db
        require_once "model/articlesManager.php";
        $articles = getArticles();
    }
    catch (ModelSataBaseExceptiion $ex){
        $articleErrorMessage="nous rencontrons temporairement technique";
    } finally {
        require"view/articlesAdmin.php";
    }
}

function removeArticle($code)
{
    try {
        require_once "model/articlesManager.php";
        $articles = remove($code);
        $articles = getArticles();
    }
    catch (ModelSataBaseExceptiion $ex)
    {
        $articleErrorMessage="nous rencontrons temporairement technique";
    } finally {
        require"view/articlesAdmin.php";
    }
}

function modif($code)
{
    try {
        // look for data in db
        require_once "model/articlesManager.php";
        $articles = findArticle($code);
    }
    catch (ModelSataBaseExceptiion $ex){
        $articleErrorMessage="nous rencontrons temporairement technique";
    } finally {
        require"view/articleModif.php";
    }
}

function modifMsql($post)
{
    try {
        // look for data in db
        require_once "model/articlesManager.php";
        $articles = update($post);

    }
    catch (ModelSataBaseExceptiion $ex){
        $articleErrorMessage="nous rencontrons temporairement technique";
    } finally {
        $articles = getArticles();
        require"view/articlesAdmin.php";
    }
}

function create()
{
    require"view/articleCreate.php";
}

function createMsql($post)
{
    try {
        require_once "model/articlesManager.php";
        $articles = insert($post);
    }
    catch (ModelSataBaseExceptiion $ex){
        $articleErrorMessage="nous rencontrons temporairement technique";
    } finally {
        $articles = getArticles();
        require"view/articlesAdmin.php";
    }
}

?>
