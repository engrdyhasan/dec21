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
$repeat = str_repeat("engRady is the best ", 9);
echo "<br>".$repeat;
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
// echo "<br>".str_shuffle($repeat);
echo "<br>".strlen($repeat);
echo "<br>".$repeat;
// ******************************************************************
// ******************************************************************
// ******************************************************************
// ******************************************************************
// ******************
$mylangs = array("arduino","Linux","google search","CLI",
"JS","BOM","DOM","json","jslint","ECMA15","jQuery","ajax","canvas","XML","GULP","VUE","Electron" ,
"CSS","B","SASS" , 
"PY","KIVY","TKINTER" ,
"WP","PHP", "MYSQL",
"HTML","HTML","PUG",
);
// ******************
$str1 = implode(" - 	", $mylangs);
$str0 = implode("	", $mylangs);
echo "Hello our moderators name is: " .$str1;
// ******************
$arr2 = str_split($str1, 70);
// ******************
ECHO "<pre>";
print_r($arr2);
echo "</pre>";
// **********[49]****************
// **********[str_replace("search", "RADY ", $str1, count)]****************
$str3 = str_replace("search", " ", $str1);
$str6 = str_replace(array("CLI","B","PY"), "ENGrDY ", $str3);
$str7 = str_replace(array("CLI","KIVY","PY","TKINTER"), array("cli","kivy","py","tkinter"), $str3);
echo "Hello our moderators name is: " .$str3."<BR>";
// echo "Hello our moderators name is: " .$str6."<BR>";
echo "Hello our moderators name is: " .$str7."<BR>";
// ***************[51]******************
$str8 = "Line 1\nLine 2\n\rLine 3\nLine 4\r";
echo ": " .$str8."<BR>";
$order = array("\n","\n\r","\r");
$str9 = str_replace($order, "<br /> ", $str8, $i);
echo str_repeat("*@#", 22)."<br/>";
echo ": " .$str9."<BR>". $i."<br>";
echo str_repeat("*@#", 22)."<br/>";
// ****************[52]*****************
// ****************[strlower-strtoupper]*****************
$lower = strtolower($str7)."<br>";
echo $lower;
$upper = strtoupper($lower)."<br>";
echo $upper;
$msg = "You are qualified to get a ticket , congrates :)" ."<br>";
$lfrst = lcfirst($msg)."<br>";
echo $lfrst ."<br>";
$ufrst = ucfirst($lower)."<br>";
echo $ufrst ."<br>";
$uall = ucwords($lower)."<br>";
echo $uall ."<br>";
echo str_repeat("@", 22)."<br/>";
// ******************[53]***************
// *******************[trim]**************
$yos = "yosri is a bad maneger";
echo var_dump($yos)."<br/>";
$yos = "\x0B \x0B \x0B		 yosri is a bad maneger \x0B \x0B \x0B			";
echo var_dump($yos)."<br/>";
$trimed = rtrim($yos);
echo var_dump($trimed)."<br/>";
$trimed = ltrim($yos);
echo var_dump($trimed)."<br/>";
$trimed = trim($yos);
echo var_dump($trimed)."<br/>";
$remain = rtrim($trimed, "yo ger");
echo var_dump($remain)."<br/>";
$remain = ltrim($trimed, "yo ger");
echo var_dump($remain)."<br/>";
$remain = trim($trimed, "yo ger");
echo var_dump($remain)."<br/>";

// *********************************
echo str_repeat("@#", 22);
echo str_repeat("*#", 22);
echo str_repeat("*@", 22);
echo str_repeat("@#", 22);
echo str_repeat("*#", 22);
echo str_repeat("*@", 22);
echo str_repeat("@#", 22);
echo str_repeat("*#", 22);
echo str_repeat("*@", 22);
// *********************************
// ***********[ explode("-", $tags);]*******
// $str4 = explode("-", $str3);
// ECHO "<pre>";
// print_r($str4);
// echo "</pre>";
// // ***************[ $str1 = implode("	", $mylangs);]***
// $str5 = implode("+", $str4);
// ECHO "<pre>";
// print_r($str5);
// echo "</pre>";
// ******************
// $arr4 = chunk_split($str1);
// $arr4 = chunk_split($str1,1,"/");
// ******************
// ECHO "<pre>";
// print_r($arr4);
// echo "</pre>";
// **************************
// ***/**//*/**//**//*/*//*/** */ */ */ */
// $lngs = "arduino, Linux,google search, PY, KIVY, TKINTER, WP, PHP, MYSQL, HTML, HTML, PUG, CLI, CSS, B, SASS, JS, BOM, DOM, json, jslint, ECMA15, jQuery, ajax, canvas, XML, GULP, VUE, Electron" ;
// // $arr = explode("," , $lngs);
// // $arrn = explode("," , $lngs, -3);
// $arr3 = str_split($lngs);
// // $STR = chunk_split($mylangs,2," @ ");
// // -------------------
// echo "$lngs = ".$lngs;
// // -------------------
// ECHO "<pre>";
// print_r($arr2);
// echo "</pre>";
// /*-*/*-*//**-*/*--**/--**-/*-**/**-*/***/-*/**-*/ */ */ */ */
// ECHO "<pre>";
// print_r($arr);
// echo "</pre>";
// // **********************
// ECHO "<pre>";
// print_r($arrn);
// echo "</pre>";
// // -------------app------
// $file_css ="widget,clock,header,footer";
// $link = explode(",", $file_css);
// for ($i=0; $i < count($link) ; $i++) { 
// 	echo "<link rel='stylesheet' href='css/" .$link[$i] . ".css'>";
// }
// // **************************
// $tags ="form-learn-lesson-article";
// $ele = explode("-", $tags);
// for ($i=0; $i < count($ele) ; $i++) { 
// 	echo "<span class='tag'>" .$ele[$i] . "</span><br>";
// }
// ECHO "<pre>";
// print_r($STR);
// echo "</pre>";
// -------------------

// echo "<ol>";
// foreach ($mylangs as $key => $value) {
//     echo "<li> my progress in {(". $key . ")} is => ". $value . "</li>";
// }
// echo "</ol>";
// // ******************************************************************
// $indexedArray = array( "JS","BOM","DOM","json","jslint","ECMA15","jQuery","ajax","canvas","XML","GULP","VUE","nodejs","Electron","HTML","PUG","CLI");
// // $indexedArray .= array( "JS","BOM","DOM","json","jslint","ECMA15","jQuery","ajax","canvas","XML","GULP","VUE","Electron");
// $indexedArray[] = "arduino";
// $indexedArray[8] = "Linux";
// array_push($indexedArray, "py","kivy","tkinter");
// array_push($indexedArray, "CSS","B","SASS");
// // array_shift($indexedArray, "CSS","B","SASS");
// array_unshift($indexedArray, "CSS","B","SASS");
// $indexedArray[] = "google";
// // **************************************
// echo "<pre>";
// print_r($indexedArray);
// echo "</pre>";

// $reversed = array_reverse($indexedArray);

// echo "<pre>";
// print_r($reversed);
// echo "</pre>";

// // $reversedrdy = array_reverse($indexedArray, false);
// $reversedrdy = array_reverse($indexedArray, true);

// echo "<pre>";
// print_r($reversedrdy);
// echo "</pre>";
// // ***************************
// // *******************************
// $firstitem = array_shift($indexedArray);
// echo $firstitem . "<br>";
// // **************************************
// echo "<pre>";
// print_r($indexedArray);
// echo "</pre>";
// // ***************************
// echo "<pre>";
// print_r($indexedArray);
// echo "</pre>";
// // ***************************
// // *******************************
// $lastitem = array_pop($indexedArray);
// echo $lastitem . "<br>";
// // **************************************
// echo "<pre>";
// print_r($indexedArray);
// echo "</pre>";
// // ***************************
// // ***************************
// foreach ($indexedArray as $value) {
//     echo $value . "<br>";
// 	}
// // +++++++++++++++++++++++++++++++++
// // //////////////////////////////////////////////
// // *******************************
// // --------------[ASSOCIATIVE array]------------------
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
// "Electron"   => "1%",
// "google search"   => "15%",

// );
// ECHO "<pre>";
// print_r($langs);
// echo "</pre>";


// $myreversed = array_reverse($langs);
// // $myreversed = array_reverse($langs,false);
// $ourreversed = array_reverse($langs,true);

// echo "<pre>";
// print_r($myreversed);
// echo "</pre>";

// echo "<pre>";
// print_r($ourreversed);
// echo "</pre>";

// echo "<pre>";
// shuffle($langs);
// echo "</pre>";
// print_r($langs);

// echo "<ol>";
// foreach ($langs as $key => $value) {
//     echo "<li> my progress in {(". $key . ")} is => ". $value . "</li>";
// }
// echo "</ol>";

// // ******************
// // ******************
// // ******************

// // ******************
// // ******************
// // ******************
// $mylang[] = "WP";
// $mylang[] = "PHP";
// $mylang[] = "MYSQL";
// $mylang[] = "B";
// $mylang[] = "SASS";
// $mylang[] = "CSS";
// $mylang[] = "PS";
// $mylang[] = "PY";
// $mylang[] = "KIVY";
// $mylang[] = "TKINTER";
// $mylang[] = "arduino";
// $mylang[] = "LINUX";
// $mylang[] = "JS";
// $mylang[] = "json";
// $mylang[] = "jslint";
// $mylang[] = "ECMA15";
// $mylang[] = "ajax";
// $mylang[] = "canvas";
// $mylang[] = "DOM";
// $mylang[] = "BOM";
// $mylang[] = "XML";
// $mylang[] = "gulp";
// $mylang[] = "jQuery";
// $mylang[] = "VUE";
// $mylang[] = "nodejs";
// $mylang[] = "Electron";
// $mylang[] = "google";
// $mylang[] = "HTML";
// $mylang[] = "pug";
// $mylang[] = "CLI";


// echo "<pre>";
// shuffle($mylang);
// echo "</pre>";
// print_r($mylang);

// echo "<ol>";
//     foreach ($mylang as $lang) {
//         echo "<li>" .$lang. "</li>";
//     }
// echo "</ol>";
// // / ******************

// ECHO "<pre>";
// print_r($mylang);
// echo "</pre>";
// sort($mylang);
// ECHO "<pre>";
// print_r($mylang);
// echo "</pre>";
// sort($mylang, SORT_REGULAR);
// ECHO "<pre>";
// print_r($mylang);
// echo "</pre>";
// rsort($mylang, SORT_REGULAR);
// ECHO "<pre>";
// print_r($mylang);
// echo "</pre>";
// sort($mylang, SORT_STRING);
// ECHO "<pre>";
// print_r($mylang);
// echo "</pre>";
// rsort($mylang, SORT_STRING);
// ECHO "<pre>";
// print_r($mylang);
// echo "</pre>";
// // -------------------

// shuffle($mylang);
// echo "<pre>";
// print_r($mylang);
// echo "</pre>";