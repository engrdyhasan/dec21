<?php
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
</body>
</html>