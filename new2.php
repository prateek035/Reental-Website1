<!DOCTYPE html>
<html>
<head>
<style>
body, html {
          height: 100%;
          margin: 20px;
          -webkit-font-smoothing: antialiased;
          font-weight: 100;
          background: #aadfeb;
         
          font-family: helvetica;
      }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
table{margin-left:60px;}
p{margin-left:70px;}
tr,td{ padding:15px;}

tr td:nth-child(even) {text-align:left; width:280px;}
tr td:nth-child(odd) {text-align:left; width:170px;}
h1{margin-left:50px; margin-top:50px;}
</style>
</head>
<body>

<ul>
  <li><a href="#profile">Profile</a></li>
  <li><a href="#news">Host Locations</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Rent Locations</a>
    <div class="dropdown-content">
      <a href="jabalpur.php">Jabalpur</a>
      <a href="#">Mumbai</a>
      <a href="#">Delhi</a>
      <a href="#">Chennai</a>
    </div>
  </li>
  <li style="float:right"><a href="#">Home</a></li>
</ul>
<h1>Bio</h1>
<?php
$var='rounak@gmail.com';
/*Connect to mysqli server*/ 
$link = mysqli_connect('localhost', 'root');  
/*Check link to the mysqli server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysqli_error());
 } 
/*Select database*/ 
$db = mysqli_select_db($link,'bed and breakfast'); 
if(!$db)
{
 die("Unable to select database"); 
}
echo "<table >";
$qry = "Select First_name,Last_name,DOB,Gender,Email,City,Country,Phone From user Where Email='$var' "; 
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
echo "<p><b>Rental Locations Hosted</b></p>";
echo "<div style='margin-left:75px'>";
$qry="Select Title, rental_location.City from rental_location,user where Host_id=User_id and Email='$var'";
$result=mysqli_query($link,$qry);
while($row=mysqli_fetch_assoc($result))
{
	
	echo $row['Title'].", ".$row['City']."<br/>";
}
if(mysqli_num_rows($result)==0)
{echo "No Rental Locations Hosted";}
echo "</div>";

echo "<p><b>Rental Locations Booked</b></p>";
echo "<div style='margin-left:75px'>";
$qry="Select Title, rental_location.City from rental_location,user,orders where Guest_id=User_id and Rent_id=Rental_location_id and Email='$var'";
$result=mysqli_query($link,$qry);
while($row=mysqli_fetch_assoc($result))
{
	
	echo $row['Title'].", ".$row['City']."<br/>";
}
if(mysqli_num_rows($result)==0)
{echo "No Rental Locations Booked";}
echo "</div>";


?>
</body>
</html>
