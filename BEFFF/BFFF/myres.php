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

			<title>Car Page</title>


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <a class="navbar-brand" href="adminhome.php">
   						 <img src="logo2.png" width="60" height="40" alt="">
					</a>
						<li class="nav-item active">
							<a class="nav-link" href="customer_info.php">Customers <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="car_info.php">Cars <span class="sr-only">(current)</span></a>
						</li>
						
    	 <li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Reports  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="carcustomer.php"> Car & Customer Information </a></li>
			  <li><a class="dropdown-item" href="car.php"> Car Information </a></li>
			  <li><a class="dropdown-item" href="carstate.php"> Car Status </a></li>
			  <li><a class="dropdown-item" href="bycustomer.php"> Reservations Of Customer By Email </a></li>
			  <li><a class="dropdown-item" href="dailypayments.php"> Daily Payments </a></li>
		    </ul>
		</li>
						</li>
					<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Modifications  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="add.php"> ADD CAR </a></li>
			  <li><a class="dropdown-item" href="delete.php"> Delete Car</a></li>
			   <li><a class="dropdown-item" href="update.php"> Update Car </a></li>
		    </ul>
		</li>
						<li class="nav-item active">
							<a class="nav-link" href="all_reservations.php">Reservations <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="advanced.php">Advanced Search <span class="sr-only">(current)</span></a>
						</li>

						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>
      </ul>
    </div>
  </div>
</nav>

	</head>

	<body class="modal-body">
		<div>
			<form action="car_info.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Cars</h2><br>


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
	$query="SELECT * FROM car natural join office ORDER BY city,`location`";
	$result = mysqli_query($connection,$query); 
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
			</form>
		</div>
	</body>
</html>
