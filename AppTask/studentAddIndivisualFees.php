

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
$rtu      = trim($_POST['rtu']);
$fees          = trim($_POST['fees']);



  $sql2 = "SELECT rtu FROM students WHERE rtu='$rtu'";
    $run2 = mysqli_query($con,$sql2);
    echo mysqli_num_rows($run2);

    if(mysqli_num_rows($run2)<1){
        $error = "This RTU Roll does't Exist";
       redirectPage($error);
    }else{



///insert into db



$sql = "INSERT INTO `studentIndivisualFees` (`id`, `rtu`, `fees`) VALUES (NULL, '$rtu', '$fees')";
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