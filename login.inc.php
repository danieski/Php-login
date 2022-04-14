
<?php
session_start();
include("mysql.php");
include("functions.php");
$lname = $_POST["lname"];
$lpwd = $_POST["lpwd"];
$_SESSION["lname"] = $lname;
   if (isset ($_POST["submit"])){
     if (logincorrect($conn,$lname,$lpwd) !== false){
      echo "Login sucefully";
      header("Location: login.php?logincorrect");
     }

    else {
        header("Location: login.php?weird");
    }
  }