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







<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Movies-Movie Mania</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="WOW Slider, slideshow html, bootstrap slider" />
	<meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
	<style>
	#full{
	position:relative;
	top:0px;
	left:10px;
	font-size: 20px;
	font-style:italic
	}
	
	
	#image{

	position:absolute;
	left:620px;
	
	}
	
	
	
	</style>
	
	
	

	
</head>
<body>
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
				<li  class="selected" >
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
	
	
	
	</br>
	
	
	<div id="full">

<?php
$con=mysqli_connect("localhost","root","","newdb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id'];

$result = mysqli_query($con,"SELECT * FROM celebs WHERE id = ".$id);
/*
echo "<table border='1' style='width:300px'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
</tr>";
*/
while($row = mysqli_fetch_array($result)) {

/*	
echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "</tr>";
*/

echo "<br/><br/>" . 
     '<img id = "image" src="data:image/jpeg;base64,'.
      base64_encode($row['Image']).
      '" width="590" height="430">' . "";
echo " <font color='#3399FF' ><b>Name :</b></font><font color='white'> " .$row['FirstName']." ".$row['MiddleName']." ".$row['LastName']."</font><br/><br/><br/>";
echo "<font color='#3399FF' ><b>Born : </b></font><font color='white'>" .$row['Born']."</font><br/><br/><br/>";
echo "<font color='#3399FF' ><b>Role		: </b></font><font color='white'>" .$row['Role']."</font><br/><br/><br/>";
echo "<font color='#3399FF' ><b>Awards		: </b></font><font color='white'>" .$row['Awards']."</font><br/><br/><br/>";
echo "<font color='#3399FF' ><b>Known For		: </b></font><font color='white'>" .$row['KnownFor']."</font><br/><br/><br/><br/>";
echo "<font color='#3399FF' ><b>TradeMarks	: </b><br/><br/><br/></font><font color='white'>" .$row['TradeMarks']."</font><br/><br/><br/><br/>";
echo "<font color='#3399FF' ><b>Trivia	: </b><br/><br/><br/></font><font color='white'>" .$row['Trivia']."</font><br/><br/><br/><br/>";

}

//echo "</table>";





?>
</div>
	

	
	
	
	
</body>
</html>