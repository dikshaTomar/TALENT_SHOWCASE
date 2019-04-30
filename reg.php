<?php
session_start();
$conn=mysqli_connect("localhost","user","","db1");
if(isset($POST['signbutton']))
{
	$FirstName=mysqli_escape_string($conn,$_POST['FirstName']);
    $LastName=mysqli_escape_string($conn,$_POST['LastName']);
    $order = "INSERT INTO table1 (FirstName,LastName) VALUES('$FirstName','$LastName')";
    $result = mysqli_query($conn,$order);
    header("location:home.php");
        header("location:sigup.php");
    }
}	
?>
