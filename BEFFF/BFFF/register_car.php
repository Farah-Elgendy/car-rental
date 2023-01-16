<?php
include 'DB Connection.php';



if(isset($_POST['add_car'])){
    $plate_number = $_POST['plate_number'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $type = $_POST['type'];
    $year = $_POST['year'];
    $seats = $_POST['seats'];
    $price = $_POST['price'];
    $insurance = $_POST['insurance'];
    $image = $_POST['image'];
    $office_id = $_POST['office_id'];

    $sql = "SELECT * FROM car WHERE plate_number='$plate_number'";
    $result = mysqli_query($connection,$sql);
	 $_SESSION['price']=$cost;
	  $_SESSION['imgage']=$img;


    if(mysqli_num_rows($result) == 0)
    {
        $sql = "INSERT INTO `car` (`plate_number`, `brand`, `type`, `model`, `year`,`color`, `price`, `seats`, `state`, `insurance`, `image`, `office_id`)
        VALUES ('$plate_number', '$brand', '$type', '$model', '$year','$color', '$price', '$seats', 'a', '$insurance', '$image', '$office_id');";
        $result = mysqli_query($connection,$sql);

        if($result)
        {
            echo"<script> alert('Car Added  Successfully')</script>";
            header('location:adminhome.php');
        }else {
            echo "<script>alert('Something went wrong')</script>";
             }
    }else {
        echo "<script>alert('Car already in database !!')</script>";
          }   
        }
    
?>