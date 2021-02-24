<?php
error_reporting(E_ALL^E_NOTICE);

error_reporting(0);

session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>




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
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="memberchat.php">Chat</a>
				</li>
				
				<li  class="selected">
					<a href="">Member Panel</a>
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
	
	<div class="logout-form">

	<?php
	
	if($username && $userid){
		session_destroy();
		echo "<font color='#456'>You have been logged out. <a href='./index.php'>Home</a></font>";
	
	}
	else
		echo "<font color='#456'>You are not logged in.</font>";
	
	?>
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


<html>
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<title>Logout-Movie Mania</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	
	
	
</body>
</html>