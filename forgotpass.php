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



	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul>
			<li>
							<a href="./moviesbangla.php">Bangla</a>
						</li>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="moviesmain.php">Movies</a>
					
					<ul>
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
	
	
	<div class="forgotpass-form">
<h1>Forgot Your Password?</h1>
	<?php
	
	
	
	if(!$username && !$userid){
		if($_POST['resetbtn']){
			//get the form data
			$user = $_POST['user'];
			$specialcode = $_POST ['specialcode'];
			
			if($user){
				if($specialcode){
					
						//connect
						require ("./connect.php");
						
						$query = mysql_query("SELECT *FROM users WHERE username='$user'");
						$numrows=mysql_num_rows($query);
						if($numrows==1){
							//get the info about account
							$row = mysql_fetch_assoc($query);
							$dbspecialcode = $row['specialcode'];
							
							//make sure email is correct
							if($specialcode == $dbspecialcode){
								$pass = rand();
								$pass = md5($pass);
								$pass = substr($pass,0,15);
								$password = md5(md5("kjfiufj".$pass."Fj56fj"));
								//update db with new pass
								mysql_query("UPDATE users SET password='$password' WHERE username= '$user'");
								
								//make sure the password was changed
								$query = mysql_query("SELECT * FROM users WHERE username = '$user' AND password='$password'");
								$numrows = mysql_num_rows($query);
								
								if($numrows == 1){
									//create email variables
									$webmaster = "ziaul1891@gmail.com";
									$headers = "From: $webmaster";
									$subject = "Your new password";
									$message = "Your password has been reset.Your new password is below.\n";
									$message .= "Password: $pass\n";
									
									if(mail($specialcode,$subject,$message,$headers)){
										
										echo "<font color='#456'>Your password has been reset.Your new password is:</font><font color='#945'><br/>$pass<br/></font>"; 
										echo "<font color='#456'>(You can copy the above password)<br/></font>"; 
										echo "<font color='#456'>Now you can login from <a href=./login.php>here</a></font>"; 
										
									}
									else
										echo "<font color='#456'>An error has occured, your email was not send containing new password</font>";
								
								}
								else
									echo "<font color='#456'>And error has occured, the password was not reset</font>";
								
							}
							else
								echo "<font color='#456'>You have entered the wrong special codeword</font>";
						}
						else
							echo "<font color='#456'>Your username was not found</font>";
						
						
						mysql_close();
					
					
				}
				else
					echo "<font color='#456'>Please enter your special codeword.</font>";
			}
			else
				echo "<font color='#456'>Please enter your username.</font>";
		}
		else
			echo "<form action='./forgotpass.php' method='post'>
		<table id='tableforgotpass'>
		<tr>
			<td>Username:</td>
			<td><input type='text' name='user' /></td>
		</tr>
		
		<tr>
			<td>Special Code:</td>
			<td><input type='text' name='specialcode' /></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input class= 'forgotpass' type='submit' name='resetbtn' value='Reset Password' /></td>
		</tr>
		</table>
		</form>";
		
		
		
	}
	else
		echo "Please logout to view this page.";
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
	<title>Forgot Your Password?-Movie Mania</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	
	
	
</body>
</html>