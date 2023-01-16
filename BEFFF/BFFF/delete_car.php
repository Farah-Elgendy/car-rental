<?php
include 'DB Connection.php';

if(isset($_POST['delete_car'])){
    $plate_number = $_POST['plate_number'];

    $sql = "DELETE FROM car WHERE plate_number='$plate_number'";
    $result = mysqli_query($connection,$sql);


    if($result)
    {
            echo"<script> alert('Car Deleted Successfully')</script>";
            header('location:adminhome.php');
    }
	else {
            echo "<script>alert('Something went wrong')</script>";
         }  
}
    
?>