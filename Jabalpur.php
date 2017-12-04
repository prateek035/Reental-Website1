              
<?php
	include('session.php');
		
	
?>


<html>
<head>
    <title>Bed and Breakfast</title>
	<!--Font family-->
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>

    <style>
	.slider-holder
        {
            width: 800px;
            height: 400px;
            background-color: yellow;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            text-align: center;
            overflow: hidden;
        }
        
        .image-holder
        {
            width: 2400px;
            background-color: red;
            height: 400px;
            clear: both;
            position: relative;
            
            -webkit-transition: left 2s;
            -moz-transition: left 2s;
            -o-transition: left 2s;
            transition: left 2s;
        }
        
        .slider-image
        {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
        
        #slider-image-1:target ~ .image-holder
        {
            left: 0px;
        }
        
        #slider-image-2:target ~ .image-holder
        {
            left: -800px;
        }
        
        #slider-image-3:target ~ .image-holder
        {
            left: -1600px;
        }
         #slider-image-4:target ~ .image-holder
        {
            left: 0px;
        }
        
        #slider-image-5:target ~ .image-holder
        {
            left: -800px;
        }
        
        #slider-image-6:target ~ .image-holder
        {
            left: -1600px;
        }
		
		#slider-image-7:target ~ .image-holder
        {
            left: 0px;
        }
        
        #slider-image-8:target ~ .image-holder
        {
            left: -800px;
        }
        
        #slider-image-9:target ~ .image-holder
        {
            left: -1600px;
        }
		#slider-image-10:target ~ .image-holder
        {
            left: 0px;
        }
        
        #slider-image-11:target ~ .image-holder
        {
            left: -800px;
        }
        
        #slider-image-12:target ~ .image-holder
        {
            left: -1600px;
        }
		
        .button-holder
        {
            position: relative;
            top: -25px;
        }
        
        .slider-change
        {
            display: inline-block;
            height: 10px;
            width: 10px;
            border-radius: 5px;
            background-color: brown;
        }
		.checked {color: orange;}
		p{
			margin-right: 300px;
			 font-family:'Circular Medium';font-size:20px;
		}
		h4{
			margin:0px;
		}
		ul.serve{margin:0px;}
		ul.serve li:nth-child(even) {float:middle;margin-left:300px;}
        ul.serve li:nth-child(odd) {float:left}
		body{font-family:'Circular Medium';font-size:20px;   
		background: url('b3.jpg');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
		}
		
		.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }

 .modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 400px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}

.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}
ul.menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
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



	</style>
</head>
<body >
<?php 

echo '<ul class="menu">
  <li style="float:left"><a href="profile.php">Profile</a></li>
  <li style="float:left"><a href="latest.html">Host Locations</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Rent Locations</a>
    <div class="dropdown-content">
       <a href="jabalpur.php">Jabalpur</a>
      <a href="Mumbai.php">Mumbai</a>
      <a href="Delhi.php">Delhi</a>
      <a href="Chennai.php">Chennai</a>
    </div>
  </li>
  <li style="float:right"><a href="user.php">Home  </a></li>
</ul>';

	echo'<br/>';
	echo'<br/>';


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

$qry = "Select Rental_location_id,Title,Max_guests,Room_type,Cost_per_night,Description,Host_id,Street_address,City,State,Country,Pincode From rental_location Where City='Jabalpur   '"; 
$result = mysqli_query($link,$qry);
$i=0;echo "<br/>";
while ($row = mysqli_fetch_assoc($result))
{ $i++;
//display images
$rid=$row['Rental_location_id'];
$qry1  = "Select Img From images Where Id='".$row['Rental_location_id']."'"; 
$result1 = mysqli_query($link,$qry1);

if($i==1){echo "<div class=\"slider-holder\">
        <span id=\"slider-image-1\"></span>
        <span id=\"slider-image-2\"></span>
        <span id=\"slider-image-3\"></span>
<div class=\"image-holder\">";}
else if($i==2) {echo "<div class=\"slider-holder\">
        <span id=\"slider-image-4\"></span>
        <span id=\"slider-image-5\"></span>
        <span id=\"slider-image-6\"></span>
<div class=\"image-holder\">";}
else if($i==3){echo "<div class=\"slider-holder\">
        <span id=\"slider-image-7\"></span>
        <span id=\"slider-image-8\"></span>
        <span id=\"slider-image-9\"></span>
<div class=\"image-holder\">";}
else {echo "<div class=\"slider-holder\">
        <span id=\"slider-image-10\"></span>
        <span id=\"slider-image-11\"></span>
        <span id=\"slider-image-12\"></span>
<div class=\"image-holder\">";}

while ($row1 = mysqli_fetch_assoc($result1))
{
	$image = $row1["Img"];
    echo "<img src='".$image."' class=\"slider-image\" height=\"400\" width=\"800\"/>";	
}
if($i==1){echo "</div>
        <div class=\"button-holder\">
            <a href=\"#slider-image-1\" class=\"slider-change\"></a>
            <a href=\"#slider-image-2\" class=\"slider-change\"></a>
            <a href=\"#slider-image-3\" class=\"slider-change\"></a>
        </div>
</div>";}
else if($i==2){
echo "</div>
        <div class=\"button-holder\">
            <a href=\"#slider-image-4\" class=\"slider-change\"></a>
            <a href=\"#slider-image-5\" class=\"slider-change\"></a>
            <a href=\"#slider-image-6\" class=\"slider-change\"></a>
        </div>
</div>";}
else if($i==3){
echo "</div>
        <div class=\"button-holder\">
            <a href=\"#slider-image-7\" class=\"slider-change\"></a>
            <a href=\"#slider-image-8\" class=\"slider-change\"></a>
            <a href=\"#slider-image-9\" class=\"slider-change\"></a>
        </div>
</div>";}
else{
echo "</div>
        <div class=\"button-holder\">
            <a href=\"#slider-image-10\" class=\"slider-change\"></a>
            <a href=\"#slider-image-11\" class=\"slider-change\"></a>
            <a href=\"#slider-image-12\" class=\"slider-change\"></a>
        </div>
</div>";}
echo '<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:750px; margin-left:1210px; margin-right:-450px;">

  <div class="w3-display-left  w3-col l6 m8" style="margin-top:320px; border:1px solid red; " >
    <div class="w3-container w3-red">
      <h2><i class="fa fa-bed w3-margin-right"></i>BNB</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="#openModal" method="post" >
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Check In</label>
            <input class="w3-input w3-round w3-border" type="date" min="2017-11-26" placeholder="DD MM YYYY" name="CheckIn" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Check Out</label>
            <input class="w3-input w3-round w3-border" type="date" min="2017-11-26" placeholder="DD MM YYYY" name="CheckOut" required>
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-center w3-margin-bottom " >
            <label><i class="fa fa-male"></i> Guests</label>
            <input class="w3-input w3-round w3-border" style="width:50%; margin-left:85px "  type="number" value="1" name="Adults" min="1" max="6">
          </div>
        </div>
		<div style="text-align:center">';
  echo "<button class=\"w3-button w3-round w3-red\"  type=\"submit\" name=\"Submit\" value=\"$rid\"><a > Book</a></button>
        </div>  
	  </form>
    </div>
  </div>
</header>";
 $qry2  = "Select First_name,Phone,Email From users Where User_id='".$row['Host_id']."'"; 
$result2 = mysqli_query($link,$qry2);
$row2 = mysqli_fetch_assoc($result2);
echo "<div style=\"margin-left:150px; \">";
//display information
echo "<h1 style=\"font-family:'Circular Bold';font-weight:bold;font-size:42px\">".$row["Title"]."</h1>";
echo $row["Max_guests"]." guests <class style=\"margin-left:30px\">".$row["Room_type"]." </class>";
echo "<class style=\"margin-left:30px\">₹".$row["Cost_per_night"]." per night </class><class style=\"float:right; font-size:21px; font-weight:bold; margin-right:400px\">Hosted by ".$row2["First_name"]."</class> </br>";
echo "<p style=\"margin-right:400px; \">".$row["Description"]."</p>";	

//display services
echo "<div style=\"font-family:'Circular Bold';font-weight:bold;font-size:26px; margin-top:-10px \">Services</div>";
$qry1  = "Select Service From services Where Id='".$row['Rental_location_id']."'"; 
$result1 = mysqli_query($link,$qry1);
echo "<ul class=\"serve\" compact=compact; type=disc; style=\"overflow:hidden\" >";
while ($row1 = mysqli_fetch_assoc($result1))
{
    echo "<li >".$row1["Service"]."</li>";
}
if(mysqli_num_rows($result1)==0)
{
	echo "No services Offered";
}
echo"</ul>";
//display reviews
echo "<div style=\"margin-top:5px\">";
if($i==2){ echo '<div style="display:inline; margin-right:10px; font-family:Circular Bold;font-weight:bold;font-size:26px;">Reviews</div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>';}
else { echo '<div style="display:inline; margin-right:10px; font-family:Circular Bold;font-weight:bold;font-size:26px;">Reviews</div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>';}
echo "</div>";

$qry1  = "Select Review,User_name From Reviews Where Id='".$row['Rental_location_id']."'"; 
$result1 = mysqli_query($link,$qry1);
while ($row1 = mysqli_fetch_assoc($result1))
{
    echo "<div style=\" margin-left:25px ;font-family:'Circular Bold';font-weight:bold;font-size:20px\">".$row1["User_name"]."</div><div style=\"margin-right:400px; margin-left:25px\">".$row1["Review"]."<hr></div>";;
}
//Location
echo "<div style=\"font-family:'Circular Bold';font-weight:bold;font-size:26px; \">The neighbourhood</div>";
echo "<div style=\"margin-right:400px\">".$row2["First_name"]."'s home is located at ".$row["Street_address"].", ".$row["City"]." - ".$row["Pincode"].", ".$row["State"].", ".$row["Country"].".</div>";
//Contact
echo "<div style=\"font-family:'Circular Bold';font-weight:bold;font-size:26px; \">Contact Info</div>";
echo "Phone : ".$row2["Phone"]."<br/>";
echo "Email : ".$row2["Email"];
echo"<hr style=\"margin-left:-75px; margin-right:75px\">";
echo "</div>";
echo "<br/>";
echo "<br/>";

}


echo "<div id='openModal' class='modalDialog'>";
$rlid=$_POST['Submit'];
$c_in=$_POST['CheckIn'];
$c_out=$_POST['CheckOut'];
$date1=date_create($c_in);
$date2=date_create($c_out);
$diff=date_diff($date1,$date2);
$c1=$date1->format("Y-m-d");
$c2=$date2->format("Y-m-d");
$day= $diff->format("%a");
$qry3="Select User_id From users where Email='$var'";
$result3=mysqli_query($link,$qry3);
$row3=mysqli_fetch_assoc($result3);
$uid=$row3['User_id'];

$qry1="Select Cost_per_night From rental_location Where Rental_location_id=$rlid and $rlid not in (Select Rent_id From orders Where '$c1' between Check_in and Check_out or '$c2' between Check_in and Check_out)";
$result1=mysqli_query($link,$qry1);
while($row1=mysqli_fetch_assoc($result1))
{
	$qry2="Insert Into orders(Guest_id, Rent_id, Check_in, Check_out, Cost) values($uid,$rlid,STR_TO_DATE('$c_in', '%Y-%m-%d'),STR_TO_DATE('$c_out', '%Y-%m-%d'),($row1[Cost_per_night]*$day))";
	if(mysqli_query($link,$qry2))
	{
		echo "<div>";
		echo "<a href=\"#close\" title=\"Close\" class=\"close\">X</a>";
		echo "Thanks for booking. Have a pleasant stay."; 
echo "</div>";
	}
}
if(mysqli_num_rows($result1)==0)
{
echo "<div>";
		echo "<a href=\"#close\" title=\"Close\" class=\"close\">X</a>";
		echo "Sorry! This rental location is not available within the required duration."; 
echo "</div>";
}
echo "</div>";	
?>
</body>
</html>