<?php
include 'DB Connection.php';


if(isset($_POST['reserve_car'])){

	 $email = $_POST['email'];
    $plate_number = $_POST['plate_number'];
   
    $Start_date = $_POST['Start_date'];
    $End_date = $_POST['End_date'];
	
	//  $price = "SELECT `state` ,price FROM car WHERE plate_number='$plate_number'";
	  $result = mysqli_query($connection,  "SELECT state,price FROM car WHERE plate_number='$plate_number'");
            while ($row = $result->fetch_assoc()) {
         $ss=$row['state'];
         $pp=$row['price'];
            }
        
echo $ss;
 $diff = strtotime($End_date) - strtotime($Start_date);
  echo "     hghghgh   "; 
 echo $diff;
    $days = ceil(abs($diff)/86400);
    echo $days."        ";
    echo "     hghghgh   ";
	$total_cost=$pp * $days;
     echo $total_cost;
     $date = date('m/d/Y h:i:s a', time());
     $customer_id = "SELECT customer_id FROM customer WHERE email='$email'";
     //$result = mysqli_query($connection,$customer_id);
     $result = mysqli_query($connection,  "SELECT customer_id FROM customer WHERE email='$email'");
     while ($row = $result->fetch_assoc()) {
  echo $row['customer_id']."<br>";
  echo $cid=$row['customer_id'];
}
        if($ss=='a')
{
         $sql = "INSERT INTO reservation (`customer_id`, `plate_number`, `start_date`, `end_date`, `total_cost`)
         VALUES ('$cid', '$plate_number', '$Start_date', '$End_date', '$total_cost')";
       

        if( mysqli_query($connection,$sql))
        {
		
            // echo"<script> alert('Car Reserved  Successfully')</script>";
			$state='r';
			$sql = "UPDATE car SET state='$state' WHERE plate_number='$plate_number' ";
            $result = mysqli_query($connection,$sql); 
            header('location:welcome.php');
        }
		else {
            echo "<script>alert('Something went wrong')</script>";
             }
      
           
            } else{  header('location:welcome.php');}
        
        }
           
?>