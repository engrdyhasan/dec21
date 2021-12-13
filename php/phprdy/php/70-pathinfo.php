<?php

// =============[71-pathinfo]=======================
echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";
// =======================
echo str_repeat("*", 22)."<br>";
echo "<pre>";
print_r(pathinfo(__FILE__, PATHINFO_DIRNAME));
echo "<br>";
print_r(pathinfo(__FILE__, PATHINFO_BASENAME));
echo "<br>";
print_r(pathinfo(__FILE__, PATHINFO_EXTENSION));
echo "<br>";
print_r(pathinfo(__FILE__, PATHINFO_FILENAME));
echo "</pre>";
echo str_repeat("*", 22)."<br>";
// ==================
$link = (pathinfo(__FILE__));
echo $link['dirname'] . "<br>";
echo $link['basename'] . "<br>";
echo $link['extension'] . "<br>";
echo $link['filename'] . "<br>";
echo str_repeat("*", 22)."<br>";