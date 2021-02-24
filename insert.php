<?php

session_start();
$username = $_SESSION['username'];
$msg = $_REQUEST['msg'];

$con = mysql_connect('localhost','root','');
mysql_select_db('newdb',$con);

mysql_query("INSERT INTO logs (`username` , `msg`) VALUES ('$username','$msg')");

$result1 = mysql_query("SELECT * FROM logs ORDER by id DESC");

while($extract = mysql_fetch_array($result1)){
		echo "<span class='uname'>" . $extract['username'] . "</span>: <span class='msg'>" . $extract['msg'] . "</span><br>";
	}




?>