<?php

$dsn = 'mysql:host='.$host. ';dbname='.$dbname;

try{
    $conn = new PDO($dsn, $user, $password);
    $conn -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $conn -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    echo "Connected successfully!";
} catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage();
    die();
}