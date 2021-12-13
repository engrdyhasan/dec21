<?php
// pre increment
// $rdy =10;
// echo ++$rdy . "<br>";
// echo ++$rdy . "<br>";
// echo ++$rdy . "<br>";
// echo ++$rdy . "<hr>";

// // post increment
// // $rdy =10;
// echo $rdy++ . "<br>";
// echo $rdy++ . "<br>";
// echo $rdy++ . "<br>";
// echo $rdy++ . "<hr>";
// // pre Decrement
// echo $rdy-- . "<br>"; 
// echo $rdy-- . "<br>";
// echo $rdy-- . "<br>";
// echo $rdy-- . "<hr>";
// // post Decrement
// echo --$rdy . "<br>";
// echo --$rdy . "<br>";
// echo --$rdy . "<br>";
// echo --$rdy . "<br>";
// --17-----
// $file = fopen("rady.py", "r");//the error will appear
$file = @fopen("rady.py", "r");//the error will not appear but it is exists.
// $file = @fopen("rady.py", "r") or die("This file is not found");
// ----------20-----------------
?>
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
for ($i=1968; $i <= 2099 ; $i++) { 
    echo  "<option value='$i'>" . $i . "</option>";
}
?>
</select>
<?php
// for ($i=1;  ; $i++) { 
//     if ($i > 20) {
//         break;
//     }
//     echo  "<option value='$i'>" . $i . "</option>";
// }
// $i=1;
// do {
//     echo  .     $i++    . ;
//     // echo  "<option>".     $i++    . "</option>";
// } while ($i <= 10);
// $countries =array("Egypt", "Saudi Arabia", "Qatar", "Syria", "Sudan", "Palestine");
// foreach ($countries as $value) {
//     echo  $value  . "<br>" ;
    
// }
$countries =array(
"EG" => "Egypt",
"SU" => "Saudi Arabia", 
"QA" => "Qatar",
"SY" => "Syria", 
"SU" => "Sudan",
"PA" => "Palestine",
"BA" => "Bahrain",
);
foreach ($countries as $key => $value) {
    echo  $key  . "<br>" ;
}
foreach ($countries as $key => $value) {
    echo  $value  . "<br>" ;
}
foreach ($countries as $key => $value) {
echo $key ." => ". $value  . "<br>" ;
    
}