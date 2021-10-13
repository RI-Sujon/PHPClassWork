
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
		$x = $_POST["password"] ;
		$y = $_POST["re_password"] ;
		
		
		if($x==$y && $x!=""){
			
			$sql = "
			SELECT * FROM person
			WHERE username = '$userName'
			" ;
			
			$result = mysqli_query($conn, $sql) ;
			
			if(mysqli_num_rows($result)>0){
				echo "username already Exists<br/><br/>" ;
				echo "<a href='signUp.html'>BACK</a><br/><br/>" ;
				echo "<a href='signIn.html'>Go To Sign In Page</a>" ;
			}else{
				$sql2 = "
				INSERT INTO person(username, password)
				VALUES ('$userName', '$x')  
				" ;
			
				if(mysqli_query($conn, $sql2)){
					$_SESSION['Name'] = $userName ;
					header('Location:HomePage.php');
				}
				else{
					echo "error: " . mysqli_error("conn") ;
				}		
			}
		}
		else{
			echo "Password is not same or password should not be empty<br/><br/>" ;
			echo "<a href='signUp.html'>BACK</a>" ;
			
		}
		
		mysqli_close($conn) ;
	?>