<?php
// define('SITE_STATUS', 'open');
const SITE_STATUS = TRUE;
if (SITE_STATUS == "open") {
ECHO __DIR__ ."<BR>";
ECHO __FILE__ ."<BR>";
ECHO __LINE__ ."<BR>";
echo PHP_INT_MAX;
$s = "Variables";
$homepage ="PHP - $s ";
$heading ="Welcome To - $s";
$brief ="Lesson about $s and how to use it";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $homepage ?></title>
</head>
<body>
    <h1><?php echo $heading ?></h1>
    <p><?php echo $brief ?></p>
<?php echo 'hello from php' ?>
<?php
}else{
    echo "website is closed for maintenance";
}?>
</body>
</html>