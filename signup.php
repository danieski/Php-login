<html>
 <head>
  <title>Sig in</title>
  <link rel="stylesheet" href="style.css">
 </head>


<header>
 <?php 
 include("mysql.php");
 ?>
<h1>Sign up</h1>
<button onclick="window.location.href='/login.php'">Login</button>
</header>
<body>
<div>
<form method="post" action=signup.inc.php>
  Name: <input type="text" method="post" name="name" placeholder="Put your name"/>
  <br>
  Email: <input type="text" method="post" name="email" placeholder="Put your email"/>
  <br>
  Password: <input type="password" method="post"  name="pwd" placeholder="Put your password"/>
  <br>
  <button type="submit" name="send" >Register</button>
</form>

<?php

$query = $_SERVER['QUERY_STRING'];
if ($query == "emptyfield"){
  echo "<p>You are missing some fields!</p>";
}
else if ($query == "nametaken"){
  echo "<p>Name taken!</p>";
}
else if ($query == "invalidemail"){
  echo "<p>Invalid email input!</p>";
}
else if ($query == "registered"){
  echo "<p>You have been registered!</p>";
}
?>
</div>


</body>
</html>
