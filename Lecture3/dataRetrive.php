<html>
<head> 
	<title>Lecture 3 php</title>
</head>

<body>

<table border='2'>
<tr>
	<th>FirstName</th><th>LastName</th><th>Age</th>
</tr>
	<?php
		$serverName = "localhost" ;
		$userName = "root" ;
		$password = "" ;
		$databaseName = "myDatabase7" ;
		
		$conn = mysqli_connect($serverName, $userName, $password, $databaseName);
		
		if(!$conn){
			die("Connection Failed" . mysqli_connect_error());
		}
		
		$sql = "SELECT * FROM person WHERE age>=22 " ;
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				print "<tr>" ;
				echo  "<td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>" . $row["age"] . "</td>" ;
				echo "</tr>" ;
			}
		}
		else{
			echo "No data" ;
		}
		
		echo "</table>" ;
		
		mysqli_close($conn) ;
	?>
</body>
</html>