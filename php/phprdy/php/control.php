<?php
echo "your email is " .$_GET['email']."<br>";
echo "your email is " .$_GET['password']."<br>";

$admins = array('rady', 'ali', 'hasan');
$username = $_GET['username'];
if (in_array($username, $admins)) {
	echo "welcome ".$username." to control panel for admin";
} else {
	echo "welcome ".$username." you are not admin";
}
