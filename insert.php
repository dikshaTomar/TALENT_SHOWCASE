<html>

<body>
           <?php
	$host='localhost:1234';
	$user='root';
	$pass='12345';
	$db='db1';
	$conn=mysqli_connect($host, $user, $pass, $db);


/*
    $sql="INSERT INTO table1 (First Name,Last Name,email,phonenumber,gender,country,day,month,year,address,address1,Landmark,city,state,Postal code,) VALUES('$_POST[First Name]','$_POST[Last Name]','$_POST[email]','$_POST[phonenumber]''$_POST[gender]','$_POST[country]''$_POST[day]','$_POST[month]','$_POST[year]','$_POST[address]','$_POST[address1]','$_POST[Landmark]','$_POST[city]','$_POST[state]','$_POST[Postal code]',)";

    First Name, Last Name,email, phonenumber, gender, country,day,month,year,address,address1,Landmark,city,state,Postal code,
*/
   
        
$order = "INSERT INTO table1

        (FirstName,LastName)

        VALUES

        ('$FirstName',

        '$LastName')";


$result = mysql_query($conn,$order);

if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data is fail");

}
?>






</body>

</html>




