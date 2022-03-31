<?php

function getArticles(){

    $snowsQuery='SELECT code, brand, model, snowLength, price, qtyAvailable, photo, active FROM snows';

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}

function findArticle($code){

    $strSeparator = '\'';
    $snowsQuery='SELECT code, model, snowLength, audience, qtyAvailable, description, price, descriptionFull, level, photo, brand, active FROM snows WHERE code='.$strSeparator.$code.$strSeparator.';';

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}

function remove($code)
{
    $strSeparator = '\'';
    $snowsQuery='DELETE FROM snows WHERE code='.$strSeparator.$code.$strSeparator.';';

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}

function update($post)
{
    $strSeparator = '\'';
    $snowsQuery = 'UPDATE snows SET model = '.$strSeparator . $post['model'] . $strSeparator.',  snowLength = '.$strSeparator.$post['snowLength'].$strSeparator.', audience = '.$strSeparator.$post['audience'].$strSeparator.', description = '.$strSeparator.$post['description'].$strSeparator.', price = '.$strSeparator.$post['price'].$strSeparator.', descriptionFull = '.$strSeparator.$post['descriptionFull'].$strSeparator.', level = '.$strSeparator.$post['level'].$strSeparator.', brand = '.$strSeparator.$post['brand'].$strSeparator.' WHERE code = '.$strSeparator.$post['code'].$strSeparator.';';

    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}

function insert($post)
{
    $strSeparator = '\'';

    if ($post['audience']=='Homme')
    {
        $snowsQuery = 'INSERT INTO snows (code, brand, model, snowLength, audience, qtyAvailable, description, price, descriptionFull, level, photo) VALUES ('.$strSeparator.$post['code'].$strSeparator.', '.$strSeparator.$post['brand'].$strSeparator.', '.$strSeparator.$post['model'].$strSeparator.', '.$strSeparator.$post['snowLength'].$strSeparator.', '.$strSeparator.$post['audience'].$strSeparator.', '.$strSeparator.$post['qtyAvailable'].$strSeparator.', '.$strSeparator.$post['description'].$strSeparator.', '.$strSeparator.$post['price'].$strSeparator.', '.$strSeparator.$post['descriptionFull'].$strSeparator.', '.$strSeparator.$post['level'].$strSeparator.', '.$strSeparator.'view/content/images/men_snows/'.$post['photo'].$strSeparator.');';
    }else{
        $snowsQuery = 'INSERT INTO snows (code, brand, model, snowLength, audience, qtyAvailable, description, price, descriptionFull, level, photo) VALUES ('.$strSeparator.$post['code'].$strSeparator.', '.$strSeparator.$post['brand'].$strSeparator.', '.$strSeparator.$post['model'].$strSeparator.', '.$strSeparator.$post['snowLength'].$strSeparator.', '.$strSeparator.$post['audience'].$strSeparator.', '.$strSeparator.$post['qtyAvailable'].$strSeparator.', '.$strSeparator.$post['description'].$strSeparator.', '.$strSeparator.$post['price'].$strSeparator.', '.$strSeparator.$post['descriptionFull'].$strSeparator.', '.$strSeparator.$post['level'].$strSeparator.', '.$strSeparator.'view/content/images/women_snows/'.$post['photo'].$strSeparator.');';
    }
    require_once 'model/dbConnector.php';

    return executeQuerySelect($snowsQuery);
}