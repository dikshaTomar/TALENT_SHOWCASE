<?php
	$host='localhost:3306';
	$user='root';
	$pass='';
	$db='student';
	$conn=mysqli_connect($host, $user, $pass, $db);
	$sql = "Insert Into Student1 VALUES (1001,'nisha',899236111)";
		if(mysqli_query($conn, $sql))
			echo "Inserted";
		else
			echo "Error";
		
		mysqli_close($conn);

