<?php include_once("../layouts/header.php"); ?>
<?php include_once("../layouts/nav_reg.php"); ?>

<div class="reg-content">
    <div class="reg-content-title">
    <i class='fas fa-user-plus'></i>&nbsp;&nbsp;Register
    </div>
    <div class="reg-content-body">
        <div class="reg-box">
            <div class="reg-box-header">
                Register
            </div>
            <div class="reg-box-body">
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="reg-label">Username</div>
                    <input type="text" name="username" id="username" class="login-input" placeholder="Username">

                    <div class="reg-label">Email</div>
                    <input type="email" name="email" id="email" class="login-input" placeholder="Email">
            
                    <div class="reg-label">Password</div>
                    <input type="password" name="password" id="password" class="login-input" placeholder="Password">

                    <div class="reg-label">Confirm Password</div>
                    <input type="password" name="cpassword" id="cpassword" class="login-input" placeholder="Confirm Password">

                    <input type="reset" value="Clear" class="reset-btn">&nbsp;
                    <input type="submit" value="Register" name="register" class="reg-btn">
                </form>
            </div>
        </div>
    </div>
</div>
