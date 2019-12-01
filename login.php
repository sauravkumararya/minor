


<?php
session_start();
$error = '';
include("db_detail.php");
if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$loginAs = mysqli_real_escape_string($con,$_POST['loginAs']);
$email = trim($email," ");
$password = trim($password," ");
switch ($loginAs) {
  case 'CEO':
    $tableLoginAs = "ceo";
    break;
  case 'DEAN':
    $tableLoginAs = "dean";
    break;
  case 'ACCOUNT':
    $tableLoginAs = "account";
    break;
  case 'HOD':
    $tableLoginAs = "hod";
    break;  
  case 'MENTOR':
    $tableLoginAs = "mentor";
    break;     
  
  default:
    header("Location: 404.html");
    break;
}




//check password is not empty and white space and; 
if(strlen($password)<1){
  $error = "Please Enter a Valid Credential";
  header("Location: index.php?message=$error");
}else{
      $sql = "SELECT * FROM $tableLoginAs WHERE email='$email' && password='$password'";
      $run = mysqli_query($con,$sql);
      $num = mysqli_num_rows($run).mysqli_error($con);
      if($num==1){
        $_SESSION['email']=$email;
        $_SESSION['tableLoginAs'] = $tableLoginAs;
        $row = mysqli_fetch_assoc($run);
        $_SESSION['name'] = $row['Name'];
        //$error = "Success Login";
        header("Location: home.php");

      }else{
        $error = "Incorrect Credential";
        header("Location: index.php?message=$error");
      }
      
  }
//echo $error;

}
else{
  //echo "You are at Wrong Page";
}
  
?>