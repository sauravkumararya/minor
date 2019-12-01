<?php

if(isset($_POST['submit'])){
include '../config/config.php';
session_start();
function redirectPage($error)
{
    $error = $error;
        $_SESSION['ceoError'] = $error;
        header("Location: ../home.php");
}
$error="";

$message   = trim($_POST['message']);
$time = time();

	$sql = "INSERT INTO `message` (`id`, `time`, `message`) VALUES (NULL, '$time', '$message')";
	$run = mysqli_query($con,$sql);
	if($run){
            redirectPage("Successfully Sent"); 
	}else{
            
	
}
}else{
	header("Location: 404.php");
}



?>