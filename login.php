<?php
error_reporting(E_ALL^E_NOTICE);

error_reporting(0);

session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>

<div id="user">
<?php
if($username && $userid){
		echo "<font color='#3399FF'><b>$username</b></font>, <font color='white'>Click <a href='./logout.php'>Logout   </a>to Logout</font>";
		
	}

	

?>
</div>


	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul>
				<li >
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
	
	
	<div class="login-form">
<h1>Login</h1>
	<?php
	
	if($username && $userid){
		echo"<font color='#456'>You are already logged in as <b>$username</b>.<a href='./index.php'> click here</a> to go to Homepage</font>";
					
	}
	else{
	
	$form = "<form action ='./login.php' method='post'>
	<table id='tablelogin'>
	<tr>
		<td>Username:</td>
		<td><input type='text' name='user' /></td>
	</tr>
	
	<tr>
		<td>Password:</td>
		<td><input type='password' name='password' /></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input class='login' type='submit' name='loginbtn' value='Login' /></td>
	</tr>
	
	<tr>
		<td><a class = 'registerphp' href='./register.php'>Regsiter Now\t</a> </td>
		<td><a  class = 'forgotpass' href='./forgotpass.php'>Forgot Your Password?</a></td>
	</tr>
	</table>
	</form>";
	
	if($_POST['loginbtn']){
		$user=$_POST['user'];
		$password=$_POST['password'];
		
		if($user){
			if($password){
				//echo "$user - $password <hr /> $form";
				require ("connect.php");
				
				$password = md5(md5("kjfiufj".$password."Fj56fj"));
				
				
				
				
				
				//make sure login info correct
				
				
				$query=mysql_query("SELECT *FROM users WHERE username='$user'");
				$numrows=mysql_num_rows($query);
				if($numrows==1){
					$row = mysql_fetch_assoc($query);
					$dbid = $row['id'];
					$dbuser = $row['username'];
					$dbpass = $row['password'];
					$dbactive = $row['active'];
					
					if($password==$dbpass){
						if($dbactive==1){
							//set session info
							$_SESSION['userid'] = $dbid;
							$_SESSION['username'] = $dbuser;
							
							echo"<font color='#456'>You have logged in as <b>$dbuser</b>.<a href='./index.php'> click here</a> to go to Homepage</font>";
						}
						else
							echo "<font color='#456'>You must activate your account to login. $form</font>";
					}
					else
						echo "<font color='#456'>You did not enter correct password. $form</font>";
				}
				else
					echo "<font color='#456'>The username is incorrect. $form</font>";
				
				
				mysql_close();
			}
			else
				echo "<font color='#456'>You must enter password. $form</font>";
		}
		else
			echo "<font color='#456'>You must enter your username . $form</font>";
	}
	else
		echo $form;
	}
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
	<title>Login-Movie Mania</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	
	
	
</body>
</html>