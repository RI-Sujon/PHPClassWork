<?php
	$servername = "localhost" ;
	$username = "root" ;
	$password = "" ;
	$databaseName = "bsse1012_db" ;
	
	$conn = mysqli_connect($servername, $username, $password);
	
	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected Successfully <br><br>" ;
	
	$sql = "CREATE DATABASE bsse1012_db" ;
	
	if(mysqli_query($conn, $sql)){
		print "Database also created successfully <br/><br/>" ;
		mysqli_close($conn) ;
		$conn1 = mysqli_connect($servername, $username, $password, $databaseName);
	
		if(!$conn1){
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected Successfully <br><br>" ;

		$sql = "CREATE Table person(
				username varchar(25),
				password varchar(16)
				)" ;

		if(mysqli_query($conn1, $sql)){
			print "person table also created successfully again<br>" ;
		}
		else{
			echo "Error creating table:" . mysqli_error($conn1) ;
		}
		
	}
	else{
		echo "Error creating database:" . mysqli_error($conn1) ;
	}
	
	
	mysqli_close($conn1) ;
	
?>