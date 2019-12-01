
<?php

@session_start();

include '../../config/config.php';
$table = "studentIndivisualFees";

$sql="SELECT * FROM $table Where fees = 0";
$run = mysqli_query($con,$sql);
echo "<table class='table'>
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.</th>
                                                            <th>Name</th>
                                                         
                                                            <th>Department</th>
                                                            <th>Sem</th>
                                                           
                                                            <th>Rtu</th>
                                                            <th>Amount(₹)</th>
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
                                              <td><?php echo $row['department']; ?></td>
                                              <td><?php echo $row['sem']; ?></td>
                                              <td><?php echo $row['rtu']; ?></td>

                                        
                                              <td><?php echo $row['fees']; ?></td>                                                 
                                                        </tr>
                                                       
                                                    
<?php
}

echo "</tbody>
                                                </table>";



  ?>