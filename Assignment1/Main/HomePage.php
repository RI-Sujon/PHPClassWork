<html>
<body>
<?php
	session_start() ;
	if(isset($_SESSION['Name'])){
		echo  $_SESSION['Name']  ;
		echo "<center><h2><u> MY HOME PAGE </u></h2><br><br>" ;
		echo "<font color='green' size='48'> This is<b> " . $_SESSION['Name'] . "<b></font><br/><br/><br/><br/></center>" ;
	}
	else{
		header('Location:signin.html');
	}
?>
	<center>
		<form action="SignOut.php">
			<input type="submit" value="Log out"/> <br/><br/>
		</form>
	</center>
</body>
</html>