<html>
<head> 
	<title>Lecture 3 php</title>
</head>

<body>
	<?php
		$serverName = "localhost" ;
		$userName = "root" ;
		$password = "" ;
		$databaseName = "myDatabase7" ;
		
		$conn = mysqli_connect($serverName, $userName, $password, $databaseName);
		
		if(!$conn){
			die("Connection Failed" . mysqli_connect_error());
		}
		
		$sql = "
		INSERT INTO person(FirstName, LastName, Age)
		VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[age]')  
		" ;
		
		if(mysqli_query($conn, $sql)){
			echo "added successfully" ;
		}
		else{
			echo "error: " . mysqli_error("conn") ;
		}
		
		mysqli_close($conn) ;
	?>
</body>
</html>