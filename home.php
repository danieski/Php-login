<?php
    include("mysql.php");
    echo("it works");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $query = "SELECT * FROM users WHERE name = '$name' AND pass = '$pwd'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        echo("<br><h1>Login successful</h1>");
    }else{
        header("Location: login.php");
    }
}
else{
    echo("Login failed");
}