<?php
$LessonName = "Concatenation";
$homepage ="PHP - $LessonName ";
$heading ="Welcome To -"." ". $LessonName;
$brief ="Lesson about $LessonName and how to use it";
$Languages = "<ul>";
$Languages .= "<li>PHP</li>";
$Languages .= "<li>PYTHON</li>";
$Languages .= "<li>JS</li>";
$Languages .= "<li>Css</li>";
$Languages .= "</ul>";
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
<?php echo 'hello'.' from'.'    '.' php' ?>
<h2>The Languages which I love: </h2>
    <?php echo $Languages ?>


</body>
</html>