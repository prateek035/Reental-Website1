              
<?php
	include('session.php');
?>


<?php
$con=mysqli_connect("localhost", "root", "", "bb");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$saddress=$_POST['saddress'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$pin=intval($_POST['pin']);
$cost=intval($_POST['cost']);
$guest=intval($_POST['guest']);
$room=$_POST['room'];
$desc=$_POST['desc'];
$title=$_POST['title'];

$values = $_POST['services'];


$var=$_SESSION['login_user'];

	$qry = "Select * From users Where Email=  '$var'" ; 
$result = mysqli_query($con,$qry);
$row = mysqli_fetch_assoc($result);


$var1=$row['User_id'];

$sql = "INSERT INTO rental_location (Street_address, City, State, Country, Pincode, Cost_per_night, Max_guests, Room_type,Description,Title,Host_id) VALUES ('$saddress', '$city', '$state', '$country', '$pin', '$cost', '$guest', '$room','$desc','$title','$var1')";

if (!mysqli_query($con, $sql)) 
{
	 echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


$qry2="Select Rental_location_id From rental_location Where Title='$title' ";
$result2 = mysqli_query($con,$qry2);
$row2 = mysqli_fetch_assoc($result2);

$var3=$row2['Rental_location_id'];

foreach ($values as $services)
{	
	$sql = "INSERT INTO services(Id, Service)VALUES('$var3','$services')";
	
	if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
	}
	header("Location: user.php");
}

mysqli_close($con);
?>