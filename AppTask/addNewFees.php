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
$semester      = trim($_POST['sem']);
$fees          = trim($_POST['fees']);
$lfees         = trim($_POST['lfees']);
$duration      = trim($_POST['duration']);


  $sql2 = "SELECT semester FROM fees WHERE semester='$semester'";
    $run2 = mysqli_query($con,$sql2);
    echo mysqli_num_rows($run2);
    if(mysqli_num_rows($run2)>=1){
        $error = "This semester Fees is already Added";
       redirectPage($error);
    }else{



///insert into db
$sql = "INSERT INTO `fees` (`id`, `semester`, `fees`, `lfees`, `duration`) VALUES (NULL, '$semester', '$fees', '$lfees', '$duration')";
$run = mysqli_query($con,$sql);

if($run){
  redirectPage("Fees Added Successfully");
}else{
  redirectPage("PRoblem in Added Fees");
}

/////end insert into db


}



}else{
	header("Location: 404.php");
}
?>