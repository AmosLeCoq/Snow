<?php

/**
 * @param $userEmailAdress
 * @param $userPsw
 * @return mixed
 */
function isLoginCorrect($userEmailAdress, $userPsw)
{
    $result = false;

    $strSeparator = '\'';
    $loginQuery = 'SELECT userEmailAddress, userHashPsw, type FROM users WHERE userEmailAddress ='.$strSeparator.$userEmailAdress.$strSeparator.' AND userHashPsw ='.$strSeparator.$userPsw.$strSeparator;

    require_once "model/dbConnector.php";
    $queryResult = executeQuerySelect($loginQuery);

    if(count($queryResult)==1)
    {
        if($queryResult[0]["type"])
        {
           // $_POST['type']==1;
            return 'admin';
        }
        return 1;
    }
    return false;
}


function registerDB($mailUser, $pswUser)
{
    $result = true;
    $strSeparator = '\'';

    $register = 'SELECT userEmailAddress FROM users WHERE userEmailAddress ='.$strSeparator.$mailUser.$strSeparator;

    require_once "model/dbConnector.php";
    $queryResult = executeQuerySelect($register);

    if(count($queryResult)==1)
    {
        $result = false;
    }
    return $result;
}

function registerInDB($mailUser, $pswUser)
{
    $strSeparator = '\'';
    $registerDb = 'INSERT INTO users (userEmailAddress, userHashPsw, type) VALUE ('.$strSeparator.$mailUser.$strSeparator.','.$strSeparator.$pswUser.$strSeparator.','.$strSeparator.'0'.$strSeparator.');';
    require_once "model/dbConnector.php";
    $queryResult = executeQuerySelect($registerDb);
}
