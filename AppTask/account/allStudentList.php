
<?php



include '../../config/config.php';
$table = "students";

$sql="SELECT * FROM $table";
$run = mysqli_query($con,$sql);
?>

<?php
echo "<button class='btn btn-out-dashed btn-danger btn-square'>List </button>";
echo "<table class='table'>
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.</th>
                                                            <th>Name</th>
                                                            <th>Father</th>
                                                           
                                                            <th>Mobile</th>
                                                            <th>Department</th>
                                                            <th>Sem</th>
                                                            
                                                            <th>Rtu</th>
                                                           
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
                                            
                                              <td><?php echo $row['mobile']; ?></td>

                                              <td><?php echo $row['department']; ?></td>
                                              <td><?php echo $row['semester']; ?></td>  
                                             
                                              <td><?php echo $row['rtu']; ?></td>
                                                                                             
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
