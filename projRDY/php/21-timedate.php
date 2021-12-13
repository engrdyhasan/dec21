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
//     echo  "<option>" . $i . "</option>";
// }
$i=1;
for (;;) { 
    if ($i > 40) {
        break;
    }
    echo   $i . "<br>";
    $i++;
}
