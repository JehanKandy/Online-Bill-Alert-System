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
            $add_user = "INSERT INTO user_tbl(username,email,pass1,roll,join_date)VALUES('$usernmane','$email','$password','user',NOW())";
            $add_user_result = mysqli_query($con, $add_user);
            header('location:../views/login.php');
        }        
    }  
}

function login_user($login_username,$login_password){
    $con = Connection();

    $check_user = "SELECT * FROM user_tbl WHERE username = '$login_username' && pass1 = '$login_password'";
    $check_user_result = mysqli_query($con, $check_user);
    $check_user_nor = mysqli_num_rows($check_user_result);
    $check_user_row = mysqli_fetch_assoc($check_user_result);

    if($check_user_nor > 0){
        if($login_password != $check_user_row['pass1']){
            return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Password Does not Match</div>&nbsp</center>";
        }else{
            if($check_user_row['roll'] == 'user'){
                setcookie('login',$check_user_row['email'],time()+60*60,'/');
                $_SESSION['loginSession'] = $check_user_row['email'];
                header("location:../routes/user.php");
            }
            elseif($check_user_row['roll'] == 'admin'){
                setcookie('login',$check_user_row['email'],time()+60*60,'/');
                $_SESSION['loginSession'] = $check_user_row['email'];
                header('location:../routes/admin.php');
            }
        }
    }else{
        return "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Recodes not found...!</div>&nbsp</center>";
    }
}
?>
