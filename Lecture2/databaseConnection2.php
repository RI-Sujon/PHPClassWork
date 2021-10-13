<?php
	$servername = "localhost" ;
	$username = "root" ;
	$password = "" ;
	$dbName = "myDatabase7" ;
	
	$conn = mysqli_connect($servername, $username, $password, $dbName);
	
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected Successfully <br><br>" ;
	
	$sql = "CREATE Table person(
	FirstName varchar(16),
	LastName varchar(16),
	age int
	)" ;
	
	if(mysqli_query($conn, $sql)){
		print "Table person also created successfully <br>" ;
	}
	else{
		echo "Error creating table:" . mysqli_error($conn) ;
	}
	
	
	mysqli_close($conn) ;
	
?>