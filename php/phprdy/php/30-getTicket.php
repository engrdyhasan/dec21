
<h4>choose date</h4>
<select name="day" id="">
    <?php
for ($i=1; $i <= 31 ; $i++) { 
    echo  "<option value='$i'>" . $i . "</option>";
}
?>
</select>
<select name="month" id="">
    <?php
for ($i=1; $i <= 12 ; $i++) { 
    echo  "<option value='$i'>" . $i . "</option>";
}
?>

</select>
<select name="year" id="">
    <?php
    function generateYears($start, $end) {
for ($i=$start; $i <= $end ; $i++) { 
    echo  "<option value='$i'>" . $i . "</option>";
}
?>
</select>
<?php
}
generateYears(1900, 2099);
// --17-----
// $file = fopen("rady.py", "r");//the error will appear
// $file = @fopen("rady.py", "r");//the error will not appear but it is exists.
// $file = @fopen("rady.py", "r") or die("This file is not found");
// **********30---------------
function getTicket($user, $age = "unknown") {
    $ticket = rand(1000, 99999);
    if ($age >= 30) {
        $msg = "Hello ". $user. " Your age is " . $age ."<br>";
        $msg .= "You are qualified to get a ticket , congrates :)" ."<br>";
        $msg .= "Your ticket ID is [<span> ". $ticket. "</span>]";
    } else {
        $msg = "Hello". $user. " Your age is " . $age ."<br>";
        $msg .= "Sorry, You are not qualified to get a ticket :(" ;
    }
    return $msg;
}
$id = getTicket("engrdy",   52);
// **************************************
function makeFrame($element) {
    $frame = "<div class='nice-frame'>" . $element . "</div>";
    // $frame = "<div class='nice-frame'>";
    // $frame .= $element;
    // $frame .= "</div>";

    return $frame;
}
// $myElemet =makeFrame($id);
$myElemet =makeFrame(getTicket("engrdy",   52));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Function</title>
</head>
<style>
.nice-frame {
    padding: 10px;
    font-size: 20px;
    text-align: center;
    width: 800px;
    margin: 20px auto;
    border-radius: 10px;
    background-color: goldenrod;
    /* border: 1px double #ccc; */
    border: 1px groove #ccc;
    line-height: 3;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.nice-frame span{
    font-weight: bold;
    color: #f00;
}

</style>
<body>
    <?php //echo $id; ?>
    <?php echo $myElemet; ?>

</body>
</html>
<?php
$mylang = array("arduino","LINUX",
"PY",
array( "KIVY","TKINTER" ),
"WP",
array("PHP", "MYSQL",
"HTML",
array("PUG","CLI"),
"CSS",
array("B","SASS" ), 
"JS",
array( "BOM","DOM","json","jslint","ECMA15","jQuery","ajax","canvas","XML","GULP","VUE","Electron"  ),
"google search"

));
/*
$mylang[] = "WP";
$mylang[] = "PHP";
$mylang[] = "MYSQL";
$mylang[] = "B";
$mylang[] = "SASS";
$mylang[] = "CSS";
$mylang[] = "PY";
$mylang[] = "KIVY";
$mylang[] = "TKINTER";
$mylang[] = "arduino";
$mylang[] = "LINUX";
$mylang[] = "JS";
$mylang[] = "json";
$mylang[] = "jslint";
$mylang[] = "ECMA15";
$mylang[] = "jQuery";
$mylang[] = "ajax";
$mylang[] = "canvas";
$mylang[] = "DOM";
$mylang[] = "BOM";
$mylang[] = "VUE";
$mylang[] = "XML";
$mylang[] = "gulp";
$mylang[] = "Electron";
ECHO "<pre>";
print_r($mylang);
echo "</pre>";*/