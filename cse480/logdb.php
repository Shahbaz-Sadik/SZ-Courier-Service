<?php 

require 'db.php';
session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];
$rememberme = $_POST['rememberme'];



$sql = "SELECT * FROM user WHERE `email` = '$email' AND `password` = '$pass' ";

$act = $db->query($sql);
$row = mysqli_num_rows($act);

foreach ($act as $key) {
	$name = $key['name'];
	$type = $key['type'];
}

if($row >= 1){
	if($rememberme == 'check'){
		setcookie('login', 'yes', time() + (86400 * 30), "/");
		setcookie('email', $email, time() + (86400 * 30), "/");
		setcookie('name', $name, time() + (86400 * 30), "/");
		setcookie('type', $type, time() + (86400 * 30), "/");
	}

	$_SESSION['email'] = $email;
	$_SESSION['type'] = $type;
	$_SESSION['name'] = $name;


	header('Location: home.php');

} else {
	$_SESSION['error'] = 'ID / Password is not match';

	header('Location: index.php');
}


?>