
<?php
@session_start();

if($_SESSION['tableLoginAs']!="ceo"){
  header("Location: home.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo "Login As ".$_SESSION['tableLoginAs']; ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="GIT ERP Software" />
 
    <meta name="author" content="16EGJCS177,78,76">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
</head>

<body>
	 
        <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>
                       <div class="mobile-search">
                           <div class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control" placeholder="Enter Keyword">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <a href="index.html">
                           <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                           </li>
                           <li class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </li>
                           <li>
                               <a href="#!" onclick="javascript:toggleFullScreen()">
                                   <i class="ti-fullscreen"></i>
                               </a>
                           </li>
                       </ul>
                       <ul class="nav-right">
                          
                           
                           <li class="user-profile header-notification">
                               <a href="#!">
                                   <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                   <span></span><?php echo $_SESSION['name']; ?></span>
                                   <i class="ti-angle-down"></i>
                               </a>
                               <ul class="show-notification profile-notification">
                                
                                   
                                   <li>
                                       <a href="logout.php">
                                       <i class="ti-layout-sidebar-left"></i> Logout
                                   </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <div class="pcoded-search">
                                <span class="searchbar-toggle">  </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="index.html">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Home</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                  <li class="">
                                    <a href="AppTask/listOFStudents.php">
                                        <span class="pcoded-micon"><i class="ti-printer"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Print Student List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                  <li class="">
                                    <a href="AppTask/listOFFaculty.php">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Faculty List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                     <li class="">
                                    <a href="AppTask/listOfDean.php">
                                        <span class="pcoded-micon"><i class="fa fa-graduation-cap" aria-hidden="true"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dean List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="AppTask/listOfAccountant.php">
                                        <span class="pcoded-micon"><i class="ti-money"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Accountants List</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                    </ul>
                             
                          
                         
                         

                        
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
								
									<!-- Page-header start -->
                  <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                           <div class="card-block" style="padding-right: 10px;">
                            <h6 class="m-b-20">Enrolled Student</h6>
                              <img src="assets/img/reading.png" width="50" height="50" style=""><span class="f-right"><h2 class="text-right">425 </h2></span>
                           </div>
                        </div>
                    </div>
                 
                    <div class="col-sm-3">
                          <div class="card">
                             <div class="card-block" style="padding-right: 10px;">
                              <h6 class="m-b-20">Faculty</h6>
                                <img src="assets/img/reading.png" width="50" height="50" style=""><span class="f-right"><h2 class="text-right">
                                  <?php  

$sql2 = "SELECT * FROM faculty";
$run2 = mysqli_query($con,$sql2);
echo mysqli_num_rows($run2);


?>  
                                </h2></span>
                             </div>
                          </div>
                      </div>
                         <div class="col-sm-3">
                          <div class="card">
                             <div class="card-block" style="padding-right: 10px;">
                              <h6 class="m-b-20"></h6>
                                <img src="assets/img/reading.png" width="50" height="50" style=""><span class="f-right"><h2 class="text-right">
<?php  

$sql2 = "SELECT * FROM faculty";
$run2 = mysqli_query($con,$sql2);
echo mysqli_num_rows($run2);


?>                                  



                                </h2></span>
                             </div>
                          </div>
                      </div>
                         <div class="col-sm-3">
                          <div class="card">
                             <div class="card-block" style="padding-right: 10px;">
                              <h6 class="m-b-20">Faculty</h6>
                                <img src="assets/img/reading.png" width="50" height="50" style=""><span class="f-right"><h2 class="text-right">425 </h2></span>
                             </div>
                          </div>
                      </div>
               
                  </div>
<!--Addding USer ---------------------------------------------------------->
<div class="card">
                                                    <div class="card-header">
                                                        <h4><i class="ti-plus"></i> Create Account</h4>
                                                        <span>Menu description will be there...</span>
                                                        <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                <li><i class="fa fa-chevron-left"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                                <li><i class="fa fa-refresh reload-card"></i></li>
                                <li><i class="fa fa-times close-card"></i></li>
                              </ul>
                            </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <!-- Row start -->
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-12">
<?php  

if(isset($_SESSION['ceoSuccess'])){
  if($_SESSION['ceoSuccess']=="1")
  {
   echo "<script>alert('New Accountan added')</script>";
  }
  if($_SESSION['ceoSuccess']=="2")
  {
   echo "<script>alert('New Faculty added successfully')</script>";
  }
  if($_SESSION['ceoSuccess']=="3")
  {
   echo "<script>alert('New Dean Account Created Successfully')</script>";
  }
   if($_SESSION['ceoSuccess']=="4")
  {
   echo "<script>alert('New Student added Successfully')</script>";
  }
  unset($_SESSION['ceoSuccess']);
}



if(isset($_SESSION['ceoError'])){
  ?>
<div class="card" style="background-color:#FA1D1D">
          <div class="card-block" style="color:white;" >
            <b><?php echo $_SESSION['ceoError']; unset($_SESSION['ceoError']); ?></b>
          </div>   
</div> 
<?php  
}  
?> 
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs  tabs" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><i class="fa fa-bullhorn" aria-hidden="true"></i> Notice From CEO </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><i class="fa fa-university" aria-hidden="true"></i> Add Accountent</a>
                                                                    </li>
                                                                     <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#settings1" role="tab"><i class="fa fa-users" aria-hidden="true"></i> Add New Faculty</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Add Dean</a>
                                                                    </li>
                                                                       <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Add Student</a>
                                                                    </li>
                                          
                                                                </ul>
                                                                <!-- Tab panes -->
           <div class="tab-content tabs card-block">
            <div class="tab-pane active" id="home1" role="tabpanel">
                 <p class="m-0">
                  <form action="AppTask/message.php" method="post">
                   <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Message</label>
                              <div class="col-sm-10">
                              <textarea rows="5" cols="5" name="message" class="form-control" placeholder="Enter Message"></textarea>
                              </div>
                            </div>

                    <div class="row">
<div class="col-sm-4">
</div>
<div class="col-4">
<input type="submit" name="submit" class="btn btn-primary btn-block btn-round" value="Send Message" /> 
</div> 
<div class="col-sm-4">
</div>
</div>        
                   </form>         
                 </p>
            </div>


<!--Adding Student-->

<div class="tab-pane" id="messages2" role="tabpanel">
     <p class="m-0">


   <div class="card-block">
<form action="AppTask/addNewStudent.php" method="post" enctype="multipart/form-data">
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Enrollment No</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-bold" value="<?php echo "STD".rand(11111,99999); ?>" name="enrollmentNumber" readonly="">
     </div>
</div> 
                                
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" required  class="form-control form-control-bold" placeholder="Name of New Student" name="name">
     </div>
</div>

<div class="form-group row">
   <label class="col-sm-2 col-form-label">Father</label>
      <div class="col-sm-10">
        <input type="text" required name="fname" class="form-control form-control-bold" placeholder="Student Father's Name">
     </div>
</div>
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Department</label>
        <div class="col-sm-10">
         <select name="department" require class="form-control">
                       <option></option>
                        <option>COMPUTER SCIENCE</option>
                        <option>ELECTRONICS</option>
                        <option>ELECTRICAL</option>
                        <option>MECHANICAL</option>
                        <option>CIVIL</option>
                        <option>IT</option>
                       
        </select>
       </div>
</div>
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Sec</label>
        <div class="col-sm-10">
         <select name="sec" require class="form-control">
                       <option></option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                        <option>C</option>
                        <option>E</option>
                        <option>F</option>
                        <option>G</option>
                        <option>H</option>
                       
        </select>
       </div>
</div>
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-10">
         <select name="sem" require class="form-control">
                       <option></option>
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                        <option>V</option>
                        <option>VI</option>
                        <option>VII</option>
                        <option>VIII</option>
                       
        </select>
       </div>
</div>

 <div class="form-group row">
   <label class="col-sm-2 col-form-label">RTU Roll</label>
      <div class="col-sm-10">
        <input type="text" name="rtu" required class="form-control form-control-bold" placeholder=" ">
     </div>
</div>


 <div class="form-group row">
   <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name="email" required class="form-control form-control-bold" placeholder="Email Address">
     </div>
</div>


 <div class="form-group row">
   <label class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="Password" required  pattern="{5}" title="Enter Minimum 5 character" class="form-control form-control-bold" name="password" placeholder="Login Password">
     </div>
</div>
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Mobile</label>
      <div class="col-sm-10">
        <input type="text" name="mobile" required class="form-control form-control-bold" placeholder="Mobile Number" pattern="[0-9]*">
     </div>
</div>

<div class="form-group row">
   <label class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
    <textarea rows="5" cols="5" name="address" required class="form-control form-colntrol-bold" placeholder="Enter Address"></textarea>
      </div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Upload Student Photo</label>
    <div class="col-sm-10">
        <input type="file" require name="fileToUpload" class="form-control">
    </div>
</div> 
<div class="row">
<div class="col-sm-4">
</div>
<div class="col-4">
<input type="submit" name="submit" class="btn btn-primary btn-block btn-round" value="Create New Accountant" /> 
</div> 
<div class="col-sm-4">
</div>
</div>                                               
                                            
</form>
</div>  

     </p>
</div>



<!--End of Adding Student-->

<div class="tab-pane" id="profile1" role="tabpanel">
<p class="m-0">
                                                                          <!--Adding accountant-->
   
   <div class="card-block">
<form action="AppTask/createNewAccountant.php" method="post" enctype="multipart/form-data">
<div class="form-group row">
   <label class="col-sm-2 col-form-label">EmployeeID</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-bold" value="<?php echo "ACC".rand(11111,99999); ?>" name="empid" readonly="">
     </div>
</div> 
                                
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" required  class="form-control form-control-bold" placeholder="Name of New Accountant" name="name">
     </div>
</div>

<div class="form-group row">
   <label class="col-sm-2 col-form-label">Father</label>
      <div class="col-sm-10">
        <input type="text" required name="fname" class="form-control form-control-bold" placeholder="Accountant Father's Name">
     </div>
</div>
 <div class="form-group row">
   <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name="email" required class="form-control form-control-bold" placeholder="Accountant Email Address">
     </div>
</div>
 <div class="form-group row">
   <label class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="Password" required  pattern="{5}" title="Enter Minimum 5 character" class="form-control form-control-bold" name="password" placeholder="Accountant Login Password">
     </div>
</div>
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Mobile</label>
      <div class="col-sm-10">
        <input type="text" name="mobile" required class="form-control form-control-bold" placeholder="Accountant Mobile Number" pattern="[0-9]*">
     </div>
</div>

<div class="form-group row">
   <label class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
    <textarea rows="5" cols="5" name="address" required class="form-control form-colntrol-bold" placeholder="Enter Accountant Address"></textarea>
      </div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Upload Accountant Photo</label>
    <div class="col-sm-10">
        <input type="file" require name="fileToUpload" class="form-control">
    </div>
</div> 
<div class="row">
<div class="col-sm-4">
</div>
<div class="col-4">
<input type="submit" name="submit" class="btn btn-primary btn-block btn-round" value="Create New Accountant" /> 
</div> 
<div class="col-sm-4">
</div>
</div>                                               
                                            
</form>
</div>  


<!--Ending new accountant-->
                                                                        </p>
                                                                    </div>
                                                                    <div class="tab-pane" id="messages1" role="tabpanel">
                                                                        <p class="m-0">
<!--Adding new Dean-->
   

                                                    
                                                    <div class="card-block accordion-block">
                                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                                            <div class="accordion-panel">
                                                                <div class="accordion-heading" role="tab" id="headingOne">
                                                                    <h3 class="card-title accordion-title">
                                                                        <a class="accordion-msg scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                       <i class="ti-arrow-circle-right"></i>  Create From Existing Facuilty
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                                            <div class="accordion-content accordion-desc">
                                                                <p>
<?php 

$sql = "SELECT * FROM faculty";
$run = mysqli_query($con,$sql);
if(mysqli_num_rows($run)>0){
  echo "   <div class='card-block table-border-style'>
                                            <div class='table-responsive'>
                                                <table class='table table-hover'>
                                                    <thead>
                                                        <tr>
                                                            <th>EmpId</th>
                                                            <th>Name</th>
                                                            <th>Department</th>
                                                            <th>Mobile</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>";
      while($row = mysqli_fetch_assoc($run)){
    
       ?>
      <!--Display list of Faculty-->

                                       
                                     
                                    <tr>
                                                            
                        <td><?php echo $row['empid']; ?></td>
                         <td><?php echo $row['Name']; ?></td>
                          <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['mobile']; ?></td> <td><a href="AppTask/createNewDeanFromExisting.php?empid=<?php echo $row['empid']; ?>"><button class="btn btn-danger btn-square"><i class="ti-medall-alt"></i> Assign as Dean</button></a></td>
                                  </tr>
                                                        
                                                   
                               

      <!--End Display list of Faculty-->
      <?php 
      
      }
       echo "</tbody>
                                                </table>
                                            </div>
                                        </div>";
}else{
  echo "No More Faculty is added by CEO";
}







?>                                                                  
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-panel">
                                                        <div class="accordion-heading" role="tab" id="headingTwo">
                                                            <h3 class="card-title accordion-title">
                                                                <a class="accordion-msg scale_active collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                               <i class="ti-arrow-circle-right"></i> Create New Dean Account
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="accordion-content accordion-desc">
                                                        <p>
<!--Creating new dean from scratch-->

 <div class="card-block">
<form action="AppTask/createNewDean.php" method="post" enctype="multipart/form-data">
<div class="form-group row">
   <label class="col-sm-2 col-form-label">EmployeeID1</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-bold" value="<?php echo "DEA".rand(11111,99999); ?>" name="empid" readonly="">
     </div>
</div> 
                                
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" required  class="form-control form-control-bold" placeholder="Name of New Dean" name="name">
     </div>
</div>

<div class="form-group row">
   <label class="col-sm-2 col-form-label">Father</label>
      <div class="col-sm-10">
        <input type="text" required name="fname" class="form-control form-control-bold" placeholder="Father's Name">
     </div>
</div>
 <div class="form-group row">
   <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name="email" required class="form-control form-control-bold" placeholder="Email Address">
     </div>
</div>
 <div class="form-group row">
   <label class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="Password" required  pattern="{5}" title="Enter Minimum 5 character" class="form-control form-control-bold" name="password" placeholder="Login Password">
     </div>
</div>
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Mobile</label>
      <div class="col-sm-10">
        <input type="text" name="mobile" required class="form-control form-control-bold" placeholder="Mobile Number" pattern="[0-9]*">
     </div>
</div>

<div class="form-group row">
   <label class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
    <textarea rows="5" cols="5" name="address" required class="form-control form-colntrol-bold" placeholder="Address"></textarea>
      </div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Upload Dean Photo</label>
    <div class="col-sm-10">
        <input type="file" name="fileToUpload" require class="form-control">
    </div>
</div> 
<div class="row">
<div class="col-sm-4">
</div>
<div class="col-4">
<input type="submit" name="submit" class="btn btn-primary btn-block btn-round" value="Create New Accountant" /> 
</div> 
<div class="col-sm-4">
</div>
</div>                                               
                                            
</form>
</div>  


<!--End of creating new dean -->
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        
                            </div>
                        </div>
                   
<!--Ending new Dean-->                                                                          
                                                                        </p>
                                                                    </div>
  <div class="tab-pane" id="settings1" role="tabpanel">
  <p class="m-0">

    <!--New Facuilty Added-->

   <div class="card-block">
<form action="AppTask/createNewFaculty.php" method="post" enctype="multipart/form-data">
<div class="form-group row">
   <label class="col-sm-2 col-form-label">EmployeeID</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-bold" value="<?php echo "FCC".rand(11111,99999); ?>" name="empid" readonly="">
     </div>
</div> 
                                
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" required  class="form-control form-control-bold" placeholder="Name of New Faculty" name="name">
     </div>
</div>

<div class="form-group row">
   <label class="col-sm-2 col-form-label">Father</label>
      <div class="col-sm-10">
        <input type="text" required name="fname" class="form-control form-control-bold" placeholder="Father's Name">
     </div>
</div>
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Department</label>
        <div class="col-sm-10">
         <select name="department" require class="form-control">
                       <option></option>
                        <option>COMPUTER SCIENCE</option>
                        <option>ELECTRONICS</option>
                        <option>ELECTRICAL</option>
                        <option>MECHANICAL</option>
                        <option>CIVIL</option>
                        <option>IT</option>
                       
                                                      </select>
                                                   </div>
                                                </div>
 <div class="form-group row">
   <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name="email" required class="form-control form-control-bold" placeholder="Email Address">
     </div>
</div>


 <div class="form-group row">
   <label class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="Password" required  pattern="{5}" title="Enter Minimum 5 character" class="form-control form-control-bold" name="password" placeholder="Login Password">
     </div>
</div>
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Mobile</label>
      <div class="col-sm-10">
        <input type="text" name="mobile" required class="form-control form-control-bold" placeholder="Mobile Number" pattern="[0-9]*">
     </div>
</div>

<div class="form-group row">
   <label class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
    <textarea rows="5" cols="5" name="address" required class="form-control form-colntrol-bold" placeholder="Address"></textarea>
      </div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Upload Faculty Photo</label>
    <div class="col-sm-10">
        <input type="file" require name="fileToUpload" class="form-control">
    </div>
</div> 
<div class="row">
<div class="col-sm-4">
</div>
<div class="col-4">
<input type="submit" name="submit" class="btn btn-primary btn-block btn-round" value="Create New Accountant" /> 
</div> 
<div class="col-sm-4">
</div>
</div>                                               
                                            
</form>
</div>  

    <!--End of New Facuilty added-->
  </p>
  </div>
<!--Start adding NEw Student-->








<!--End of Adding Student-->






</div>
                                                            </div>
                                                          
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                </div>
                                              
<!---End adding user--------------------------------------------------------------->

<!--Removal OF Account--------------------------------------------------------------->




<!--End of REmoval of Account----------------------------------------------------->

<!-------------Add-->                                                 

                                
                                </div>
                            </div>
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>
