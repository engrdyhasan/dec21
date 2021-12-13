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
<?PHP
// --------------[ASSOCIATIVE array]------------------
// $langs = array(
// "arduino"   => "25%",
// "LINUX"   => "35%",
// "PY"   => "55%",
// "kivy"   => "45%",
// "Tkinter"   => "35%",
// "WP"   => "65%",
// "PHP"   => "55%",
//  "MYSQL"   => "55%",
// "HTML"   => "95%",
// "PUG"   => "45%",
// "CLI"   => "35%",
// "CSS"   => "65%",
// "B"   => "45%",
// "SASS"   => "75%", 
// "JS"   => "70%",
// "BOM"   => "75%",
// "DOM"   => "65%",
// "json"   => "02%",
// "nodejs"   => "01%",
// "jslint"   => "01%",
// "ECMA15"   => "55%",
// "jQuery"   => "35%",
// "ajax"   => "02%",
// "canvas"   => "25%",
// "XML"   => "02%",
// "GULP"   => "01%",
// "VUE"   => "01%",
// "nodejs"   => "01%",
// "Electron"   => "1%",
// "google "   => "15%",
// );
$langs = array(
	"arduino"   => 25,
	"LINUX"   	=> 35,
	"PY"   			=> 55,
	"kivy"  		=> 45,
	"Tkinter"   => 35,
	"WP"   			=> 65,
	"PHP"   		=> 55,
	"MYSQL"   => 55,
	"HTML"   => 95,
	"PUG"   => 45,
	"CLI"   => 35,
	"CSS"   => 65,
	"B"   => 45,
	"SASS"   => 75,
	"JS"   => 70,
	"BOM"   => 75,
	"DOM"   => 65,
	"json"   => 02,
	"nodejs"   => 1,
	"jslint"   => 1,
	"ECMA15"   => 55,
	"jQuery"   => 35,
	"ajax"   => 2,
	"canvas"   => 25,
	"XML"   => 2,
	"GULP"   => 1,
	"VUE"   => 1,
	"nodejs"   => 1,
	"Electron"   => 1,
	"google "   => 15
);
ECHO "<pre>";
print_r($langs);
echo "</pre>";
// **********************
echo "<ol>";
foreach ($langs as $key => $value) {
    echo "<li> my progress in {(". $key . ")} is => ". $value . "</li>";
}
echo "</ol>";
// ***************************
ECHO "<pre>";
print_r($langs);
echo "</pre>";

asort($langs);
ECHO "<pre>";
print_r($langs);
echo "</pre>";

asort($langs);

ECHO "<pre>";
print_r($langs);
echo "</pre>";

arsort($langs);

ECHO "<pre>";
print_r($langs);
echo "</pre>";

// asort($langs, SORT_STRING);
asort($langs);

ECHO "<pre>";
print_r($langs);
echo "</pre>";

arsort($langs);

ECHO "<pre>";
print_r($langs);
echo "</pre>";