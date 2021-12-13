<?php
// -------------------
$weekday = array(
1   => "Saturday",
2   => "Sunday",
3   => "Monday",
4   => "Tue",
5   => "Wed",
6   => "Thu",
0   => "Fri",
);
?>
<!-- ************************************************ -->
<!-- ************************************************ -->
<!-- ************************************************ -->
<!-- ************************************************ -->
<h4>choose date</h4>
<select name="day" id="">
    <?php
for ($d=1; $d <= 31 ; $d++) { 
    echo  "<option value='$d'>" . $d . "</option>";
}
?>
</select>
<select name="month" id="">
    <?php
for ($m=1; $m <= 12 ; $m++) { 
    echo  "<option value='$m'>" . $m . "</option>";
}
?>
</select>
<select name="year" id="">
    <?php
    function generateYears($start, $end) {
for ($y=$start; $y <= $end ; $y++) { 
    echo  "<option value='$y'>" . $y . "</option>";
}
?>
</select>
<?php
}
generateYears(751, 2099);
// *****************************
?>

<form action="" method="POST" class="form-inline my-2 my-lg-0">
<!-- <form action="" method="GET" class="form-inline my-2 my-lg-0"> -->
	
	<div class="form-group">
		<label for="input" class="col-sm-2 control-label">:</label>
		<div class="col-sm-10">
		</div>
	</div>
	<div>
		<!-- <label for="input">Username</label>
		<input type="url" name="" id=""> -->
	</div>
	<!-- <input type="month" name="month" id="month"> -->
	<input type="date" name="weekday" id="weekday">
<!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">submit</button>
</form>

<?php

$y= 2021;
$m=11;
$d=8;
if ($y%4 ==0) {
$devMonth = array(
	"1"   => 6,
	"2"   => 2,
	"3"   => 3,
	"4"   => 6,
	"5"   => 1,
	"6"   => 4,
	"7"   => 6,
	"8"   => 2,
	"9"  => 5,
	"10"   => 0,
	"11"   => 3,
	"12"   => 5
);
	} else {
	$devMonth = array(
	"1"   => 0,
	"2"   => 3,
	"3"   => 3,
	"4"   => 6,
	"5"   => 1,
	"6"   => 4,
	"7"   => 6,
	"8"   => 2,
	"9"  => 5,
	"10"   => 0,
	"11"   => 3,
	"12"   => 5
);
}
$dif = $y%4;
$dayNo= ($d + $devMonth[$m] + $dif -($y-$dif)/2 + ($y-$y%100)*49)%7;
echo "<li> Your weekday of [ $d-$m-$y ] is {(". $dayNo . ")}  => ". $weekday[$dayNo] . "</li>";

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
