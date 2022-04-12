<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php 
 include("mysql.php");
 ?>
<form action="home.php" method="post">
  Name: <input type="text" method ="POST" name="name"/>
  <br>
  Password: <input type="password" method ="POST" name="pwd"/>
  <br>
  <button type="submit" name="submit">Login</button>
</form>

 </body>
</html>