<?php
// rmdir('hasan');
// mkdir('hasan');
// **********************[64-file_Exists,is-Writable]***************
echo dirname(__FILE__).'<br />';
// mkdir('CSS');
$f = 'hamza.txt';
file_put_contents('PHP\\taqwa.txt', '<br />	engrdy is a civil Egyptian engineer');
$fil = 'D:\xampp\htdocs\phprdy\php\PHP\taqwa.txt';
file_put_contents('CSS\eng.txt', '<br />	engrdy is the best MANEGER engineer IN THE WORLD', FILE_APPEND);
$file ='D:\\xampp\\htdocs\\phprdy\\php\\eng.txt';
if (is_writable($fil)){
	echo 'Good the file[' .$fil. '] is writable <br />';
}else{
	echo 'Sorry the file ['.$fil.'] is not writable <br />';
}
if (file_exists($file)){
	echo 'Good the file[' .$file. '] is found <br />';
}else{
	echo 'Sorry the file ['.$file.'] is not found <br />';
}
// **********************[65]***************
$name = 'nour';
if (is_dir($name)) {
	echo 'Sorry, the diroctory '. $name . '	is exists, no need to create it'.'<br />';
} else {
	mkdir($name);
	echo 'the diroctory '. $name . '	is created'.'<br />';
}
echo str_repeat('*',22).'<br />';

if (is_dir($name)) {
	rmdir($name);
	echo 'the diroctory '. $name . '	is deleted'.'<br />';
} else {
	echo 'Sorry, the diroctory '. $name . '	is not exists'.'<br />';
}
// *****************[66]******
echo __FILE__.'<br />';
echo dirname(__FILE__).'<br />';
echo dirname(__FILE__, 3).'<br />';
// include dirname(__FILE__)."/../phprdy/php/53-trim.php";
// include __DIR__."/../phprdy/php/53-trim.php";
echo str_repeat('*',22).'<br />';
echo basename(__FILE__, '.php').'<br />';
echo "Your file name is " . basename(__FILE__, '.php').'<br />';
echo str_repeat('*',22).'<br />';
if (basename(__FILE__, '.php')=== "63-64-65-f-exists,is-writable"){
	echo "your file is ready now" ."<br />";
}
// ***********[67-training]*****************************
echo str_repeat('&',22).'<br />';
// mkdir('Php');
if (file_exists(__DIR__ . '/Php')) {
	echo 'Sorry this directory exists';
	// rmdir('Php');
} else {
	mkdir(__DIR__ . '/PHP');
	echo "your directory is ready now" ."<br />";
}
$directory = __DIR__ . '\PHP\\';
file_put_contents($directory . 'train.php', 'eng rady is the best');
$file = $directory . 'train.php';
echo '<br />'.$file.'<br />' ;
echo str_repeat('&',22).'<br />';
// ***************************
chmod($file, 0444);
if (is_writable($file)) {
	file_put_contents($file, "not writable");
} else {
	chmod($file, 0755);
	file_put_contents($file, "<?php echo 'writable';");
	
}
include $file;
// *****************[68]********************************
// file_put_contents('PHP\\Hasan.txt', 'this file created with php by engrdy 53 years old ,from sohag- Egypt');
file_put_contents('PHP\\Hasan.txt', '<br />	engrdy is the best engineer', FILE_APPEND);
file_put_contents('PHP\\Hasan.txt', '<br />	engrdy is the best engineer', LOCK_EX);
file_put_contents('PHP\\Hasan.txt', '<br />	engrdy is the best engineer', FILE_APPEND | LOCK_EX);
// include "60-substr-count.php";
// *****************[69]********
// echo file_get_contents('http://www.elzero.info/');
echo file_get_contents('read.txt');
echo file_get_contents('Hasan.txt');
echo file_get_contents('Hasan.txt', false, NULL, 10, 5);
$name = file_get_contents('Hasan.txt', false, NULL, 10, 5);
$name = file_get_contents('Hasan.txt');
file_put_contents('write.txt', $name);
echo str_repeat('&',22).'<br />';
// =================[70rename,copy]==============
// copy('weekDay.php','weekDay.py');
// if(!copy('weekDay.php','D:\\git\\projRDY\\weekDay2.py')){
// 	echo 'file has not been copied';
// }else {
// 	echo 'file has been copied';
// }
// // ---------
// mkdir('backup');
// // ---------
// function copyMe($ext)
// {
// 	$org = __FILE__;
// return copy($org, $org. "." . $ext);
// }
// copyMe('rady');
// // --------[renaame]-------
// rename('weekDay.php','D:\\git\\projRDY\\weekDay3.py');
// rename('weekDay.py',__DIR__.'\\backup\\weekDay.php');
// copy(__FILE__,__DIR__.'\\backup\\'. __FILE__.'py');
// copy(__FILE__,'\\backup\\'. __FILE__.'.py');
// rename(__FILE__,__DIR__.'\\backup\\2021.py');
copy(__FILE__,__DIR__.'\\backup\\2021.py');
// ---------
// ---------

