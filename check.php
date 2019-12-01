<?php
session_start();
include("db_detail.php");

$user_check = $_SESSION['email'];
$tableLoginAs = $_SESSION['tableLoginAs'];
$sqlSessionCheck = "SELECT * FROM $tableLoginAs WHERE email = '$user_check'";
$resultSessionCheck = mysqli_query($con,$sqlSessionCheck);
$row = mysqli_fetch_array($resultSessionCheck);

$user_login = $row['Name'];
if(!isset($user_login)){
	header('Location: index.php');
}
?>
