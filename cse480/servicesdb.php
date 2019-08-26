<?php 

require 'db.php';
session_start();


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$type = $_POST['type'];
$ploc = $_POST['pickup'];
$dloc = $_POST['delivar'];
$quantity = $_POST['quantity'];
$status = "pending";
$date = date("F d, Y H:i:s ");


//echo $id. ' '. $name . ' '.$email. ' '.$pass. ' '. $confirm. ' '.$type;

 if(isset($_SESSION['email'])){
        //header('Location: home.php');
 		$email= $_SESSION['email'];
    }

//$sql = "SELECT email FROM user WHERE `email` = '$email'";
$sql = "INSERT INTO shipment( fname, lname, email,  type, pickup, delivar, quantity, status, date) VALUES ('$fname','$lname', '$email', '$type', '$ploc', '$dloc','$quantity','$status', '$date')";

if(mysqli_query($db, $sql)){
    //echo "Records inserted successfully.";
    header('Location: profile.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}



?>