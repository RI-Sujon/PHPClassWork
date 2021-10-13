<?php
	$servername = "localhost" ;
	$username = "root" ;
	$password = "" ;
	
	$conn = mysqli_connect($servername, $username, $password);
	
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected Successfully <br><br>" ;
	
	$sql = "CREATE DATABASE myDatabase7" ;
	
	if(mysqli_query($conn, $sql)){
		print "Database also created successfully <br>" ;
	}
	else{
		echo "Error creating database:" . mysqli_error($conn) ;
	}
	
	
	mysqli_close($conn) ;
	
?>