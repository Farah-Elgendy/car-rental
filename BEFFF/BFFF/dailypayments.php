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
	.navbar .nav-item .dropdown-menu{ margin-top:0; }}
    
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
        <form action="car.php" method="post">
          <br><br><br>
          <h2 style="color:white; text-align:center">Reserved Cars</h2><br>
				<br><br>

        <label  style="font-size:130%;color:white"for="from_date">From:</label>
			<input style="padding: 4px; width: 160px;"  value=""type="date" id="RStart_date" name="RStart_date">
		   <button type="submit"  class="btn btn-success" name="submit" value='search' style="background:grey;">Search</button><br><br>


        <table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Reservation ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Plate Number </th>
    
			


			
    </tr>
  </thead>
  <?php 
    include 'DB connection.php';
    if(isset($_POST['submit'])){
      $start_date=$_POST['RStart_date'];
      $end_date=$_POST['REnd_date'];

     
	$query="SELECT * FROM  reservation  
  WHERE 
  start_date ='$start_date' ";

	$result = mysqli_query($connection,$query); 
	$index=0;

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {$index=$index+1;
          
        echo "<tbody class='opacity-50' style='background:white'>".
        "<tr><th scope='row'>". $index."</th><td>".$row['reservation_id']."</td><td>" . $row['customer_id']."</td><td>".$row['plate_number']. 
       "</td></tr>" ;
        } 
      }
    }
	?>
	
  </tbody>
</table>


			</form>
		</div>
	</body>
</html>
