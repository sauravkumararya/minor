<?php


function redirectPage($error)
{
	$error = $error;
        $_SESSION['ceoError'] = $error;
        header("Location: ../home.php");
}



include '../config/config.php';
session_start();
$empid = $_GET['empid'];
$sql3 = "SELECT * FROM faculty where empid = '$empid'";
$run3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($run3);



$error="";
$empid      = $row3['empid'];
$name       = $row3['Name'];
$fname      = $row3['fname'];
$email      = $row3['email'];
$mobile     = $row3['mobile'];
$password   = $row3['password'];
$address    = $row3['address'];
$img_url    = $row3['img_url'];

     /////check existing email
	$sql2 = "SELECT email FROM dean WHERE email='$email'";
	$run2 = mysqli_query($con,$sql2);
	// mysqli_num_rows($run2);
	if($r = mysqli_num_rows($run2)>=1){
		$error = $r."This user is already Added as Dean";
         redirectPage($error);
	}else{


		////Insert into Database
       $sql = "INSERT INTO `dean` (`id`, `Name`, `email`, `password`, `mobile`, `empid`, `fname`, `address`, `img_url`) VALUES (NULL, '$name', '$email', '$password', '$mobile', '$empId', '$fname', '$address', '$img_url')";
       $run = mysqli_query($con,$sql);
       if($run){
        $_SESSION['ceoSuccess'] = "3";
       header("Location: ../home.php");
       }else{
        echo "0"; 
       }
      //////Insert into Db End







    }













?>