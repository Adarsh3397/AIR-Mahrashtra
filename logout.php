<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
      <div class="ab">
    <a class="abc" href="login.php">Login</a>   
    <a class="abc" href="">Links</a>
    <a class="abc" href="">Services</a>         
          <a class="abc" href="About.html">About</a>      
        <a class="abc" href="index.php">Home</a>

  </div>
<?php
session_start();
session_destroy();
unset($_SESSION['username']);
echo "<div class='header'>"."<h1>".'You have been logged out Successfully'."</h1>"."</div>";
?><center>
    <h1 ><a href="login.php">Login</a>-Again</h1>
</center>

</body>
</html> 