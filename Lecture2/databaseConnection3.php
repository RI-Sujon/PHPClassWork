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
	
	$sql = "INSERT INTO person( FirstName, LastName, age)
			VALUES ('Sujon','Hossain' ,'23')" ;
	
	if(mysqli_query($conn, $sql)){
		print "data inserted successfully <br>" ;
	}
	else{
		echo "Error creating table:" . mysqli_error($conn) ;
	}
	
	
	mysqli_close($conn) ;
	
?>