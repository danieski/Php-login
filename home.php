<html>
 <head>
  <title>Prueba de PHP</title>
  <link rel="stylesheet" href="style.css">
  
 </head>
 <body>
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
</header>


</html>
</body>