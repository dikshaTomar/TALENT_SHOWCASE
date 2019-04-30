
            <?php
            session_start();
           /* $host='localhost:1234';
            $user='root';
            $pass='12345';
            $db='db1'; */
            $conn=mysqli_connect("localhost","user","","db1");
           if(isset($_POST['logbutton']))
           {
                $FirstName=mysqli_escape_string($conn,$_POST['FirstName']);
                $password=mysqli_escape_string($conn,$_POST['password']);
                $order = "SELECT FirstName,password FROM  table1 WHERE FirstName='$FirstName' AND password='$password'";
                $res=mysqli_query($conn,$order);
                if(mysqli_num_rows($res)==1)
                {
                  header("location:loghome.php");
                }
                else
                {
                    header("location:loghome.php");
                }
           }
           ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: "C:\Users\ANANYA\Desktop\duplicate\bgbg.jpg"}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.login {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.bg{
       background-image: url("bgbg10.svg");
       background-repeat: no-repeat;
      
  height: 100%;
  
  background-position: center;
  background-size: cover;
    }
</style>
</head>
<body>
<div class="bg">
<h2>Login Form</h2>

<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="loginimg.jpg" alt="Login" class="avatar" width="30%" height="40%">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="FirstName" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        <input type="submit" name="logbutton" value="Submit">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>
</div>
</body>
</html>
