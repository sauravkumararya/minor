

<?php
if(isset($_GET['semester'])){
include '../../config/config.php';
session_start();

function redirectPage($error)
{
    $error = $error;
        $_SESSION['ceoError'] = $error;
        header("Location: ../../home.php");
}
$error="";
$lfees      = trim($_GET['lfees']);
$fees          = trim($_GET['fees']);
$semester          = trim($_GET['semester']);
$duration          = trim($_GET['duration']);





///insert into db



$sql = "UPDATE `fees` SET `lfees` = '$lfees', `fees`= '$fees', `duration` = '$duration' WHERE `fees`.`semester` = '$semester'";
$run = mysqli_query($con,$sql);

if($run){

 redirectPage("Fees Updated Successfully");
}else{
  redirectPage("PRoblem in Update Fees".mysqli_error($con));
}

/////end insert into db






}else{
	header("Location: 404.php");
}
?>