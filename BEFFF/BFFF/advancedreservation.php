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

			<title>Home Page</title>


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
											<li class="nav-item dropdown">
		   <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Advanced Search  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="advancedcar.php"> By Car </a></li>
			  <li><a class="dropdown-item" href="delete.php"> By Customer</a></li>
			  <li><a class="dropdown-item" href="carstate.php"> By Reservation </a></li>
		    </ul>
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
        <form action="advancedreservation.php" method="post">
          <br><br><br>
          <h2 style="color:white; text-align:center">By Reservation</h2><br>
				<br><br>
				<div style="background:black; opacity:90%; ">
<div class="container">
<label style="font-size:130%;color:white;margin-top:7px" for="plate_number" >Reservation ID:</label>
<input  style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='reservation_id' id="reservation_id"/>


<label style="font-size:130%;color:white;margin-left:1%;margin-top:7px" for="brand">Customer ID:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='customer_id' id="customer_id">


<label style="font-size:130%;color:white;margin-left:1%;margin-top:7px"  >Plate No.:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='number' class="form-control" name='plate_number' id="plate_number"/>


<label style="font-size:130%;color:white;margin-top:7px" >Total Cost:</label>
						<input style="padding: 4px; width: 160px;margin-top:7px" type='number' class="form-control"  name="total_cost" id="total_cost">


</div>
<div class="container">
	<label style="font-size:130%;color:white;margin-top:7px" >Start Date:</label>
	 <input style="padding: 4px; width: 160px;margin-top:7px" type='date'class="form-control" name='start_date'  id="start_date">

<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px" >End Date:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='date' class="form-control" name='end_date' id="end_date">



<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px" >Reseration Date:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='date' class="form-control" name='reserv_date'id="reserv_date"/>

</div>
<div class="container">

<label style="font-size:130%;color:white;margin-top:7px"  >Cash Date:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='date' class="form-control" name='cash_date' id="cash_date"/>

<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px"  >City:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='city' id="office_id"/><br>

<button type="submit"  class="btn btn-success" name='search' value='search' style="background:red;margin-left:3%;margin-top:7px"> Search </button><br><br>
</div>
</div>
</div>
<table class="table table-hover table-light">

<thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">Plate no.</th>
    
    <th scope="col">Brand</th>
    <th scope="col">Model</th>
          <th scope="col">Year</th>
          <th scope="col">type</th>
          <th scope="col">Color</th>
          <th scope="col">Price</th>
          <th scope="col">Seats</th>
          <th scope="col">Insurance</th>
          <th scope="col">img.</th>
          <th scope="col">Office ID</th>
          <th scope="col">Office city</th>
          <th scope="col">Customer ID</th>
          <th scope="col">SSN</th>
          <th scope="col">First name</th>
          <th scope="col">Last name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Register date</th>
          <th scope="col">Gender</th>
          <th scope="col">Birth date</th>
          <th scope="col">Address</th>
          <th scope="col">Reservation ID</th>
          <th scope="col">Start date</th>
          <th scope="col">End date</th>
          <th scope="col">Reservation date</th>
          <th scope="col">Total cost</th>
  </tr>
</thead>
  </thead>
  <?php
   include 'DB connection.php';
	if(isset($_POST['search'])){
		$reservation_id=$_POST['reservation_id'];
		$customer_id=$_POST['customer_id'];
		$plate_number=$_POST['plate_number'];
		$total_cost=$_POST['total_cost'];
		$start_date=$_POST['start_date'];
		$end_date=$_POST['end_date'];
		$reservation_date=$_POST['reserv_date'];
		$cash_date=$_POST['cash_date'];
		$city=$_POST['city'];

		$query="SELECT * FROM reservation 
		natural join car 
		natural join office WHERE plate_number>0 ";

		if($reservation_id!="")	$query.="and reservation_id = '$reservation_id' ";
		if($customer_id!="")	$query.="and customer_id = '$customer_id' ";
		if($plate_number!="")	$query.="and plate_number = '$plate_number' ";
		if($total_cost!="")	$query.="and total_cost = '$total_cost' ";
		if($start_date!="")	$query.="and `start_date` = '$start_date' ";
		if($end_date!="")	$query.="and end_date = '$end_date' ";
		if($reservation_date!="")	$query.="and reserv_date = '$reservation_date' ";
		if($cash_date!="")	$query.="and cash_date = '$cash_date' ";
		if($city!="")	$query.="and city = '$city' ";

		$result = mysqli_query($connection,$query); 
        $index=1;
		while ($row=mysqli_fetch_array($result))  {$index++; 
			?>
	<tbody class="opacity-50" style="background:white;">

  <tr>
  <th scope="row"><?php echo $index?></th>
      <td><?php echo $row['plate_number']?></td>
      <td><?php echo $row['brand']?></td>
      <td><?php echo $row['model']?></td>
			<td><?php echo $row['year']?></td>
			<td><?php echo $row['type']?></td>
			<td><?php echo $row['color']?></td>
			<td><?php echo $row['price']?></td>
			<td><?php echo $row['seats']?></td>
			<td><?php echo $row['insurance']?></td>
			<td><?php echo $row['image']?></td>
			<td><?php echo $row['office_id']?></td>
			<td><?php echo $row['city']?></td>
            <td><?php echo $row['customer_id']?></td>
            <td><?php echo $row['SSN']?></td>
            <td><?php echo $row['fname']?></td>
            <td><?php echo $row['lname']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['reg_date']?></td>
            <td><?php echo $row['sex']?></td>
            <td><?php echo $row['birth_date']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['reservation_id']?></td>
            <td><?php echo $row['start_date']?></td>
            <td><?php echo $row['end_date']?></td>
            <td><?php echo $row['reserv_date']?></td>
            <td><?php echo $row['total_cost']?></td>
			
    </tr>
	<?php }} ?>

    
    
  </tbody>
</table>


			</form>
		</div>
	</body>
</html>
