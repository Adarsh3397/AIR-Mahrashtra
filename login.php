<?php
session_start();
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['login_btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password=md5($password);
       $sql="select * from users where username='$username' And password='$password'";
        $result=mysqli_query($db,$sql);
       if(mysqli_num_rows($result) ==1){
           $_session['message']="You are now Logged in ";
           $_session['username']=$username;
           header("location: home.php");
       }else{
           $_SESSION['message']="Username and pasword do not match";
        
       }
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css"
</head>
<body bgcolor=lightblue>
     <div class="ab">
    <a class="abc" href="login.php">Login</a>   
    <a class="abc" href="">Links</a>
    <a class="abc" href="">Services</a>         
          <a class="abc" href="About.html">About</a>      
        <a class="abc" href="index.php">Home</a>

  </div>
<div class="header">
    <h1>Login</h1>
    </div>
     <?php 
    if(isset($_SESSION['message'])){
    echo "<div id='error_msg'>"
        .$_SESSION['message']."</div>";
        unset($_SESSION['message']);
    }
    ?>
<form method="post" action="login.php">
    <table>
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username" class="textInput"</td>
        </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="password" class="textInput"</td>
        </tr>
        <tr>
        <td></td>
        <td><input type="Submit" name="login_btn" class="button1" value="Login"</td>
        </tr>
    </table>
    </form>
<center>
   <h3> New user? then </h3> <a href="register.php"><h3>Register</h3></a>
    </center>
</body>
</html>