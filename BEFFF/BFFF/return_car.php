<?php
include 'DB Connection.php';

if(isset($_POST['return_car'])){
    $plate_number = $_POST['plate_number'];

    $sql = "DELETE FROM reservation WHERE plate_number='$plate_number'";
    $result = mysqli_query($connection,$sql);


    if($result)
    {         
            echo"<script> alert('Reservation Deleted Successfully')</script>";
			$state='a';
			$sql = "UPDATE car SET state='$state' WHERE plate_number='$plate_number' ;";
            $result = mysqli_query($connection,$sql); 
            header('location:welcome.php');
    }
	else {
            echo "<script>alert('Something went wrong')</script>";
         }  
}
    
?>