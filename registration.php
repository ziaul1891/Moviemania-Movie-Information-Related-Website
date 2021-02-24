<?php
error_reporting(E_ALL^E_NOTICE);

error_reporting(0);

session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>

<?php
if($username && $userid){
		echo "<font color='red'>$username, Click <a href='./logout.php'>Logout   </a>to Logout</font>";
		
	}

	

?>



	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul>
				<li >
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="movies.php">Movies</a>
					<!--
					<ul>
						<li>
							<a href="#">Now Showing</a>
						</li>
						<li>
							<a href="#">Comming Soon</a>
						</li>
					</ul>
					-->
				</li>
				<li class="selected">
					<a href="ticket-info.php">Celebs</a>
				</li>
				<li >
					<a href="rentals.php">News</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				
				<li>
					<a href="registration.php">Registration</a>
				</li>
				
				
			</ul>
		</div>
	</div>
	<div class="register-form">
<h1>Registration</h1>
	<?php
	
	if($_POST['registerbtn']){
		$getuser = $_POST['user'];
		
		$getemail = $_POST['email'];
		
		$password = $_POST['pass'];
		
		$getretypepass = $_POST['retypepass'];
		
		if($getuser){
			if($getemail){
				if($password){
					if($getretypepass){
						if($password === $getretypepass){
							if((strlen($getemail) >= 7)&&(strstr($getemail,"@"))&&(strstr($getemail,".")) ){
								require ("./connect.php");
								
								$query = mysql_query("SELECT * FROM users WHERE username='$getuser'");
								$numrows = mysql_num_rows($query);
								if ($numrows == 0){
								
								$query = mysql_query("SELECT * FROM users WHERE email='$getemail'");
								$numrows = mysql_num_rows($query);
								if ($numrows == 0){
									
									$password = md5(md5("kjfiufj".$password."Fj56fj"));
									
									
									$date = date("F d, Y");
									$code = md5(rand());
									echo "You must activate your account using this code<br/>(copy this code please)<br/>$code</br>from
									<a href='./activate.php'>Activation Page</a>";
									
									mysql_query("INSERT INTO users VALUES (
										'','$getuser','$password','$getemail','0','$code','$date'
									)");
									
									$query = mysql_query("SELECT * FROM users WHERE username='$getuser'");
									$numrows = mysql_num_rows($query);
									if($numrows == 1){
										
										$site = "http://localhost/registration";
										$webmaster = "Ziaul <ziaul1891@gmail.com>";
										$headers = "From: $webmaster";
										$subject = "Activate Your Account";
										$message = "Thanks for registering . Click the link below to activate your account.\n";
										$message .= "$site/activate.php?user=$getuser&code=$code\n";
										$message .= "You must activate your account to login.";
										
										if(mail($getemail, $subject, $message, $headers)){
											
											$errormsg = "";
										
											$getuser = "";
											$getemail = "";
										}
										else
											echo "An error has occured. Your activation email was not sent.";
									}
									else
										echo "An error has occured. Your account was not created";
								}
								else
									echo "There is already a user with that email.";
								
								}
								else
									echo "There is already a user with that username.";
								
								mysql_close();
							}
							else
								echo"You must enter a valid email address to register.";
						}
						else
							 echo "Your passwords did not match.";
					
					}
					else
						echo  "You must enter your password to register.";
				}
				else
					echo "You must enter your password to register.";
			}
			else
				 echo "You must enter your email to register.";
		}
		else
			echo"Your must enter your username to register.</br></br>";
	}
	
	
	
	$form= "<form action='./registration.php' method='post'>
	<table id='tableregistration' >
	<tr>
		<td</td>
		<td><font color='red'>$errormsg</font></td>
	</tr>
	<tr>
		<td>Username:</td>
		<td><input type='text' name='user' value='$getuser' /></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type='text' name='email' value='$getemail' /></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type='password' name='pass' value='' /></td>
	</tr>
	<tr>
		<td>Retype:</td>
		<td><input type='password' name='retypepass' value='' /></td>
		</br></br>
	</tr>
	
	<tr>
		<td></td>
		
		<td><input class='register' type='submit' name='registerbtn' value='Register' /></td>
	</tr>
	</table>
	</form>";
	
	
	echo $form;
	?>
</div>
<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="ticket-info.php">Movies</a>
					</li>
					<li>
						<a href="#">Celebs</a>
					</li>
					<li>
						<a href="movies.php">News</a>
					</li>
					<li>
						<a href="rentals.php">About</a>
					</li>
					<li>
						<a href="about.php">Contact</a>
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
	<title>Member System - Login </title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	
	
	
</body>
</html>