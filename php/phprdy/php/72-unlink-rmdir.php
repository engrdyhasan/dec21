<?php

// =============[71-pathinfo]=======================
echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";
// =======================
// echo str_repeat("*", 22)."<br>";
// echo "<pre>";
// print_r(pathinfo(__FILE__, PATHINFO_DIRNAME));
// echo "<br>";
// print_r(pathinfo(__FILE__, PATHINFO_BASENAME));
// echo "<br>";
// print_r(pathinfo(__FILE__, PATHINFO_EXTENSION));
// echo "<br>";
// print_r(pathinfo(__FILE__, PATHINFO_FILENAME));
// echo "</pre>";
// echo str_repeat("*", 22)."<br>";
// // ==================
// $link = (pathinfo(__FILE__));
// echo $link['dirname'] . "<br>";
// echo $link['basename'] . "<br>";
// echo $link['extension'] . "<br>";
// echo $link['filename'] . "<br>";
// mkdir('ALy');
echo str_repeat("*", 22)."<br>";
// $link2 =__DIR__.'/ALy';
// $files = scandir($link2);
// $files = scandir($link2, SCANDIR_SORT_ASCENDING);
// $files = scandir($link2, SCANDIR_SORT_NONE);
// $files = scandir($link2);
// echo "<pre>";
// print_r($files);
// echo "</pre>";
// foreach ($files as $file) {
// 	if (is_file($link2 . "/ . $file")) {
// 	unlink($link2 . "/ . $file");
		
// 	}
// }
// =================[72]===================
// $file = "read.txt";
// $file = "z6 (2).php";
// $file = "z9DataType.php";
// $file = "63-69-f-exists,is-writable.php.rady";
// $file = "eng.txt";
// $file = "do while.php";
// if (file_exists($file) && is_writable($file)) {
// 	unlink($file);
// 	echo 'Good, the file is removed';
// }else{
// 	if (file_exists($file)) {
// 		echo 'Sorry the file is not writable, we will change its permission now, please RELOAD to remove';
// 		chmod($file, 0755);
// 	}else {
// 		echo 'Sorry the file is not exists';
		
// 	}
// }
// ===============
// rmdir('rady');
// -------------------
// ============[74-Fopen]=================
// fopen(filename, mode, include_path, context)
$fileHandle = fopen('write.txt', 'r');#read only[starting from the beginning of the file]-file must be EXIT
$fileHandle = fopen('write.txt', 'r+');//read & WRITE[starting from the beginning of the file]-file must be EXIT
$fileHandle = fopen('read.txt', 'w');#write only[open & clear the content]-create the file if NOT EXIT
$fileHandle = fopen('read.txt', 'w+');#write & READ[open & clear the content]-create the file if NOT EXIT
$fileHandle = fopen('read.txt', 'a');#write only[open & write from the end]-create the file if NOT EXIT
$fileHandle = fopen('read.txt', 'a+');#write & READ[open & write from the end]-create the file if NOT EXIT
// $fileHandle = fopen('read.txt', 'x');#write only[return error if the file exit]-create the file 
$fileHandle = fopen('read.txt', 'a+');#write & READ[return error if the file exit]-create the file 
