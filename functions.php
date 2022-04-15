<?php
include("mysql.php");
function errormissing ($name,$email,$pwd) {
    if (empty($name) || empty($email) || empty($pwd)){
        
        return true;
    }
    else 
        return false;

}
function nametaken($conn,$name){
    $query = "SELECT * FROM users WHERE name = '$name'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        
        return true;
    }else{
        
        return false;
    }

}
function invalidemail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}
function adduser($conn,$name,$email,$pwd) {
    $query = "INSERT INTO users (id, name, email,pass) VALUES ('','$name','$email','$pwd');";
    $result = mysqli_query($conn, $query);
    echo "User added";

}
function logincorrect($conn,$lname,$lpwd) {
    $query = "SELECT * from users where name = '$lname' AND pass= '$lpwd'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        
        return true;
    }else{
        
        return false;
    }
}
