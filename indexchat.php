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


<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
	
}

?>





<html>
<head>
	<meta charset="UTF-8">
	<title>Movies-Movie Mania</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Chat Box</title>
<link rel="stylesheet" type="text/css" href="chat.css" />

<style>
#chatbox{
position:relative;
color:white;

}



.uName{
		color:#587;
		font-weight:bold;
		font-size:15px;
		font-family:Verdana, Geneva, sans-serif;
	}

.msg{
		color:#FFF;
		
		font-size:15px;
		font-family:Georgia, "Times New Roman", Times, serif;
	}

</style>
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>

<script>

function submitChat(){
		
		if(form1.msg.value == '' ){
				alert('Enter Your Message');
				return;
			}
			
			$('#imageload').show();
		
			var msg = form1.msg.value;
			
			var xmlhttp = new XMLHttpRequest();
			
			xmlhttp.onreadystatechange = function(){
					if(xmlhttp.readyState==4&&xmlhttp.status==200){
							document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
							$('#imageload').hide();
							
						}
				}
			xmlhttp.open('GET','insert.php?&msg='+msg,true);
			xmlhttp.send();
	}
	
	$(document).ready(function(e) {
        $.ajaxSetup({cache:false});
		setInterval(function() {$('#chatlogs').load('logs.php');}, 2000);
    });

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
				<li >
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
				<li class="selected">
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
	

	
	
	
	
	
	
	
	
	
	<div id="chatbox">
		
<br/><br/>		
		
<form name="form1" >
<table border = "1" align="center" style="#790: red;border-radius:7px;-moz-border-radius:7px;-webkit-border-radius:7px";>
<tr bgcolor="#790" >
<td >Your Chat Name </td><td align="center" valign="middle"> <b> <?php echo $_SESSION['username']; ?></b></td>
</tr>

<tr bgcolor="#790">
<td align="center" valign="middle">
Your Message <br /></td>
<td>
<textarea name="msg"  style="width:200px; height:70px " ></textarea></td>

</tr>

<tr>
<td colspan="2">
<a href="#" onclick="submitChat()" class="button">Send</a><br /></td>
</tr>
<tr>
<td colspan="2">
<a href="logout.php">Logout</a></td>
</tr>

</table>

</form>
<div id="imageload" style="display:none;">
<img src="1-0.gif" />
</div>
<br/><br/>
<div id="chatlogs" style="width:100%; text-align:center">
LOADING CHATLOGS PLEASE WAIT... <img src="1-0.gif" />
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