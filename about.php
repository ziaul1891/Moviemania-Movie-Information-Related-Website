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




<html>
<head>
	<meta charset="UTF-8">
	<title>About-Movie Mania</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	
	<style type="text/css">
	
	</style>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
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
				<li  class="selected">
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
	<div id="body" class="about">
		<h2>About</h2>
		<div>
			<div>
				<h4>The Website</h4>
				<img src="images/cinema4.jpg" alt="">
				<h3>This is a movie-based website</h3>
				<p>
					Our website provides you with all the latest infos about movies and related stuffs. If you like to
					watch movies, if you enjoy movies, then you are just on the right place. Explore our site and you will
					be amazed.
					</p>
				<h3>Want to know about Movies?</h3>
				<p>
					Looking for different types of movies? Don't want all of them? We have categorized 
						movies for you in the <a href="moviesmain.php" style="color:yellow"><b>Movies</b></a> section.
						</p>
				<h3>Want to know about Celebs?</h3>
				<p>
						We know that you may have a crush on Emma Watson or Robert Pattinson....You may even want to 
						follow their lifestyle as they are your idol. Check out the <a href="member.php" style="color:yellow"><b>Celebs</b></a> section for more infos.
					</p>
				<h3>News Section</h3>
				<p>
					Hot Gossips <br> Breathtaking rumors , Check out the <a href="rentals.php" style="color:yellow"><b>News</b></a> section<br><br>
				</p>
				<p>
					Just Explore our websites, we are just beginning , if you stay with us, we may be able to
					improve our site faster than we think :)
					</p>
				</br>
				
				<h3>Chat!</h3>
				
				<p>
					Want to chat? Want to gossip with other members? Just <a href="login.php" style="color:yellow"><b>Login</b></a> and share your experience .
					</p>
				</br>
				
				
				<p>
						Please feel free to contact us any time, we have all our contact infos on the right side.
					</p>
			</div>
			<div>
			
				<h4>Contact</h4>
				<img src="images/retro-telephone.jpg" alt=""></br></br></br> <span class="address">Movia Mania, CSE 3rd Year,1st Semester, AUST</span> <span class="phone-num">01674868339</span> <span class="fax-num">01715394025</span> <span class="email">ziaul1891@gmail.com</span>
				
			</div>
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