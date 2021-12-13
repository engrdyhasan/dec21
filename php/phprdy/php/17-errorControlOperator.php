<?php
// pre increment
$rdy =10;
echo ++$rdy . "<br>";
echo ++$rdy . "<br>";
echo ++$rdy . "<br>";
echo ++$rdy . "<hr>";

// post increment
// $rdy =10;
echo $rdy++ . "<br>";
echo $rdy++ . "<br>";
echo $rdy++ . "<br>";
echo $rdy++ . "<hr>";
// pre Decrement
echo $rdy-- . "<br>";
echo $rdy-- . "<br>";
echo $rdy-- . "<br>";
echo $rdy-- . "<hr>";
// post Decrement
echo --$rdy . "<br>";
echo --$rdy . "<br>";
echo --$rdy . "<br>";
echo --$rdy . "<br>";
// --17-----
$file = fopen("rady.py", "r");//the error will appear
$file = @fopen("rady.py", "r");//the error will not appear but it is exists.
$file = @fopen("rady.py", "r") or die("This file is not found");