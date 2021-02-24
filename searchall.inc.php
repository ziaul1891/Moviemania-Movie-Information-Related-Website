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
		
		
		$query1 = "SELECT Id,FirstName,MiddleName,LastName FROM horror WHERE (FirstName  
		LIKE '".($search_text)."%' OR MiddleName LIKE '".($search_text)."%'
		OR LastName LIKE '".($search_text)."%'
		OR CONCAT(FirstName,MiddleName,LastName) LIKE '".($search_text)."%' ) 
		";
		
	
		
		
		
		$query_run1 = mysql_query($query1) ;
		
		
		
		while($query_row1 = mysql_fetch_array($query_run1)){
			
			
			$id = $query_row1['Id'];
			$name = $query_row1['FirstName'];
			$name1 = $query_row1['MiddleName'];
			$name2 = $query_row1['LastName'];
			


			//echo "<font size='6'><a href='resultromantic.php?id=$id'>$name</a><br /></font>";
			echo"<font size='4'><a href='resulthorror.php?id=$id'>$name $name1 $name2<br /></a>". "</font>";
			
			
			
	
		}
		
		
		
		
	}
}

}




?>