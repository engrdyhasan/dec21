<?php
$dsn = 'mysql:host=localhost;dbname=product';
// $dsn = 'mysql:host=localhost;dbname=drnorady';
// $user ='drnorady';
$user ='root';
// $pass = '74041896';
$pass = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
    $db = new PDO($dsn, $user, $pass, $options);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'You are connected';
    
    $q = "INSERT INTO items (name) VALUES ('scanner')";
    $q = "INSERT INTO items (name) VALUES ('منتج 6')";
    $db->exec($q);
    /*
    */
} catch (PDOException $e) {
    // throw $e;
    echo 'Failed' . $e->getMessage();
}