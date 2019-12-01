
<?php
@session_start();

if($_SESSION['tableLoginAs']!="account"){
  header("Location: home.php");
}

function date_conversion($date){
  $original_date = $date;
 
// Creating timestamp from given date
$timestamp = strtotime($original_date);
 
// Creating new date format from that timestamp
$new_date = date("d-m-Y", $timestamp);
return $new_date; // Outputs: 31-03-2019
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
                            
                     
                        
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="home.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Home</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                  <li class="">
                                    <a>
                                        <span class="pcoded-micon"><i class="ti-printer"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main"><div id="bulkadd">Add Fees in Bulk</div></span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                              
                                     <li class="">
                                    <a>
                                        <span class="pcoded-micon"><i class="fa fa-inr" aria-hidden="true"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main"><div id="dueStudentMenu">Due Student List</div></span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a>
                                        <span class="pcoded-micon"><i class="fa fa-inr" aria-hidden="true"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main"><div id="noDueStudentMenu">No Due Student List</div></span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                  <li class="">
                                    <a>
                                        <span class="pcoded-micon"><i class="fa fa-users" aria-hidden="true"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main"><div id="showAllStudentMenu">Full Student List</div></span>
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
                              <img src="assets/img/reading.png" width="50" height="50" style=""><span class="f-right"><h2 class="text-right">

                               <?php  

$sql2 = "SELECT * FROM students";
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
                              <h6 class="m-b-20">Due Student</h6>
                                <img src="assets/img/reading.png" width="50" height="50" style=""><span class="f-right"><h2 class="text-right">
<?php  

$sql2 = "SELECT * FROM studentIndivisualFees where fees>0";
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
                              <h6 class="m-b-20">Amount Due</h6>
                              <?php
 $sqlSum ="SELECT SUM(fees) AS value_sum FROM studentIndivisualFees"; 
 $resultSum = mysqli_query($con,$sqlSum);
$rowSum = mysqli_fetch_assoc($resultSum); 
$sum = $rowSum['value_sum'];


                              ?>
                                <img src="assets/img/reading.png" width="50" height="50" style=""><span class="f-right"><h2 class="text-right">₹ <?php echo $sum; ?> 



                                </h2></span>
                             </div>
                          </div>
                      </div>
               
                  </div>

<div style="display:none;" id="bulk2">
  <div class="card" style="padding: 15px;">

<table style="padding:10px;">
  <thead>
    <th>Semester</th>
    <th>Last Load(Y-m-d)</th>
    <th>Next Load(Y-m-d)</th>
    
    <th>Action</th>
  </thead>


<?php
$sqlForFeesLoad = "SELECT * FROM fees_load";
  $sqlFees = "SELECT * FROM fees";
    $runFees = mysqli_query($con,$sqlFees);
    $rowFees = mysqli_fetch_assoc($runFees);
    $dueationOfSem = $rowFees['duration'];
$run5 = mysqli_query($con,$sqlForFeesLoad);
while($r5 = mysqli_fetch_assoc($run5)){


?>
  <tr>
    <td><button class="btn btn-warning btn-icon">
      <font color='black'>
      <?php echo $r5['sem']; ?>
        </font>
      </button></td>
    <td> <button class="btn btn-info btn-outline-info"><i class="icofont icofont-info-square"></i>
    <?php echo $r5['date']; ?>
    </button></td>
    <td><button class="btn btn-info btn-outline-info"><i class="icofont icofont-info-square"></i>
    <?php 


echo $r5['nex'];
?>
    </button>


  <td style="padding: 10px;"><a href="AppTask/account/loadFees.php?sem=<?php echo $r5['sem']."&lastDate=".$r5['date']."&nexDate=".$r5['nex']; ?>"><button class="btn btn-danger btn-round">Click To Load Fees</button></a></td>
  </tr>

<?php
}
?>
</table>



</div>
<div class="card" style="padding: 10px;">
<h2><center><img src="assets/images/rupee.png" width="180" height="180"></center></h2>
</div>
</div>

<!--Searchbar-->

<div id="searchBar" sty class="card" style="padding: 15px;display:none;">
  <div class='row' style="padding: 15px;">
  <div class="com-sm-3">

    
  </div>
   <div class="com-sm-3" style="position: relative;left: 20px;">
    
  </div>
   <div class="com-sm-3" style="position: relative;left: 40px;">
    <input type="text" class="form-control form-control-info" placeholder="Enter RTU Roll No." id="searchRtu">
  </div>
  <div class="com-sm-3" style="position: relative;left: 60px;">
   <button id="searchRtuBtn" class="btn btn-primary" style="height: 36px; padding: 2px;width: 100px;"><i style="position: relative;top:1px" class="fa fa-search" aria-hidden="true"> Find</i>
</button>

  </div>
</div>
</div>

    
<!--Searchbar End---->
<!------------------show all search Student list ------------------------------>


<div style="display:none;" id="resultStudent">


<div style="padding: 15px;" class="card" id="resultStudentHtml">
hhh
</div>

</div>


<!-----------------Show all search student List End ---------------------------->
<!------------------show all Student list ------------------------------>


<div style="display:none;" id="showAllStudent">


<div style="padding: 15px;" class="card" id="showAllStudentHtml">

</div>

</div>


<!-----------------Show all student List End ---------------------------->





<!-----------------Due student show------>

<div style="display:none;" id="dueStudentView">
<div id="dueStudentHtml" class="card" style="padding: 15px;">

</div>

 </div> 

<!-----------------Due student End ------>


<!-----------------Due student show------>

<div style="display:none;" id="noDueStudentView">
<div id="noDueStudentHtml" class="card" style="padding: 15px;">
  
</div>

 </div> 

<!-----------------Due student End ------>










<!--Addding USer ---------------------------------------------------------->
<div class="card" id="contain">
                                                    <div class="card-header">
                                                        <h4><i class="ti-plus"></i> Login As : <?php echo strtoupper($_SESSION['tableLoginAs']); ?></h4>
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
                                                                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><i class="fa fa-university" aria-hidden="true"></i> Create Sem Fees</a>
                                                                    </li>
                                                                 
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Show Sem Fees</a>
                                                                    </li>
                                                                       <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Add Individual Student fees</a>
                                                                    </li>
                                          
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content tabs card-block">
                                                                    <div class="tab-pane active" id="home1" role="tabpanel">
      <p class="m-0">
        <?php 
         $sql = "SELECT * FROM message ORDER BY ID DESC LIMIT 1";
         $run = mysqli_query($con,$sql);



         $row = mysqli_fetch_assoc($run);

///Time
       function get_time_ago( $time )
{
    @$time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'About ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}
  
$time = $row['time'];
///Time End

         echo get_time_ago($time)."<br>";
         echo "<h2>".$row['message']."</h2>";




        ?>
      </p>
                                                                    </div>


<!--Adding Student-->

<div class="tab-pane" id="messages2" role="tabpanel">
     <p class="m-0">
      <form action="AppTask/studentAddIndivisualFees.php" method="post">
 <div class="form-group row">
   <label class="col-sm-2 col-form-label">RTU Roll</label>
      <div class="col-sm-10">
        <input type="text" name="rtu" required class="form-control form-control-bold" placeholder="RTU Roll">
     </div>
</div>
 <div class="form-group row">
   <label class="col-sm-2 col-form-label">Fees</label>
      <div class="col-sm-10">
        <input type="number" name="fees" required class="form-control form-control-bold" placeholder="Rs..">
     </div>
</div>
<div class="row">
 <div class="col-sm-4"></div>
 <div class="col-sm-4"></div>
 <div class="col-4">
<input type="submit" name="submit" class="btn btn-primary btn-block btn-round" value="Create New Fees" /> 
</div>
</div>
</form>


    </p>
</div>



<!--End of Adding Student-->

<div class="tab-pane" id="profile1" role="tabpanel">
<p class="m-0">
  <!--Create sem fee-->
<form action="AppTask/addNewFees.php" method="post">
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
   <label class="col-sm-2 col-form-label">Semester Fees</label>
      <div class="col-sm-10">
        <input type="number" name="fees" required class="form-control form-control-bold" placeholder="Rs.">
     </div>
</div>
<div class="form-group row">
   <label class="col-sm-2 col-form-label">Late Fees</label>
      <div class="col-sm-10">
        <input type="number" name="lfees" required class="form-control form-control-bold" placeholder="Rs.">
     </div>
</div>

<div class="form-group row">
   <label class="col-sm-2 col-form-label">Fix Sem. Duration</label>
      <div class="col-sm-10">
        <input type="range" min="0" max="8" id="semRange" name="duration" required class="form-control form-control-bold" placeholder="Rs." onchange="updateTextInput(this.value);">
        
     </div>
</div>

<div class="form-group row" id="show_range" style="display: none;">
   <label class="col-sm-2 col-form-label">Selected Duration</label>
      <div class="col-sm-10">
        
        <button class="btn btn-primary btn-outline-primary btn-icon"><div id="textInput"></div></button>
     </div>
</div>


<div class="row">
 <div class="col-sm-4"></div>
 <div class="col-sm-4"></div>
 <div class="col-4">
<input type="submit" name="submit" class="btn btn-primary btn-block btn-round" value="Create New Fees" /> 
</div>
</div>  
</form>
  <!--Create sem fee-->
</p>
</div>
<div class="tab-pane" id="messages1" role="tabpanel">
     <p class="m-0">
     <?php 

$sql = "SELECT * FROM fees";
$run = mysqli_query($con,$sql);
if(mysqli_num_rows($run)>0){
  echo "   <div class='card-block table-border-style'>
                                            <div class='table-responsive'>
                                                <table class='table table-hover'>
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.</th>
                                                            <th>Semester</th>
                                                            <th>Fee</th>
                                                            <th>Late Fee</th>
                                                            <th>Action</th>
                                                            <th>Duration</th>
                                                        </tr>
                                                    </thead><tbody>";
         $i=0;                 
      while($row = mysqli_fetch_assoc($run)){
      $i++
       ?>
      <!--Display list of Faculty-->

                                       
                                     
                                    <tr>
                        <form method="get" action="AppTask/account/updateFees.php">                                    
                        <td><?php echo $i."."; ?></td>
                         <td><input type="text" disabled value="<?php echo $row['semester']; ?>" name="semester"  >
                        <input type="text" style="display: none;" value="<?php echo $row['semester']; ?>" name="semester"  >
                         </td>
                          <td><input type="number" name="fees" value="<?php echo $row['fees']; ?>" /></td>
 <td><input type="number" name="lfees" value="<?php echo $row['lfees']; ?>" /></td> 
  <td><input type="number" name="duration" value="<?php echo $row['duration']; ?>" /></td> 

 <td><button class="btn btn-success btn-square"><i class="ti-pencil"></i> Update</button></a>
 </td>
</form>
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
                                        
                            </div>
                        </div>
                   
<!--Ending new Dean-->                                                                          
                                                                        </p>
                                                                    </div>
 






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

<script type="text/javascript">
  $(document).ready(function(){

 $('#semRange').change(function(){
  $('#show_range').show();
 })

    $("#bulkadd").on('click',function(){
      $('#contain').hide();
       $('#noDueStudentView').hide();
      $('#showAllStudent').hide();
       $('#dueStudentView').hide();
       $('#bulk2').show();
       $('#resultStudent').hide();
              $('#searchBar').hide();

   

    })


    $("#bulk2").on('click',function(){
    

   

    })


     $("#showAllStudentMenu").on('click',function(){
      $('#contain').hide();
      $('#noDueStudentView').hide();
       $('#bulk2').hide();
       $('#dueStudentView').hide();
       $('#searchBar').show();
       $('#resultStudent').hide();
       $('#showAllStudent').show();
       
        $.post("AppTask/account/allStudentList.php",{},function(data){
            var str = data;
            $("#showAllStudentHtml").html(str);

        })

    })



/////DueStudentList


    $("#dueStudentMenu").on('click',function(){
     
        $('#contain').hide();
        $('#bulk2').hide();
        $('#showAllStudent').hide();
        $('#dueStudentView').show();
        $('#noDueStudentView').hide();
               $('#searchBar').hide();
               $('#resultStudent').hide();

        $.post("AppTask/account/dueStudentList.php",{},function(data){
            var str = data;
            $("#dueStudentHtml").html(str);

        })

    })

/////DueStudentListEnd


/////noDueStudentList


    $("#noDueStudentMenu").on('click',function(){
     
        $('#contain').hide();
        $('#bulk2').hide();
        $('#showAllStudent').hide();
        $('#dueStudentView').hide();
        $('#noDueStudentView').show();
        $('#searchBar').hide();
        $('#resultStudent').hide();

        $.post("AppTask/account/noDueStudentList.php",{},function(data){
            var str = data;
            $("#noDueStudentHtml").html(str);

        })

    })

/////noDueStudentListEnd

/////noDueStudentList


    $("#searchRtuBtn").on('click',function(){
     
        $('#contain').hide();
        $('#bulk2').hide();
        $('#showAllStudent').hide();
        $('#dueStudentView').hide();
        $('#noDueStudentView').hide();
        $('#searchBar').show();
        var rtu = $.trim($("#searchRtu").val());

        $.post("AppTask/account/searchStudent.php",{rtu:rtu},function(data){
            var str = data;
             $('#resultStudent').show();
             $("#resultStudentHtml").html(str);

        })

    })

/////noDueStudentListEnd


  })


//pure js code

function updateTextInput(val) {
          document.getElementById('textInput').innerHTML=val; 
          //document.getElementById('show_range').style.display='block';
        }

</script>
