<?php 

require 'db.php';
session_start();


$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$type = $_POST['type'];


//echo $id. ' '. $name . ' '.$email. ' '.$pass. ' '. $confirm. ' '.$type;



$sql = "SELECT email FROM user WHERE `email` = '$email'";
$sql2 = "INSERT INTO `user`( `name`, `email`, `password`, `type`) VALUES ('$name','$email', '$pass','$type')";

$act = $db->query($sql);
$row = mysqli_num_rows($act);

if($row >= 1){
	$_SESSION['error'] = 'ID already registered';
} else {
	$act2 = $db->query($sql2);

	header('Location: index.php');
}


?>