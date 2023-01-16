<?php
session_start();
$id=$_SESSION['customer_id'];
include "DB connection.php";


?>


<html>
	<head>
	<style>
	body {
	background-image: url('hii.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	}
	@media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{   }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
    }
	</style>
		<link rel="stylesheet" media="screen" href="bootstrap.min.css">

			<title>My Reservations</title>


      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<a class="navbar-brand" href="#">
   						 <img src="logo2.png" width="60" height="40" alt="">
					</a>
						<li class="nav-item active">
							<a class="nav-link" href="reserve.php">For Booking <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="my_reservation.php">My Reservations/Return <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>

					</ul>	
				</div>

			</nav>

	</head>

	<body class="modal-body">
		<div>
			<form action="return_car.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Reservations</h2><br>


        <table class="table">
  <thead class="thead-dark">
    <tr>
      		<th scope="col">#</th>
     		<th scope="col">reservation id</th>
     		<th scope="col">Customer id</th>
      		<th scope="col">Plate number</th>
			<th scope="col">Start date</th>
			<th scope="col">End date</th>
			<th scope="col">Total cost</th>
			<th scope="col">reservation date</th>
    </tr>
  </thead>
  
  <?php 
    include 'DB connection.php';
	$query="SELECT * FROM reservation  where customer_id='$id';";
	$result = mysqli_query($connection,$query); 
	$index=0;

	while ($row=mysqli_fetch_array($result)) {       $index=$index+1;
		?>
  	<tbody class="opacity-50" style="background:white;">
    <tr>
      		<th scope="row"><?php echo $index?></th>
      		<td><?php echo $row['reservation_id']?></td>
      		<td><?php echo $row['customer_id']?></td>
      		<td><?php echo $row['plate_number']?></td>
			<td><?php echo $row['start_date']?></td>
			<td><?php echo $row['end_date']?></td>
			<td><?php echo $row['total_cost']?></td>
			<td><?php echo $row['reserv_date']?></td>

    </tr>
	<?php } ?>
  </tbody>
</table>
 <br>


<body class="modal-body">
		<div>
			<form action="return_car.php" method="post">
				<br><br><br>
				

				<div style="background:lightgrey;opacity:90%; " >


					<div class="form-group">
							<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Plate Number:</label>
							<input style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name='plate_number' id="plate_number"/>
					</div>
					
					<div style="margin-left:60%">
						<button style="color:white;background-color:red;border: none;font-size:20;margin-left:30%" class="btn btn-primary btn-lg" name= "return_car"> Return Car! </button><br></br>
					</div>

				</div>

			</form>
		</div>

</body>
  <br>
		
		</div>