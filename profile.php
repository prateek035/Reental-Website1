              
<?php
	include('session.php');
?>


<html lang="en">

<head>
	<meta charset="utf-8">
	<title> My Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo.ico">
	<script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo.ico">
	<script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>

table{margin-left:60px; margin-top:120px align:center;}
p{margin-left:70px;}
h3{margin-left:70px;}
tr,td{ padding:15px;}

tr td:nth-child(even) {text-align:left; width:280px;}
tr td:nth-child(odd) {text-align:left; width:170px;}
h1{margin-left:50px; margin-top:50px;}
</style>
</head>

<body bgcolor="#1a1a1a">







	<!-- navbar -->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<a class="brand" href="user.php" style="max-width: 10%;">
					<img src="123.png" class="img-fluid" style="position:left;">
				</a>

					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="Home" href="user.php">Home</a></li>
							<li><a title="Rent" href="latest.html">Host Location</a></li>
							
							
							<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Rent Locations<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="jabalpur.php">Jabalpur</a></li>
                            <li><a href="delhi.php">Delhi</a></li>
                              <li><a href="mumbai.php">Mumbai</a></li>
							  <li><a href="hyderabad.php">Hyderabad</a></li>
                            <li class="divider"></li>
                            
                        </ul>
						<li><a title="logout" href="logout.php">LogOut</a></li>
						</li>
							
							
							
     
    </ul>
	
					</nav>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<section id="login" class="spacer bg3">
		
	
    <div class="col-md-12">
      
        
        <div class="caption">
          
          
        </div>
        
        <div class="modal fade" id="buy_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <B><center><h2>Personal Info</h2></center></b>
                
              </div>
              <div class="modal-body">
                 
              </div>
             
            </div>
          </div>

        
    </div>
			
			
			
		</div>
	</section>
	
	<br/>
	<br/>
	

	
	
	
	
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
	
<?php
$var=$login_session;
/*Connect to mysqli server*/ 
$link = mysqli_connect('localhost', 'root');  
/*Check link to the mysqli server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysqli_error());
 } 
/*Select database*/ 
$db = mysqli_select_db($link,'bb'); 
if(!$db)
{
 die("Unable to select database"); 
}
echo "<table border=1px >";
$qry = "Select First_name,Last_name,DOB,Gender,Email,City,Country,Phone From users Where Email='$var' "; 
$result = mysqli_query($link,$qry);
while ($row = mysqli_fetch_assoc($result))
{
echo "<tr><td><b>First Name: </b></td><td>".$row['First_name']."</td><td><b>Last Name: </b></td><td>".$row['Last_name']."</td></tr>";
echo "<tr><td><b>Date Of Birth: </b></td><td>".$row['DOB']."</td><td><b>Gender: </b></td><td>".$row['Gender']."</td></tr>";
echo "<tr><td><b>City: </b></td><td>".$row['City']."</td><td><b>Country: </b></td><td>".$row['Country']."</td></tr>";
echo "<tr><td><b>Email: </b></td><td>".$row['Email']."</td><td><b>Phone: </b></td><td>".$row['Phone']."</td></tr>";
}
echo "</table>";

echo "<h1>Activity</h1>";
echo "<h3>Rental Locations Hosted</h3>";
echo "<div style='margin-left:75px'>";
$qry="Select Title, rental_location.City from rental_location,users where Host_id=User_id and Email='$var'";
$result=mysqli_query($link,$qry);
while($row=mysqli_fetch_assoc($result))
{
	
	echo $row['Title'].", ".$row['City']."<br/>";
}
if(mysqli_num_rows($result)==0)
{echo "No Rental Locations Hosted";}
echo "</div>";

echo "<h3>Rental Locations Booked</h3>";
echo "<div style='margin-left:75px'>";
$qry="Select Title, rental_location.City from rental_location,users,orders where Guest_id=User_id and Rent_id=Rental_location_id and Email='$var'";
$result=mysqli_query($link,$qry);
while($row=mysqli_fetch_assoc($result))
{
	
	echo $row['Title'].", ".$row['City']."<br/>";
}
if(mysqli_num_rows($result)==0)
{echo "No Rental Locations Booked";}
echo "</div>";

echo "<h3>Bookings received</h3>";
echo "<div style='margin-left:75px'>";
$qry="Select Rent_id from rental_location,users,orders where Email='$var' and Host_id=User_id and Rent_id=Rental_location_id";
$result=mysqli_query($link,$qry);
$rowcount=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result))
{
	$qry1="Select First_name, Last_name, Title, Check_in, Check_out from rental_location,users,orders where Rent_id='".$row['Rent_id']."'and Guest_id=User_id and Rent_id=Rental_location_id";
    $result1=mysqli_query($link,$qry1);
	while($row1=mysqli_fetch_assoc($result1))
   {
	echo $row1['First_name']." ".$row1['Last_name']." booked <b>".$row1['Title']."</b> from ".$row1['Check_in']." to ".$row1['Check_out']."<br/>";
   }
}
if(mysqli_num_rows($result)==0)
{echo "No bookings received yet!";}
echo "</div>";
echo "<br/>";
echo "<br/>";

?>
</body>
</html>