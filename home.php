<?php
include('check.php');

$loginType = $_SESSION['tableLoginAs'];
 
 switch ($loginType) {
   case 'ceo':
     include 'ceo.php';
     break;
   case 'account':
     include 'account.php';
     break;
   case 'dean':
     include 'dean.php';
     break;     
   
   default:
     echo "404 Error";
     break;
 }






?>