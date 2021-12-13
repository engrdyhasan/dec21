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
// //////////////////////////////////////////////
// *******************************
// --------------------------------
// +++++++++++++++++++++++++++++++++

// // -----------------------------------
// $devMonth = array(
// "January"   => "25%",
// "February"   => "35%",
// "March"   => "55%",
// "April"   => "45%",
// "May"   => "35%",
// "June"   => "65%",
// "July"   => "55%",
//  "August"   => "55%",
// "September"   => "95%",
// "October"   => "45%",
// "November"   => "35%",
// "December"   => "65%"
// );
// // -------------------
// ECHO "<pre>";
// print_r($devMonth);
// echo "</pre>";
// // -------------------
// $weekday = array(
// 1   => "Sat",
// 2   => "Sun",
// 3   => "Mon",
// 4   => "Tue",
// 5   => "Wed",
// 6   => "Thu",
// 7   => "Fri",
// 0   => "Fri",
// );
// // -------------------
// ECHO "<pre>";
// print_r($weekday);
// echo "</pre>";
// -------------------
$indexedArray = array( "JS","BOM","DOM","json","jslint","ECMA15","jQuery","ajax","canvas","XML","GULP","VUE","Electron");
array_push($indexedArray, "HTML","PUG","CLI");
// $indexedArray .= array( "JS","BOM","DOM","json","jslint","ECMA15","jQuery","ajax","canvas","XML","GULP","VUE","Electron");
$indexedArray[] = "arduino";
$indexedArray[8] = "nodejs";
array_push($indexedArray, "py","kivy","tkinter");
array_unshift($indexedArray, "CSS","B","SASS");
$indexedArray[] = "google";
// **************************************
echo "<pre>";
print_r($indexedArray);
echo "</pre>";
// ***************************
// *******************************
$firstitem = array_shift($indexedArray);
echo $firstitem . "<br>";
// **************************************
echo "<pre>";
print_r($indexedArray);
echo "</pre>";
// ***************************
echo "<pre>";
print_r($indexedArray);
echo "</pre>";
// ***************************
// *******************************
$lastitem = array_pop($indexedArray);
echo $lastitem . "<br>";
// **************************************
echo "<pre>";
print_r($indexedArray);
echo "</pre>";
// ***************************
// ***************************
foreach ($indexedArray as $value) {
    echo $value . "<br>";
	}
// +++++++++++++++++++++++++++++++++
// //////////////////////////////////////////////
// *******************************
// --------------[ASSOCIATIVE array]------------------
$langs = array(
"arduino"   => "25%",
"LINUX"   => "35%",
"PY"   => "55%",
"kivy"   => "45%",
"Tkinter"   => "35%",
"WP"   => "65%",
"PHP"   => "55%",
 "MYSQL"   => "55%",
"HTML"   => "95%",
"PUG"   => "45%",
"CLI"   => "35%",
"CSS"   => "65%",
"B"   => "45%",
"SASS"   => "75%", 
"JS"   => "70%",
"BOM"   => "75%",
"DOM"   => "65%",
"json"   => "02%",
"nodejs"   => "01%",
"jslint"   => "01%",
"ECMA15"   => "55%",
"jQuery"   => "35%",
"ajax"   => "02%",
"canvas"   => "25%",
"XML"   => "02%",
"GULP"   => "01%",
"VUE"   => "01%",
"Electron"   => "1%",
"google search"   => "15%",

);
ECHO "<pre>";
print_r($langs);
echo "</pre>";
echo "<ol>";
foreach ($langs as $key => $value) {
    echo "<li> my progress in {(". $key . ")} is => ". $value . "</li>";
}
echo "</ol>";

// ******************
// ******************
// ******************
// ******************
$mylangs = array("arduino","LINUX","google search",
"PY" => array( "KIVY","TKINTER" ),
"WP" => array("PHP", "MYSQL"),
"HTML"=> array("HTML","PUG","CLI"),
"CSS" => array("B","SASS" ), 
"JS" =>array( "JS","BOM","DOM","json","jslint","ECMA15","jQuery","ajax","canvas","XML","GULP","VUE","Electron"  ),
);
// ******************
ECHO "<pre>";
print_r($mylangs);
echo "</pre>";
// -------------------
echo "<ol>";
foreach ($mylangs as $key => $value) {
    echo "<li> my progress in {(". $key . ")} is => ". $value . "</li>";
}
echo "</ol>";
// ******************
// ******************
// ******************



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

echo "<ol>";
    foreach ($mylang as $lang) {
        echo "<li>" .$lang. "</li>";
    }
echo "</ol>";
