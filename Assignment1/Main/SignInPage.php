<html>
<head> 
	<title>Assignment</title>
</head>

<body>
	<?php
		session_start() ;
	
		$serverName = "localhost" ;
		$userName = "root" ;
		$password = "iit123" ;
		$databaseName = "bsse1012_db" ;
		
		$conn = mysqli_connect($serverName, $userName, $password, $databaseName);
		
		if(!$conn){
			die("Connection Failed" . mysqli_connect_error());
		}
		
		$userName = $_POST["username"] ;
		$password = $_POST["password"] ;
		
		$sql = "
		SELECT * FROM person WHERE username='$userName' AND password='$password'
		" ;
		
		$result = mysqli_query($conn, $sql) ;
		
		if(mysqli_num_rows($result)>0){
			$_SESSION['Name'] = $userName ;
			header('Location:HomePage.php') ;
		}
		else{
			echo "Wrong Password or Have not any account.<br/><br/>" ;
			echo "<a href='signIn.html'>BACK</a><br/><br/>" ;
			echo "<a href='signUp.html'>Go To Sign Up Page</a>" ;
		}		
		
		mysqli_close($conn) ;

	?>
</body>
</html>