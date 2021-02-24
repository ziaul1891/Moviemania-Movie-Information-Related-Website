
<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Movies-Movie Mania</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="WOW Slider, slideshow html, bootstrap slider" />
	<meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
	
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>

</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			
			
			
			
			
	
	
	
	
	
	
			<ul>
				<li >
					<a href="index.php">Home</a>
				</li>
				<li class="selected">
					<a href="moviesmain.php">Movies</a>
					
					<ul>
					<li>
							<a href="./moviesbangla.php">Bangla</a>
						</li>
						<li>
							<a href="./action.php">Action</a>
						</li>
						<li>
							<a href="./horror.php">Horror</a>
						</li>
						<li>
							<a href="./romantic.php">Romantic</a>
						</li>
						<li>
							<a href="./documentary.php">Documentary</a>
						</li>
						<li>
							<a href="./comedy.php">Comedy</a>
						</li>
						<li>
							<a href="./drama.php">Drama</a>
						</li>
						<li>
							<a href="./animation.php">Animation</a>
						</li>
						<li>
							<a href="./all.php">All in One</a>
						</li>
						
					</ul>
				</li>
				<li >
					<a href="member.php">Celebs</a>
				</li>
				<li >
					<a href="rentals.php">News</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				
				<li>
					<a href="memberchat.php">Chat</a>
				</li>
				
				<li>
					<a href="#">Member Panel</a>
					<ul>
						<li>
							<a href="./login.php">Login</a>
							
						</li>
						<li>
							<a href="./register.php">Registration</a>
						</li>
						<li>
							<a href="./resetpass.php">Reset Password</a>
						</li>
						
						<li>
							<a href="./activate.php">Activatation</a>
						</li>
						
					</ul>
				</li>
				
				
			
				
				
			</ul>
		</div>
	</div>
	
	<?php
error_reporting(E_ALL^E_NOTICE);

error_reporting(0);

session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>

<?php

if($username && $userid){
		echo "<font color='#3399FF'><b>$username</b></font>, <font color='white'>Click <a href='./logout.php'>Logout   </a>to Logout</font>";
		
	}



?>

	
	</br>
	</br>
	</br>
	
	<!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=46"><img src="data1/images/movieimageaction1.jpg" alt="movieimage1" title="movieimage1" id="wows1_0"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=130"><img src="data1/images/movieimageanimation2.jpg" alt="movieimage2" title="movieimage2" id="wows1_1"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=196"><img src="data1/images/movieimagecomedy3.jpg" alt="movieimage3" title="movieimage3" id="wows1_2"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=222"><img src="data1/images/movieimagedocumentary4.jpg" alt="movieimage4" title="movieimage4" id="wows1_3"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=3"><img src="data1/images/movieimagedrama5.jpg" alt="movieimage5" title="movieimage5" id="wows1_4"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=316"><img src="data1/images/movieimagehorror6.jpg" alt="movieimage6" title="movieimage6" id="wows1_5"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=337"><img src="data1/images/movieimageromantic7.jpg" alt="movieimage7" title="movieimage7" id="wows1_6"/></a></li>
</ul></div>
<div class="ws_bullets"><div>

</div></div>
<span class="wsl"><a href="http://wowslider.net">javascript slideshow</a> by WOWSlider.com v5.5</span>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	</br>
	
	
	
	<div id="category" class="categorized">
		<h1>Category</h1>
		
		<div>
			<ul id="moviecategory">
				<li >
					<a href="./action.php">Action</a>
				</li>
				<li class="selected">
					<a href="./horror.php">Horror</a>
					
				</li>
				<li >
					<a href="./romantic.php">Romantic</a>
				</li>
				<li >
					<a href="./documentary.php">Documentary</a>
				</li>
				<li>
					<a href="./comedy.php">Comedy</a>
				</li>
				
				<li>
					<a href="./drama.php">Drama</a>
				</li>
				
				<li>
					<a href="./animation.php">Animation</a>
				</li>
				
				<li>
					<a href="./all.php">All in One</a>
				</li>
				
				
				
				
				
			</ul>
	</div>
	</div>
	
	
	<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
					<li>
						<a href="./index.php">Home</a>
					</li>
					<li>
						<a href="./moviesmain.php">Movies</a>
					</li>
					<li>
						<a href="./member.php">Celebs</a>
					</li>
					<li>
						<a href="./rentals.php">News</a>
					</li>
					<li>
						<a href="./about.php">About</a>
					</li>
					<li>
						<a href="./register.php">Registration</a>
					</li>
					
					
				</ul>
			</div>
			<div class="section">
				<span>Movie Quotes</span>
				<ul>
					<li>
						<p>
							<b> "At my signal, unleash hell." 
							</br>	
							 Gladiator (2000)
							</b>
						
						</p>
						
					</li>
					<li>
						<p>
						<b>
							I'm king of the world!</br>	Titanic	1997
							</b>
						</p>
						
					</li>
				</ul>
			</div>
			<div>
				<span>We are on Social Networks too!!!</span>
				<p>
					It's an age of social networking. We know you use your valuable (!) time on facebook, twitter and Google+ , so
					why not visit us on those sites, stays with us, always.
				</p>
				
			</div>
			<p>
				&#169; Copyright protected by Movie Mania @2014
			</p>
			<div class="connect">
				<span>Stay Connected:</span> <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a>
			</div>
		</div>
	</div>
	
</body>
</html>