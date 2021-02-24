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


<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Movie Mania</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<style>
		
	</style>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			
			<ul>
			
				<li class="selected">
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
	<div id="body" class="home">
		<div>
			<div>
				<a href="movies.php"><img src="images/mainpichome.jpg" alt=""></a>
				<h2><a href="movies.php">Movie Mania</a></h2>
				<p>
					This website is about all the different types of movies around the world. Everyday many new movies get
					released in various countries. And as we all know, everybody likes to watch movies. This website includes
					all the necessary informations about those movies. To know what a movie website is, click on the following link--
				</p>
				<a href="http://en.wikipedia.org/wiki/Category:Film_websites">Read More</a>
			</div>
			<ul>
				<li>
					<h3>Latest Release</h3>
					<span>Cinema 1</span> <a href="http://localhost/onlyrating/resulthorror.php?id=88"><img src="images/latestrelaease1.jpg" alt=""></a>
				</li>
				<li>
					<h3>Latest Release</h3>
					<span>Cinema 2</span> <a href="http://localhost/onlyrating/resulthorror.php?id=356"><img src="images/latestrelaease2.jpg" alt=""></a>
				</li>
				<li>
					<h3>Latest Release</h3>
					<span>Cinema 3</span> <a href="http://localhost/onlyrating/resulthorror.php?id=60"><img src="images/latestrelaease3.jpg" alt=""></a>
				</li>
			</ul>
		</div>
		<div>
			<div>
				<h3><a>Classics & Famous</a></h3>
				<ul>
					<li>
						<a href="http://localhost/onlyrating/resulthorror.php?id=273"><img src="images/classic2.jpg" alt=""></a>
						<h4>The Godfather</h4>
						<p>
							Check out our movies section for more info about this movie
						</p>
					</li>
					<li>
						<a href="http://localhost/onlyrating/resulthorror.php?id=337"><img src="images/classic1.jpg" alt=""></a>
						<h4>Titanic</h4>
						<p>
							Check out our movies section for more info about this movie
						</p>
					</li>
				</ul>
			</div>
			<div>
				<h3><a>Bangla Movies</a></h3>
				<ul>
					<li>
						<a href="http://localhost/onlyrating/resulthorror.php?id=392"><img src="images/bangla1.jpg" alt=""></a>
						<div>
							<span>Our Tradition</span>
							<h4>Bangla Movie 1</h4>
							<p>
								It's always nice to enjoy movies dubbed on mother tongue, Thanks for checking this section.
							</p>
						</div>
					</li>
					<li>
						<a href="http://localhost/onlyrating/resulthorror.php?id=398"><img src="images/bangla2.jpg" alt=""></a>
						<div>
							<span>Our Heritage</span>
							<h4>Bangla Movie 2</h4>
							<p>
								Know our culture, watch Bangla Movies.
							</p>
						</div>
					</li>
					<li>
						<a href="http://localhost/onlyrating/resulthorror.php?id=395"><img src="images/bangla3.jpg" alt=""></a>
						<div>
							<span>Our Pride</span>
							<h4>Bangla Movie 3</h4>
							<p>
							 You can directly search for any Bangla Movie from the "Movies" tab. 
							</p>
						</div>
					</li>
				</ul>
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