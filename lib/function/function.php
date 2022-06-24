<?php 

use FTP\Connection;
session_start();
include_once("config.php");

function add_user($usernmane, $email, $password, $cpassword){
    $con = Connection();
  
    $check_sql = "SELECT * FROM user_tbl WHERE username = '$usernmane' && email = '$email'";
    $check_reuslt = mysqli_query($con, $check_sql);
    $check_nor = mysqli_num_rows($check_reuslt);

    if($check_nor > 0){
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>User Already Exists..!</div>&nbsp</center>"; 
    }else{
        if($password != $cpassword){
            return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Password Does not Match</div>&nbsp</center>"; 
        }
        else{
            $add_user = "INSERT INTO user_tbl(username,email,pass1,join_date)VALUES('$usernmane','$email','$password',NOW())";
            $add_user_result = mysqli_query($con, $add_user);
            header('location:../views/login.php');
        }        
    }  
}
?>