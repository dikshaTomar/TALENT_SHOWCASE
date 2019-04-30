

            <?php
            session_start();
           $host='localhost:1234';
            $user='root';
            $pass='12345';
            $db='db1'; 
            $conn=mysqli_connect("localhost","user","","db1");
           if(isset($_POST['signbutton']))
           {
                $FirstName=mysqli_escape_string($conn,$_POST['FirstName']);
                $LastName=mysqli_escape_string($conn,$_POST['LastName']);
                $password=mysqli_escape_string($conn,$_POST['password']);
                $password2=mysqli_escape_string($conn,$_POST['password2']);
                if($password==$password2)
                {
                    $order = "INSERT INTO table1 (FirstName,LastName,password) VALUES('$FirstName','$LastName','$password')";
                    mysqli_query($conn,$order);
                    header("location:homepage.php");
                }
                else
                {
                    header("location:signup.php");
                }
           }
   
/*
    $sql="INSERT INTO table1 (First Name,Last Name,email,phonenumber,gender,country,day,month,year,address,address1,Landmark,city,state,Postal code,) VALUES('$_POST[First Name]','$_POST[Last Name]','$_POST[email]','$_POST[phonenumber]''$_POST[gender]','$_POST[country]''$_POST[day]','$_POST[month]','$_POST[year]','$_POST[address]','$_POST[address1]','$_POST[Landmark]','$_POST[city]','$_POST[state]','$_POST[Postal code]',)";

    First Name, Last Name,email, phonenumber, gender, country,day,month,year,address,address1,Landmark,city,state,Postal code,
*/
   
        

/*<if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data is fail");

}*/
?>













<!DOCTYPE html>
<html>
<head>
    <body class="img" > 
<style>    
         input[type=text], select {
    width: 1000%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
 input[type=email], select {
    width: 1000%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
 input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
        input[type=number], select {
    width: 100%;
    padding: 12px 20px;
     margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
        input[list=gender], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
        input[list=country], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
        
        input[type=submit] {
    width: 100%;
    background-color:"blue";
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor:pointer;

}

.container {
    width: 500px;
    clear: both;
    }

.container input 
    {
                
    clear: both;
    }
    body
    {
        all: center; 
    } 
.img
    {
        height: 100%;
        background-position: centre;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .bg{
       background-image: url("bgbg1.jpg");
       background-repeat: no-repeat;
      
  height: 100%;
  
  background-position: center;
  background-size: cover;
    }
 </style>   
  <div class="bg"> 
<div class="container" >   
<table style="width:250%>

<br>


<form method="post" action="homepage.php">
<tr>
     <center >
        <td>
    <h2 style="font-family: Castellar"; id="Categories" >Sign Up to Explore..</h2></center> </tr>
   </td> <tr>
    <td >Name<s>*</s></td>
    <td colspan="6"><input type="text" name="FirstName"  placeholder="FirstName"></td>
    <td colspan="6"><input type="text" name="LastName"  placeholder="LastName" ></td>
    <br>
    </tr>
 <tr>
     <td>E-Mail Address<s>*</s></td>
     <td colspan="6"><input align="left" type="text" name="lastname" placeholder="Mail@gmail.com"></td>
    <br>
 </tr>
<tr>
    <td>Phone Number<s>*</s></td>
    <td colspan="6"><input type="number"   placeholder="Phone Number" name="phonenumber" ></td>
 <br>
</tr>
<tr>
    <td>Gender<s>*</s></td>
     <td colspan="3"><input list="gender" name="gender"  placeholder="Gender">
        <datalist id="gender"  >
            <option selected hidden value=""></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </datalist></td>
 <br><br>
</tr>
 <tr>
     <td>Citizen<s>*</s></td>
      <td colspan="3"><input list="country" name="country" placeholder="Select Country" >
        <datalist id="country"  >
            <option selected hidden value=" "></option>
        <option value="India">
        <option value="U.S.A">
        </datalist></td>
 <br>
</tr>
<tr>
    <td>Date Of Birth<s>*</s></td>
    <td><input type="number" max="31" placeholder="Day" name="day" ></td>
    <td><input type="number" max="12"  placeholder="Month" name="month" ></td>
    <td><input type="number" max="2999" placeholder="Year" name="year" ></td>
 <br><br>
</tr>
<tr>
    <td>Address<s>*</s>
        <td><input type="text"  placeholder="Street Address" name="address" ></td>
        <td><input type="text"   placeholder="Street Line 2" name="address1" ><br></td>
 <tr >
   <td></td>
    <td><input type="text"  placeholder="Landmark" name="Landmark" ></td>
    <td><input type="text"   placeholder="City" name="city"></td><br>
</tr> 
<tr>
   <td></td>
    <td><input type="text"  placeholder="State/Province" name="state" ></td>
    <td><input type="text"   placeholder="Postal/Zip Code" name="Postal code" ></td><br>
</tr>
<tr>
    <td>Pssword<s>*</s>
    <td colspan="3"><input type="password"  name="password"  placeholder="Password"required="please fill."></td><br>
</tr>
<tr>/
    <td>Confirm Password<s>*</s>
    <td colspan="3"><input type="password" name="password2" placeholder="Confirm Password" required="please fill."></td><br>
</tr>
<tr>
    <th><input type="submit" value="Submit" name="signbutton" style="background-color: blue" ></th>

    </tr>
 </form>
 </table>
</div>
</div>
</body>
</head>
</html>
    