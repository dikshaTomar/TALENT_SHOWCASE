<?php
$link=mysqli_connect("localhost","root","","student");
$sql="Select * from student1";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
		echo"<table border=1>";
		echo"<tr>";
		echo"<th>id</th>";
		echo"<th>name</th>";
		echo"<th>contact</th>";
		echo"</tr>";
			while($row=mysqli_fetch_array($result))
			{
				echo"<tr>";
				echo"<td>".$row['id']."</td>";
				echo"<td>".$row['name']."</td>";
				echo"<td>".$row['contact']."</td>";
				echo"</tr>";
			}
	echo"</table>";
	mysqli_free_result($result);
	}
	else
	{
		echo "no records";
	}
}else
	{	
	echo"error";
	mysqli_error($link);
	}
	mysqli_close($link);
?>