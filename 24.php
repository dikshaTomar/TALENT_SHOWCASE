<?php
	$host='localhost:3306';
	$user='root';
	$pass='12345';
	$db='stu';
	$conn=mysqli_connect($host, $user, $pass, $db);
	$sql="update student set contact=98232452 where id=1001";
		if(mysqli_query($conn,$sql))
			echo "updated successfully";
		else
			echo "sorry";
		mysqli_close($conn);
?>
	
	






