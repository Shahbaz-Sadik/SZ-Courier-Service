<?php 

session_start();

unset($_COOKIE['email']); 
setcookie('email', null, -1, '/'); 

unset($_COOKIE['name']); 
setcookie('name', null, -1, '/'); 

session_destroy();

header('Location: index.php');
?>