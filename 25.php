<?php
		$host = 'localhost:3306';
		$user = 'root';
		$pass = '';
		$db = 'student';
		$conn = mysqli_connect($host, $user, $pass, $db);
		$sql = "Select * From Student1";
		$val = mysqli_query($conn, $sql);
		if(mysqli_num_rows($val)>0)
		{
			while($row = mysqli_fetch_assoc($val))
			{
				echo "Id: <br><hr>";
				echo "Name:  <br>";
				echo "Contact:  <br><hr>";
			}
		}
		mysqli_close($conn);
?>
