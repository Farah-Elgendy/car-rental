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
			<form action="advancedcustomer.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">By Customer</h2><br>
				<div style="background:black;opacity:90%; ">
			<div class="container">

<label style="font-size:130%;color:white;margin-top:7px" for="customer_id" >Customer's ID:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" name="customer_id"  type="text" class="form-control" id="customer_id" ></input>

<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px" for="plate_number" >SSN:</label>
<input  style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='SSN' id="SSN"/>


<label style="font-size:130%;color:white;margin-left:3%;margin-top:7px" for="brand">Fname:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='fname' id="fname">



</div>
<div class="container">

<label style="font-size:130%;color:white;margin-top:7px"  >Lname:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='text' class="form-control" name='lname' id="lname"/>
<label style="font-size:130%;color:white;margin-top:7px;margin-left:3%" >Phone:</label>
 <input style="padding: 4px; width: 160px;margin-top:7px" class="form-control" name='phone'  id="phone">



<label style="font-size:130%;color:white;margin-left:1%;margin-top:7px" >Email:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='email' class="form-control" name='email' id="email">






					</div>
					<div class="container">

<label  style="font-size:130%;color:white;margin-top:7px"  >Gender:</label>
			<select style="padding: 4px; width: 160px;margin-top:7px"  class="form-control" name='sex' id="sex" >
																						<option value="">-----Choose----</option>
																						<option value="f">f</option>
																						<option value="m">m</option>

				</select>


<label style="font-size:130%;color:white;margin-left:2%;margin-top:7px" >BirthDay:</label>
<input style="padding: 4px; width: 160px;;margin-top:7px" type='date' class="form-control" name='birth_date'id="birth_date"/>


<label style="font-size:130%;color:white;margin-left:2%;margin-top:7px"  >Address:</label>
<input style="padding: 4px; width: 160px;margin-top:7px" type='TEXT' class="form-control" name='address' id="address"/>



        <button type="submit" name="submit"  class="btn btn-success" value='search' style="background:red;margin-left:3%;margin-top:7px">Search</button>
    <br><br><br><br>
</DIV>
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

    <?php
   include 'DB connection.php';
	if(isset($_POST['submit'])){
    
		$customer_id=$_POST['customer_id'];
		$sex=$_POST['sex'];
		$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $SSN=$_POST['SSN'];
    //$reg_date=$_POST['reg_date'];
    $email=$_POST['email'];
    $address=$_POST['address'];
   // $city=$_POST['city'];
    $birth_date=$_POST['birth_date'];
    $phone=$_POST['phone'];


		$query="SELECT * 
        FROM customer 
        left join reservation  
        on customer.customer_id = reservation.customer_id
        left join car
        on reservation.plate_number = car.plate_number
        join office 
        on car.office_id = office.office_id
        WHERE customer.customer_id > 0 ";

		
    if($sex!="")  $query.="and sex ='$sex' ";
    if($fname!="")  $query.="and fname ='$fname' ";
    if($lname!="")  $query.="and lname ='$lname' ";
    //if($reg_date!="")  $query.="and reg_date) >'$reg_date' ";
    if($email!="") $query.="and email = '$email' " ;
    if($address!="") $query.= "and address = '$address' ";
    // if($city!="") $query.="and city = '$city' ";
    if($birth_date!="") $query.="and birth_date = '$birth_date' ";
    if($phone!="") $query.="and phone = '$phone' ";
    if($customer_id!="")	$query.="and customer.customer_id ='$customer_id' ";
    if($SSN!="")	$query.="and SSN = '$SSN' ";




		$result = mysqli_query($connection,$query); 
        $index=0;
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
