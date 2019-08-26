<?php 
session_start();

require 'db.php';


$deliver = $_GET['delivar'];
$date = date("F d, Y H:i:s ");

if (isset($_GET['delivar'])) {
        //$sql = "DELETE FROM alumni WHERE A_id='{$_GET['A_id']}'";
        $sqlu= "UPDATE shipment SET status = 'Delivard', ddate = '$date' WHERE id = '$deliver'";
       
        if(mysqli_query($db, $sqlu)){
      // echo "Records were updated successfully.";
        	header('Location: admin.php');
        } else {
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
         }
    }

?>