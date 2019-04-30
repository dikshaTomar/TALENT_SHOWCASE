<?php
		$host = 'localhost:3306';
		$user = 'root';
		$pass = '12345';
		$db = 'stu';
		$conn = mysqli_connect($host, $user, $pass, $db);
		$sql = "Select * From student";
		$val = mysqli_query($conn, $sql);
		if(mysqli_num_rows($val)>0)
		{
			while($row = mysqli_fetch_assoc($val))
			{
				echo "Name: <br><hr>";
				echo "roll:  <br>";
				echo "class: <br><hr>";
			}
		}
		mysqli_close($conn);
?>
