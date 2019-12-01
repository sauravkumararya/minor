<?php
/*
if(isset($_POST['submit'])){
include '../config/config.php';
session_start();
$error="";
$empId      = trim($_POST['empid']);
$name       = trim($_POST['name']);
$fname      = trim($_POST['fname']);
$email      = trim($_POST['email']);
$mobile     = trim($_POST['mobile']);
$password   = trim($_POST['password']);
$address    = trim($_POST['address']);
if(strlen($password)<1){
$error = "Please Enter Valid Password";
$_SESSION['ceoError'] = $error;
header("Location: ../home.php");
}else {
	//Insertion Code will here
	
}
}else{
	header("Location: 404.php");
}
*/

function redirectPage($error)
{
	$error = $error;
        $_SESSION['ceoError'] = $error;
        header("Location: ../home.php");
}

if(isset($_POST['submit'])){
include '../config/config.php';
session_start();
$error="";
$empId      = trim($_POST['empid']);
$name       = trim($_POST['name']);
$fname      = trim($_POST['fname']);
$email      = trim($_POST['email']);
$mobile     = trim($_POST['mobile']);
$password   = trim($_POST['password']);
$address    = trim($_POST['address']);
$img_url    = "ram";
if(strlen($password)<1){
$error = "Please Enter Valid Password";
redirectPage($error);
}else {
     /////check existing email
	$sql2 = "SELECT email FROM account WHERE email='$email'";
	$run2 = mysqli_query($con,$sql2);
	echo mysqli_num_rows($run2);
	if(mysqli_num_rows($run2)>=1){
		$error = "This user is already Accountant";
       redirectPage($error);
	}else{


		$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        echo $error = "File is not an image.";
        redirectPage($error);
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo $error = "Sorry, file already exists.";
    redirectPage($error);
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo $error = "Sorry, your file is too large.";
    redirectPage($error);
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
 redirectPage($error);
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo $error = " Sorry, your file was not uploaded.";
     redirectPage($error);
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        $img_url = basename( $_FILES["fileToUpload"]["name"]); 

		////Insert into Database
       $sql = "INSERT INTO `account` (`id`, `Name`, `email`, `password`, `mobile`, `empid`, `fname`, `address`, `img_url`) VALUES (NULL, '$name', '$email', '$password', '$mobile', '$empId', '$fname', '$address', '$img_url')";
       $run = mysqli_query($con,$sql);
       if($run){
        $_SESSION['ceoSuccess'] = "1";
        header("Location: ../home.php");
       }else{
        echo "0"; 
       }
      //////Insert into Db End







    } else {
        $error =  " Sorry, there was an error uploading your file. Try only image file.";
         redirectPage($error);

    }
}







	}


}
}else{
	header("Location: 404.php");
}

?>