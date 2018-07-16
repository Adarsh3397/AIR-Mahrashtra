<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if(isset($_POST['reg_button'])){
    if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name =$_POST["name"];
  }
   if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";} 
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
  }
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}

  if (empty($_POST["comment"])) {
    $comment = "Please give feedback";
  } else {
    $comment = $_POST["comment"];
  }
}
$db=mysqli_connect("localhost","root","","feedback")or die("not connected");
$sql = "insert into feed_details(name,email,comment) values ('$name','$email','$comment')";
mysqli_query($db,$sql);
?> 
<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    
    <style>

h1 {
    border: 1px solid powderblue;
    margin: 50px;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]:hover {
    background-color: deepskyblue;
}
.button {
    background-color:deepskyblue; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.error {color: #FF0000;}
</style>
</head>
<body>  
      <div class="ab">
    <a class="abc" href="logout.php">Logout</a>   
    <a class="abc" href="link.html">Links</a>
    <a class="abc" href="r2.html">Services</a>         
          <a class="abc" href="About.html">About</a>      
        <a class="abc" href="home.php">Home</a>
  </div> 
    <div class="header">
<h1>User Suggestion and Feedback</h1></div>
<center><h3><span class="error">* required field.</span></h3></center>
<form method="post" action="welcome.php">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <button class="button button1"  name="reg_button" >Submit</button>
    
    
</form>
</body>
</html>