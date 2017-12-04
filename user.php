              
<?php
	include('session.php');
?>


<html lang="en">

<head>
	<meta charset="utf-8">
	<title> Bed and Breakfast</title>
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
div.1 {
	border-radius: 5px;
	border: 2px solid #6495ED;
	background-color: #BCD2EE;
	height: 50px;
	width: 120px;
	margin: auto;
	text-align: center;
}

a.1 {
	text-decoration: none;
	color: #3D59AB;
	font-family: Verdana, sans-serif;
}

span.1 {
	font-weight: bold;
	font-size: 18px;
	color: #ffffff;
}</style>
	
</head>

<body>







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
							<li><a title="about" href="#about">About</a></li>
							<li><a title="services" href="#services">Locations</a></li>
							
							<li><a title="blog" href="#blog">Reviews</a></li>
							
							<li><a title="contact" href="#contact">Contact</a></li>
							<li><a title="page" href="page.html">Owners & Makers</a></li>
							
							
							<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo $user_check; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#about">Become Host</a></li>
                            <li><a href="#services">Find Location</a></li>
                              <li><a href="profile.php">My Account</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php">LogOut</a></li>
                        </ul>
                    </li>
							
							
							
     
    </ul>
	
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="img/logo-image1.jpg"  style="max-width:15%;" alt="" />
			</div>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										<strong></strong> At Home
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										Eat and drink <strong>Sleep</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										We loves <strong>Simplicitity and Comfort</strong>
									</p>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- spacer section -->
	<section class="spacer green">
		<div class="container">
		
		
		
		
		
		
			<div class="row">
				<div class="span6 alignright flyLeft">
					<blockquote class="large">
						No matter how nice a hotel is, it's not home. <cite>Bill Kreutzmann</cite>
					</blockquote>
				</div>
				<div class="span6 aligncenter flyRight">
					<i class="icon-coffee icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="about" class="section" >
		<div class="container">
			<h4>WHAT WE DO</h4>
			
			
			
			
			
			
			<div class="row">
				<div style=" margin-left: 5cm;" class="span3 offset1">
						<div id="1">
			<br/><br/><br/><br/><a href="latest.html" class="btn btn-info" role="button"><button  type="button" class="btn btn-info">Become <span id="1">A Host </span></button></a>
		</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						<img src="img/icons/rent.png" style="max-width:40%" alt="" />
					</div>
				</div>
			</div>
			
			
			
	

  </header>
			
			  
			
			
			
			
			
		<!-- /.container -->
	</section>
	
	<section id="services" class="section orange">
		<div class="container">
			<h4>Rental Locations</h4>
			<!-- Four columns -->
			<div class="row">
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
					
					
						<a href="Jabalpur.php"><img src="img/location/jabalpur/1.jpg" alt="" /></a>
						
						<p>
						<h1>Jabalpur</h1>	
						</p>
					</div>
				</div>
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
					
					
						<a href="Mumbai.php"><img src="img/location/jabalpur/2.jpg" alt="" />
						
						<p>
						<h1>Mumbai</h1>	
						</p>
					</div>
				</div>
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
					
					
						<a href="Delhi.php"><img src="img/location/jabalpur/3.jpg" alt="" />
						
						<p>
						<h1>Delhi</h1>	
						</p>
					</div>
				</div>
				<div class="span3 animated-fast flyIn">
					<div class="service-box">
					
					
						<a href="Chennai.php"><img src="img/location/jabalpur/4.jpg" alt="" />
						
						<p>
						<h1>Chennai</h1>	
						</p>
					</div>
				</div>
				</div>
		</div>
	</section>
	
	
	
	
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter flyLeft">
					<blockquote class="large">
						Bed & Breakfast provides the best services in town as per your convinience.
					</blockquote>
				</div>
				<div class="span12 aligncenter flyRight">
					<i class="icon-rocket icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: blog -->
	<section id="blog" class="section">
		<div class="container">
			<h4>Reviews</h4>
			<!-- Three columns -->
			<div class="row">
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/blog/img1.jpg" alt="" />
						</div>
						<div class="post-meta">
						
						
							<span class="tags">
							
							<div class="rating">
								<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
							</div>
							
							</span>
						</div>
						<div class="entry-content">
							<h5>
							<p>
								I was there for two days and one night on 27 ,28 feb .best budget accomodation in jodhpur.Mr Raju takes care of you as if you were a part of there family. it gives you more than what you pay for. 
								raju i wish your business grows four folds thanks raju  :-<strong><i>Pratyush , mumbai</i></strong>
						
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/blog/img2.jpg" alt="" />
						</div>
						<div class="post-meta">
						
						
							<span class="tags">
							
							<div class="rating">
								<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
							</div>
							
							</span>
						</div>
						<div class="entry-content">
							<h5>
							<p>
								This hotel offers good accommodation and it was my good choice to stay here for 2 nighs with family, cost was not high , but had all the basic infrastructure. The room was big and more than enough for 2
								. Fitted with quality AC, TV, geyser. Well furnished. Good servive and peaceful atmosphere  :-<strong><i>Manish , Delhi</i></strong>
						
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/blog/img1.jpg" alt="" />
						</div>
						<div class="post-meta">
						
						
							<span class="tags">
							
							<div class="rating">
								<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
							</div>
							
							</span>
						</div>
						<div class="entry-content">
							<h5>
							<p>
								Waste of Money!
Stayed in this hotel for 2 nights, I had my worst experience ever. 
1. Not at all worth the money they charge for a single room.
2. Mosquitoes all over, there was a smell of rotten fish when we entered in the SUPER DELUXE ROOM.
3. Staff not at all co-operative, casual attitude with a rough tone. After checking out from the hotel, around 5-6 waiters were expecting me to give a tip.  :-<strong><i>Pratyush , mumbai</i></strong>
						
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="home-post">
						<div class="post-image">
							<img class="max-img" src="img/blog/img1.jpg" alt="" />
						</div>
						<div class="post-meta">
						
						
							<span class="tags">
							
							<div class="rating">
								<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
							</div>
							
							</span>
						</div>
						<div class="entry-content">
							<h5>
							<p>
								We stayed with 2 kids, I have to say that my first impression was the same "big room and largest bed I ever slept". 
Service is helpful if you ask. Cleaning could be improve a bit. No big issues to mention here. Lovely stay.  :-<strong><i>Pratyush , mumbai</i></strong>
						
						</div>
					</div>
				</div>
			</div>
			
	</section>
	
	
	
		<section id="login" class="spacer bg3">
		
	
    <div class="col-md-12">
      
        
        <div class="caption">
          
          
        </div>
        
        <div class="modal fade" id="buy_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
                 
              </div>
             
            </div>
          </div>

        
    </div>
			
			
			
		</div>
	</section>
	

	
	
	<section id="contact" class="section green">
		<div class="container">
			<h4>Get in Touch</h4>
			<p>
				Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei
				eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
			</p>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
									<div class="field your-email form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validation"></div>
									</div>
									<div class="field subject form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
										<div class="validation"></div>
									</div>
								</div>
								<div class="span6">
									<div class="field message form-group">
										<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
										<div class="validation"></div>
									</div>
									<input type="submit" value="Send message" class="btn btn-theme pull-left">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- ./span12 -->
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
					</ul>
					

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

</body>

</html>
