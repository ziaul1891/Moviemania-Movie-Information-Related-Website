<?php
error_reporting(E_ALL^E_NOTICE);

error_reporting(0);

session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];



?>




<?php

mysql_connect("127.0.0.1","root","")or die("Couldn't connect to server");
mysql_select_db("newdb")or die("Couldn't connect to server");
$userid=$_POST['userid'];
$movieid=$_POST['movieid'];
$rating=$_POST['rating'];

/*
$find_data = mysql_query("SELECT *FROM rating where MovieId=$movieid");



while($row = mysql_fetch_assoc($find_data))
{
$current_rating = $row['rating'];
$newrating=$current_rating;
echo "$current_rating <br/>";
}
*/
$sql = mysql_query("INSERT INTO `rating`(`MovieId`, `UserId`,`rating`) 
						VALUES ('$movieid','$userid', '$rating')");



	header("location:resulthorror.php?id=$movieid"); 
	exit;  
?>