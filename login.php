<html>
 <head>
  <title>Prueba de PHP</title>
  <link rel="stylesheet" href="style.css">
 </head>
 
 <?php 
 require_once("mysql.php");



 ?>
 <header>
 <h1>Log in</h1>
 <button onclick="window.location.href='/signup.php'">Sigin</button>
 
</header>

<body>
 <div>
<form action=login.inc.php method="post">
  Name: <input type="text" method ="POST" name="lname"/>
  <br>
  Password: <input type="password" method ="POST" name="lpwd"/>
  <br>
  <button type="submit" name="submit">Login</button>
</form>


<?php

   $query = $_SERVER['QUERY_STRING'];
    if ($query == "logincorrect"){
      header("Location: home.php");
    }
    else if ($query == "weird"){
      echo "<p>Bad login</p>";
    }
?>
</div>
 </body>
</html>