<?php
include 'DB Connection.php';
session_start();
$image=$_SESSION['image'];
$plate=$_SESSION['plate_number'];
?>
<html>
	<head>
	<style>
	body {
	background-image: url('welcome.jpg');
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

			<title>My Reservation</title>


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
			<form action="image.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Reservations</h2><br>


        <table class="table">
  <thead class="thead-dark">
    <tr>
      		<th scope="col">#</th>
     		<th scope="col">Plate no.</th>
     		<th scope="col">Brand</th>
      		<th scope="col">Type</th>
			<th scope="col">Model</th>
			<th scope="col">Year</th>
			<th scope="col">Color</th>
			<th scope="col">Price</th>
			<th scope="col">Seats</th>
			<th scope="col">State</th>
			<th scope="col">Insurance</th>
			<th scope="col">img.</th>
			<th scope="col">City (branch)</th>
    </tr>
  </thead>
  
  <?php 
    include 'DB connection.php';
	$sql="select * from car where plate_number='$plate'";
	$result = mysqli_query($connection,$sql); 
	$index=0;

	while ($row=mysqli_fetch_array($result)) {       $index=$index+1;
		?>
  	<tbody class="opacity-50" style="background:white;">
    <tr>
      		<th scope="row"><?php echo $index?></th>
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
			<td><?php echo $row['city']?>  (<?php echo $row['location']?>)</td>

    </tr>
	<?php } ?>
  </tbody>
</table>
 <br>