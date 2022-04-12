<html>
 <head>
  <title>Sig in</title>
 </head>
 <body>
 <?php 
 include("mysql.php");
 ?>
 <h1>Sig in</h1>
<form method="post">
  Name: <input type="text" method ="POST" name="name" value="Put your name"/>
  <br>
  Email: <input type="text" method ="POST" name="email" value="Put your email"/>
  <br>
  Password: <input type="password" method ="POST" name="pwd" value="Put your password"/>
  <br>
  <button type="submit" name="submit">Login</button>
</form>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $query = "INSERT INTO users (name, pass, email) VALUES ('$name', '$pwd', '$email')";
            $result = mysqli_query($conn, $query);
            echo($query);
            echo($result);
    }
 ?>
 </body>
</html>