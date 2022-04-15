<html>
 <head>
  <title>Prueba de PHP</title>
  <link rel="stylesheet" href="style.css">
  
 </head>
 
<?php 
    session_start();
    include("mysql.php");
    
if(isset($_POST['submit'])){
   
    if(mysqli_num_rows($result) > 0){
        echo("<br><h1>Login successful</h1>");
    }else{
        header("Location: login.php");
    }
}

?>
<header>
    <h1>Welcome <?php echo $_SESSION['lname']?> </h1>
   <button onclick="window.location.href='/logout.php'">Log out</button>
   <button onclick="window.location.href='/home.php?list'">User list</button>
   
</header>
<body>
<div class=form>
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
  </tr>
  <?php 
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result -> num_rows > 0){
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["pass"] . "</td></tr>";
        }
    }
    else{
        echo "No results";
    }

    ?>
</table>
</div>
</body>
</html>