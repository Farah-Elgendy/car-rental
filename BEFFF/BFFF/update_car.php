<?php
   include 'DB connection.php';
	if(isset($_POST['search'])){
  $plate_number=$_POST['plate_number'];
  $query="SELECT * FROM car WHERE plate_number='$plate_number' ";
  
	$result = mysqli_query($connection,$query); 
  		//while ($row=mysqli_fetch_array($result))  { $index++?>
<table>
  <tbody class="opacity-50" style="background:white;">
  <tr>
  <th scope="row"></th>
      <td><?php echo $row['plate_number']?></td>
      <td><?php echo $row['brand']?></td>
      <td><?php echo $row['type']?></td>
      <td><?php echo $row['model']?></td>
      <td><?php echo $row['year']?></td>
      <td><?php echo $row['color']?></td>
	  <td><?php echo $row['price']?></td>
	  <td><?php echo $row['seats']?></td>
      <td><?php echo $row['state']?></td>
	  <td><?php echo $row['insurance']?></td>
	  <td><?php echo $row['image']?></td>
	  <td><?php echo $row['office_id']?></td>
  </tr>
		
		<?php } ?>

  </tbody>
  </table>