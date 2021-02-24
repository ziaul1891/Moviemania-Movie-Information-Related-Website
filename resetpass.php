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
	
	
	<div class="resetpass-form">
<h1>Reset Your Password</h1>
	<?php
	if($username && $userid){
		if($_POST['resetpass']){
			//get the form data
			$pass = $_POST['pass'];
			
			$newpass = $_POST['newpass'];
			
			$confirmpass = $_POST['confirmpass'];
			
			if($pass){
				if($newpass){
					if($confirmpass){
						if($newpass===$confirmpass){
							$password = md5(md5("kjfiufj".$pass."Fj56fj"));
							
							//connect to db
							require("./connect.php");
							$query = mysql_query("SELECT *FROM users WHERE username = '$username' AND password='$password'");
							$numrows = mysql_num_rows($query);
							
							if($numrows == 1){
							//encrypt new pass
								$newpassword = md5(md5("kjfiufj".$newpass."Fj56fj"));
							
							//update the db with new pass
							mysql_query("UPDATE users SET password = '$newpassword' WHERE username = '$username'");
							
							//make sure the password was changed
							$query = mysql_query("SELECT *FROM users WHERE username = '$username' AND password='$newpassword'");
							$numrows = mysql_num_rows($query);
							
							if($numrows == 1){
								echo "<font color='#456'>Your password has been reset</font>";
							}
							else
								echo "<font color='#456'>An  error has occured, your password was not reset</font>";
							}
							else
								echo "<font color='#456'>Your current password is incorrect</font>";
							mysql_close();
						}
						else
							echo "<font color='#456'>Your new password did not match</font>";
					}
					else
						echo "<font color='#456'>Your must confirm your password</font>";
				}
				else
					echo "<font color='#456'>Your must enter your new passowrd</font>";
			}
			else
				echo "<font color='#456'>You must enter your current password</font>";
		}
		echo "<form action='./resetpass.php' method='post'>
	<table id='tableresetpass'>

	<tr>
		<td>Current Password: </td>
		<td><input type='password' name='pass' /></td>
	</tr>
	<tr>
		<td>New Password:</td>
		<td><input type='password' name='newpass' /></td>
	</tr>
	<tr>
		<td>Confirm Password:</td>
		<td><input type='password' name='confirmpass'/></td>
	</tr>
	<tr>
		<td></td>
		<td><input class= 'resetpassbutton' type='submit' name='resetpass' value='RESET PASS'></td>
	</tr>
	
	</table>
	</form>";
	}
	else
		echo "<font color='#456'>Please login to access this page.</font><a href='./login.php'>login here</a>";
	
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
	<title>Reset Your Password-Movie Mania</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	
	
	
</body>
</html>