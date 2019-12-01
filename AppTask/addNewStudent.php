<?php

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
$enrollmentNumber      = trim($_POST['enrollmentNumber']);
$name       = trim($_POST['name']);
$fname      = trim($_POST['fname']);
$email      = trim($_POST['email']);
$mobile     = trim($_POST['mobile']);
$password   = trim($_POST['password']);
$address    = trim($_POST['address']);
$img_url    = "ram";
$department = trim($_POST['department']);
$sem        = trim($_POST['sem']);
$sec        = trim($_POST['sec']);
$fees       = trim($_POST['fee']);
$rtu        = trim($_POST['rtu']);

if(strlen($password)<1){
$error = "Please Enter Valid Password";
redirectPage($error);
}else {
     /////check existing email
    $sql2 = "SELECT email FROM students WHERE email='$email'";
    $run2 = mysqli_query($con,$sql2);
    echo mysqli_num_rows($run2);
    if(mysqli_num_rows($run2)>=1){
        $error = "This student is already Added";
       redirectPage($error);
    }else{


        $target_dir = "../studentsUploads/";
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
       $sql = "INSERT INTO `students` (`id`, `name`, `fname`, `email`, `mobile`, `department`, `semester`, `enrollmentNumber`, `sec`, `fees`, `rtu`) VALUES (NULL, '$name', '$fname', '$email', '$mobile', '$department', '$sem', '$enrollmentNumber', '$sec', '$fees', '$rtu')";
 $sql33 = "INSERT INTO `studentIndivisualFees` (`id`, `rtu`, `fees`, `sem` `department`, `name`) VALUES (NULL, '$rtu', '0', '$sem'. '$department', '$name')";
 $run33 = mysqli_query($con,$sql33);
       $run = mysqli_query($con,$sql);
       if($run){
        $_SESSION['ceoSuccess'] = "4";
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