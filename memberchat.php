<?php
error_reporting(E_ALL^E_NOTICE);

error_reporting(0);

session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

?>




	<?php
	
	if($username && $userid){
		echo "Welcome <b>$username</b>, <a href='./logout.php'>LOGOUT</a>";
		echo "<br /> <a href='./resetpass.php'>RESET PASS </a>";
		header("Location:./indexchat.php"); // redirects
		
	}
	if(!$username && !$userid){
		header('Refresh:2; url=login.php');
		
		
		echo'<p style="font-size:85px ;color:blue;margin-top:105;margin-left:13">Please Login first to view this page</p>';
		
		//echo "<script>setTimeout(\"location.href = './login.php';\",1500);</script>";
	}
		
		
	?>
	


<head>
	
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>	


</body>
</html>