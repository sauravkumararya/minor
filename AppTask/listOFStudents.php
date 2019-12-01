<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Student List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php

@session_start();

include '../config/config.php';
$table = "students";

$sql="SELECT * FROM $table";
$run = mysqli_query($con,$sql);
echo "<table class='table'>
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.</th>
                                                            <th>Name</th>
                                                            <th>Father</th>
                                                            <th>Email</th>
                                                            <th>Mobile</th>
                                                            <th>Department</th>
                                                            <th>Sem</th>
                                                            <th>Enrollment</th>
                                                            <th>Rtu</th>
                                                            <th>sec</th>
                                                        </tr>
                                                    </thead>
                                                   <tbody>";
$i=0; 
while($row = mysqli_fetch_assoc($run)){
	$i++;
?>


                                                        <tr>
                                                    <td><?php echo $i; ?></td>
                                              <td><?php echo $row['name']; ?></td>
                                              <td><?php echo $row['fname']; ?></td>
                                              <td><?php echo $row['email']; ?></td>
                                              <td><?php echo $row['mobile']; ?></td>

                                              <td><?php echo $row['department']; ?></td>
                                              <td><?php echo $row['semester']; ?></td>  
                                              <td><?php echo $row['enrollmentNumber']; ?></td>
                                              <td><?php echo $row['rtu']; ?></td>
                                              <td><?php echo $row['sec']; ?></td>                                                 
                                                        </tr>
                                                       
                                                    
<?php
}

echo "</tbody>
                                                </table>";



  ?>
<center><button onclick="myFunction()">Print this page</button></center>

</body>
<script>
function myFunction() {
  window.print();
}
</script>
</html>