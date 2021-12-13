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
$link2 =__DIR__.'/ALy';
// $files = scandir($link2);
// $files = scandir($link2, SCANDIR_SORT_ASCENDING);
$files = scandir($link2, SCANDIR_SORT_NONE);
// $files = scandir($link2);
echo "<pre>";
print_r($files);
echo "</pre>";
foreach ($files as $file) {
	if (is_file($link2 . "/ . $file")) {
	unlink($link2 . "/ . $file");
		
	}
}

