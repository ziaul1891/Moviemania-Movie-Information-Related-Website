<?php



if(isset($_GET['search_text'])){

$search_text = $_GET['search_text'];

}


if(!empty($search_text)){

if ($con=mysql_connect('localhost','root','')){
	if($con=mysql_select_db('newdb')){
	
		
		
		
		
		
		//$query = "SELECT ID,FirstName,LastName FROM Persons WHERE FirstName  
		//LIKE '%".mysql_real_escape_string($search_text)."%' ORDER BY FirstName";
		
		//$query = "SELECT Id,Name FROM Romantic WHERE Name  
		//LIKE '".mysql_real_escape_string($search_text)."%'";
		
		
		$query = "SELECT Id,FirstName,MiddleName,LastName FROM celebs WHERE FirstName  
		LIKE '".($search_text)."%' OR LastName LIKE '".($search_text)."%'
		OR MiddleName LIKE '".($search_text)."%'
		OR CONCAT(FirstName,MiddleName,LastName) LIKE '".($search_text)."%' ";
		
		
		$query_run = mysql_query($query) ;
		
		
		
		while($query_row = mysql_fetch_array($query_run)){
			
			
			$id = $query_row['Id'];
			$name = $query_row['FirstName'];
			$name1 = $query_row['MiddleName'];
			$name2 = $query_row['LastName'];
			


			//echo "<font size='6'><a href='resultromantic.php?id=$id'>$name</a><br /></font>";
			echo "<font size='4'><a href='resultcelebs.php?id=$id'>$name $name1 $name2<br /></a>"."</font>";
			
			
			
	
		}
		
		
		
		
	}
}

}




?>