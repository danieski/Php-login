<?php
include("mysql.php");
include("functions.php");

if (isset($_POST["send"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    echo("It works");
    echo($name);
    echo($email);
    echo($pwd);
    echo nametaken($conn,$name);
    
    if (errormissing($name ,$email ,$pwd) !== false){
        header("location: signup.php?emptyfield");
        exit;
    }
    else if (nametaken($conn,$name) !== false){
        header("location: signup.php?nametaken");
        exit;
    }
    else if (invalidemail($email) !== false){
        header("location: signup.php?invalidemail");
        exit;
    }
    else { 
        adduser($conn,$name,$email,$pwd);
        header("location: signup.php?registered");
        exit;
    } 
}
else {
    header("location:signup.php");
}