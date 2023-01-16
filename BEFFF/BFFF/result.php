<?php
include 'DB Connection.php';
session_start();
$id=$_SESSION['customer_id'];
//$cost=$_SESSION['price'];
if(isset($_POST['reserve_car'])){

	 $email = $_POST['email'];
    $plate_number = $_POST['plate_number'];
   
    $Start_date = $_POST['Start_date'];
    $End_date = $_POST['End_date'];
	 
    //$price = "SELECT price FROM car WHERE plate_number='$plate_number';";
	//$priice=(int)$price;
    //$result1 = mysqli_query($connection,$price);
   // echo $price;
    $diff = strtotime($End_date) - strtotime($Start_date);
    $days = abs(round($diff / (24*60*60)));
	$total_cost=$cost * $days;
    echo $total_cost;
	 $customer_id = "SELECT customer_id FROM customer WHERE email='$email';";
   
 


   
        $sql = "INSERT INTO reservation (`customer_id`, `plate_number`, `start_date`, `end_date`, `total_cost`)
        VALUES ('$id', '$plate_number', '$Start_date', '$End_date', '$total_cost');";
       $result2 = mysqli_query($connection,$sql);

        if($result2)
        {
		
            echo"<script> alert('Car Reserved  Successfully')</script>";
			$state='r';
			$sql = "UPDATE car SET state='$state' WHERE plate_number='$plate_number' ;";
            $result = mysqli_query($connection,$sql); 
            header('location:welcome.php');
        }
		else {
			//echo("Error description: " . $result2 -> error);
            echo "<script>alert('Something went wrong')</script>";
             }
      
        }

?>