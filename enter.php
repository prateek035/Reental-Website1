<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'bb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT Email,Password FROM users WHERE Email = '$myusername' and Password = '$mypassword'";
	  $sql1 = "SELECT First_name,Last_name FROM users WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
	  $result1 = mysqli_query($db,$sql1);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
	  $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      
      
	 
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        $_SESSION['myusername']=$row["First_name"];
         $_SESSION['login_user'] = $myusername;
         
         header("location: user.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
	  <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	
	
      
      <style type = "text/css">
      body {
  background: url('pg.jpg');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
}
.form_bg {
    background-color:#009edf;
    color:#666;
    padding:40px;
    border-radius:0px;
    position: absolute;
    border:0spx solid #fff;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 320px;
    height: 250px;
	text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
.align-center {
    text-align:center;
	font-size: 20px;
	font-family: 'Passion One', cursive; 
	font-weight: 400;
}
      </style>
      
   </head>
   
   <body >
   
   <div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<a class="brand" href="index.html" style="max-width: 10%;">
					<img src="123.png" class="img-fluid">
				</a>

					<h1 class="brand"><a href="index.html">Bed And Breakfast</a></h1>
					
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="About" href="index.html#about">About</a></li>
							<li><a title="Locations" href="index.html#services">Locations</a></li>
							<li><a title="Reviews" href="index.html#blog">Reviews</a></li>
							<li><a title="Login" href="index.html">HOME</a></li>
							<li><a title="contact" href="index.html#contact">Contact</a></li>
							<li><a href="page.html">Page</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
     <div class="container">
    <div class="row">
        <div class="form_bg">
               
               <form action = "" method = "post">
                  <h2><label>EmailId  :</label></h2>
                <div class="form-group">
				  <input type = "text" name = "username" class = "form-control" placeholder="Email"/><br /><br />
				  </div>
				  
                  <label>Password  :</label>
				  <div class="form-group">
				  <input type = "password" name = "password" class = "form-control" placeholder="Password"/><br/><br />
				  </div>
				  <div class="align-center">
                  <input type = "submit" value = " Submit "/><br />
				  </div>
               </form>
                   
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
				</div>
    </div>
</div>	
           

   </body>
</html>