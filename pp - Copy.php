
<?php
$con=mysqli_connect("localhost", "root", "", "bnb");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname=mysqli_real_escape_string($con, $_POST['lname']);
$dob=mysqli_real_escape_string($con, $_POST['dob']);
$dob = strtotime($dob);
$dob = date('Y-m-d', $dob);
$gender=mysqli_real_escape_string($con, $_POST['gender']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, $_POST['password']);
$loc=mysqli_real_escape_string($con, $_POST['loc']);




 $sql = "INSERT INTO users (First_name, Last_name, DOB, Gender, Email, Password, Location, User_id) VALUES ('$fname', '$lname', '$dob', '$gender', '$email', '$password', '$loc')";
        if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
	}
		echo "You have successfully registered ";

mysqli_close($con);

?>

