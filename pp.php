
<?php
$con=mysqli_connect("localhost", "root", "", "bb");

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
$city=mysqli_real_escape_string($con, $_POST['city']);
$country=mysqli_real_escape_string($con, $_POST['country']);
$phone=mysqli_real_escape_string($con, $_POST['phone']);




 $sql = "INSERT INTO users (First_name, Last_name, DOB, Gender, Email, Password, City, Country, Phone) VALUES ('$fname', '$lname', '$dob', '$gender', '$email', '$password', '$city', '$country', '$phone')";
        if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
	}
		echo "You have successfully logged in.";
		header("Location: enter.php");

mysqli_close($con);

?>

