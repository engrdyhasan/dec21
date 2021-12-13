<?php
$name = "Data type";
$homepage ="PHP - ".$name ;
$heading ="Welcome To - $name";
$brief ="Lesson about $name and how to use it";
$num = -231068;
$bool = TRUE;
$float = .7404;
$nul = NULL;
$resource = fopen('z6.txt', 'r');
$arr = array(
    1 => "engRdy",
    2 => 50000000,
    3 => 'hasan',
);
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
<?php echo 'hello engRdy from php' ?>
<?php
echo "<h2>Get Type</h2>";
echo gettype($homepage)."<br>";
echo gettype($num)."<br/>";
echo gettype($bool)."<br/>";
echo gettype($float)."<br/>";
echo gettype($arr)."<br/>";
echo gettype($nul)."<br/>";
echo gettype($resource)."<br/>";
// --------------------------------------
echo "<h2>var dump</h2>";
var_dump($heading);echo "<br/>";
var_dump($num);echo "<br>";
var_dump($bool);echo "<br>";
var_dump($float);echo "<br>";
var_dump($arr);echo "<br>";
var_dump($nul);echo "<br>";
var_dump($resource);echo "<br>";
// ------------------------------------------
if (100 > 50) {
    echo "Good";
}
?>
</body>
</html>