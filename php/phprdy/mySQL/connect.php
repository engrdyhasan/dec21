<?php
$dsn = 'mysql:host=localhost;dbname=test';
// $dsn = 'mysql:host=localhost;dbname=drnorady';
$user ='root';
// $user ='drnorady';
$pass = '';
// $pass = '74041896';
try {
    $db = new PDO($dsn, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connect';
} catch (PDOException $e) {
    // throw $e;
    echo 'Failed' . $e->getMessage();
}
// for ($i=1;  $i <= 500; $i++) { 
//     $stmt = $db->prepare("INSERT INTO `test`.`tbl` (`id`) VALUES ('127')");
//     $stmt->execute();
// }
for ($i=1;  $i <= 500; $i++) { 
    $stmt = $db->prepare("INSERT INTO `malak`.`tbl` (`string`) VALUES ('".$i."')");
    $stmt->execute();
}