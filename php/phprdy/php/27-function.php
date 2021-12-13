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
    function generateYears($start, $end) {
for ($i=$start; $i <= $end ; $i++) { 
    echo  "<option value='$i'>" . $i . "</option>";
}
?>
</select>
<?php
}
generateYears(1900, 2099);
// for ($i=1;  ; $i++) { 
//     if ($i > 20) {
//         break;
//     }
//     echo  "<option>" . $i . "</option>";
// }
// $i=1;
// for (;;) { 
//     if ($i > 40) {
//         break;
//     }
//     echo   $i . "<br>";
//     $i++;
// }
// $i=1;
// while ($i <= 15) {
//     echo   $i . "<br>";
//     $i++ ;
// }
// $i=1;
// while ($i <= 25) :
//     echo   $i . "<br>";
//     $i++ ;
// endwhile;
// ---27---
function sayhello( $name, $age)
{
    echo ' <br>hello ' .$name . ' your age is ' . $age * 365.25 . ' dyas.';
}
sayhello('Nouran', 99);
