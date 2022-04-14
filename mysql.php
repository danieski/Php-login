<?php

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "dani";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
    //echo "Connection to MySQL successful!";
}