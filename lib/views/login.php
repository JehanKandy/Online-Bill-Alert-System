<?php include_once("../layouts/header.php"); ?>
<?php include_once("../layouts/nav_login.php"); ?>

<div class="login-content">
    <div class="login-content-title">
        <i class='fas fa-user-alt' ></i> &nbsp;&nbsp;Login Here
    </div>
    <div class="login-content-body">
        <div class="login-box">
            <div class="login-box-header">
            login
            </div>
            <div class="login-box-body">       
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="label">Username</div>
                    <input type="text" name="username" id="username" class="login-input" placeholder="Username" required>

                    <div class="label">Password</div>
                    <input type="password" name="password" id="password" class="login-input" placeholder="Password" required>
                    <br><br>
                    <input type="submit" value="Login" class="login-btn" name="login"> 
                </form> 
            </div>
        </div>           
    </div>

</div>
