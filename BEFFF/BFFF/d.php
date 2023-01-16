<?php
include "DB connection.php";

if(isset($_POST['submit'])){
session_start();

$email=$_POST['email'];
$password=$_POST['pwd'];



 
   $query=mysqli_query($connection,"SELECT * 
                                    FROM admin  
                                    WHERE email='$email' AND password='$password'") ;
   $res=mysqli_fetch_array($query);
   if($res){
    echo"<script>alert('login successful')</script>";
    header('location:adminhome.php');
   }
   else
   {
    echo"<script>alert('invalid email or password')</script>";
   }
 
}
?>
