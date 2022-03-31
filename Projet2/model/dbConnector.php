<?php

function executeQuerySelect($query){

    $queryResult = null;
    $dbConnection = openDBConnection();

    if ($dbConnection != null)
    {
        $statement = $dbConnection->prepare($query);
        $statement->execute();
        $queryResult = $statement->fetchAll();
    }
    $dbConnection = null;
    return $queryResult;
}

function openDBConnection(){
    $tempDBConnection = null;
    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port=3306;
    $charset = 'utf8';
    $dbName = 'snows';
    $username = 'root';
    $userPsw = '*1c2p3n4v';
    $dsn = $sqlDriver.':host='.$hostname.';dbname='.$dbName.';port='.$port.';charset='.$charset;


    try
    {
        $tempDBConnection = new PDO($dsn, $username, $userPsw);
    }
    catch (PDOException $exception)
    {
        echo 'Connection failed'.$exception->getMessage();
    }
    return $tempDBConnection;

}   // class for exeptions' mangement

 class ModelDataExceptions{

 }





