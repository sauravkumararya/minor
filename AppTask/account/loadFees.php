<?php
if(isset($_GET['sem'])){
include '../../config/config.php';
session_start();
function redirectPage($error)
{
    $error = $error;
        $_SESSION['ceoError'] = $error;
        header("Location: ../../home.php");
}
$error="";
$semester      = trim($_GET['sem']);
$lastLoad      = trim($_GET['lastDate']);
$nextLoad      = trim($_GET['nexDate']);
//calculation

$lastLoadDate = $nextLoad;//lastLoad;


$date = new DateTime($nextLoad);
 $d = "+8 month";
$date->modify($d); // or you can use '-90 day' for deduct
$date = $date->format('y-m-d');

echo $nextLoadDate =  $date;










///insert into db

       
$sql = "UPDATE `fees_load` SET `date` = '$lastLoadDate', `nex`= '$nextLoadDate' WHERE `fees_load`.`sem` = '$semester'";
$run = mysqli_query($con,$sql);

/////end insert into db
//UPDATE `studentIndivisualFees` SET `fees` = '500' WHERE `studentIndivisualFees`.`id` = 12;
$sql64 = "SELECT fees FROM `fees` where `semester` = '$semester'
";
$run64 = mysqli_query($con,$sql64);
$row64= mysqli_fetch_assoc($run64);
echo "-->".$c = $row64['fees'];
$sql44 = "UPDATE `studentIndivisualFees` SET `fees` = `fees`+'$c' where `sem` = '$semester'";
$run44 = mysqli_query($con,$sql44);
//$row44 = mysqli_fetch_assoc($run44);





//End insert fee into db

if($run){
 redirectPage("Fees Loaded Successfully");
}else{
  redirectPage("Problem in Loaded Fees");
}


}else{
	header("Location: 404.php");
}
?>