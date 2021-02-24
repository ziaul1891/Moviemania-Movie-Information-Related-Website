<?php
error_reporting(E_ALL^E_NOTICE);

error_reporting(0);

session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>








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
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	
	
	
<script type="text/javascript">

function findmatch(){

	if(window.XMLHttpRequest){
	xmlhttp=new XMLHttpRequest();	

	}else{
	xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
	}
	
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
		
		document.getElementById('results').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','searchbangla.php?search_text='+document.search.search_text.value,true);
	xmlhttp.send();

}
</script>
	
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
	<div id="user">
<?php
if($username && $userid){
		echo "<font color='#3399FF'><b>$username</b></font>, <font color='white'>Click <a href='./logout.php'>Logout   </a>to Logout</font>";
		
	}

	

?>
</div>

	
	
	</br>
	
	<!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=396"><img src="data1/images/movieimagebangla1.jpg" alt="movieimage1" title="movieimage1" id="wows1_0"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=393"><img src="data1/images/movieimagebangla2.jpg" alt="movieimage2" title="movieimage2" id="wows1_1"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=407"><img src="data1/images/movieimagebangla3.jpg" alt="movieimage3" title="movieimage3" id="wows1_2"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=402"><img src="data1/images/movieimagebangla4.jpg" alt="movieimage4" title="movieimage4" id="wows1_3"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=395"><img src="data1/images/movieimagebangla5.jpg" alt="movieimage5" title="movieimage5" id="wows1_4"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=398"><img src="data1/images/movieimagebangla6.jpg" alt="movieimage6" title="movieimage6" id="wows1_5"/></a></li>
<li><a href="http://localhost/onlyrating/resulthorror.php?id=392"><img src="data1/images/movieimagebangla7.jpg" alt="movieimage7" title="movieimage7" id="wows1_6"/></a></li>
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
	
	
	
	<div id="category2" class="categorized2">
	
	<ul id="moviecategory">
				
				<li >
					<a href="">Bangla</a>
				</li>
				
				
			</ul>
			
			
		<div id = "movielist">	
		
		<?php
$con=mysqli_connect("localhost","root","","newdb");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if ($con=mysql_connect('localhost','root','')){
	if($con=mysql_select_db('newdb')){
	
		
		
		
		
		
		//$query = "SELECT ID,FirstName,LastName FROM Persons WHERE FirstName  
		//LIKE '%".mysql_real_escape_string($search_text)."%' ORDER BY FirstName";
		
		
		//$query = "SELECT ID, id * RAND(rand()) AS random_no, FirstName FROM Persons2 ORDER BY random_no asc limit 3";
		
		$query = "SELECT * from (
   SELECT ID,FirstName,MiddleName,LastName  FROM horror 
	WHERE Category='Bangla'
   ORDER BY FirstName asc LIMIT 50
) T ORDER BY RAND() 
LIMIT 15";
		
		
		$query_run = mysql_query($query);
		
		
		
		
		while($query_row = mysql_fetch_array($query_run)){
			
			
			$id = $query_row['ID'];
			$name = $query_row['FirstName'];
			$name1 = $query_row['MiddleName'];
			$name2 = $query_row['LastName'];
			


			//echo "<a href='anotherpage.php?id=$id'>$name</a><br />";
			echo "<font size=3>" . "<a href='resulthorror.php?id=$id'>$name $name1 $name2<br /></a>" . "</font>";
			
			
	
		}
		
		
		
		
	}
}



echo "<a href='./banglaall.php'>(more...)</a>";
?>
<h3>Refresh the page for 15 more random Bangla movies or search from below</h3>

</div>	
	
	</div>
	
	
	
	
	<div id="category" class="categorized">
		
		
		<div>
		<br/><br/>	
		
		<div id="search">
	<form id="search" name="search">
	Type a name to search: <br/><br/>
	<input type="text" size="30"  name="search_text"  placeholder="Search..." onkeyup="findmatch();">
	<br/><br/><br/>		
	<div id="results"></div>
	
	</form>	
	
	</div>
	<br/><br/><br/><br/><br/><br/>			
			
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