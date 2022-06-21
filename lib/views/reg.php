<?php include_once("../layouts/header.php"); ?>
<?php include_once("../layouts/nav_reg.php"); ?>

<div class="reg-content">
    <div class="reg-content-title">
        Register
    </div>
    <div class="reg-content-body">
        <div class="reg-box">
            <div class="reg-box-header">
                Register
            </div>
            <div class="reg-box-body">
                <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="label">Username</div>
                    <input type="text" name="username" id="username" class="login-input" placeholder="Username">

                    <div class="label">Email</div>
                    <input type="email" name="email" id="email" class="login-input" placeholder="Email">
            
                    <div class="label">Password</div>
                    <input type="password" name="password" id="password" class="login-input" placeholder="Password">

                    <div class="label">Confirm Password</div>
                    <input type="password" name="cpassword" id="cpassword" class="login-input" placeholder="Confirm Password">
                </form>
            </div>
        </div>
    </div>
</div>
