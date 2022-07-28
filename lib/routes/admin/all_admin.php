<?php
    include_once("../../function/function.php");
    if(empty($_SESSION['loginSession'])){
        header('location:../../views/login.php');
    }

    include_once("../../layouts/header.php");
    include_once("../../layouts/nav_loged_admin.php");


?>
<link rel="stylesheet" href="../../css/style.css">
<div class="admin-content">
<section id="sidebar">
        <ul class="nav-bar">
            <li><a href="../admin.php"><i class='fas fa-tachometer-alt' style='font-size:20px'></i>&nbsp;&nbsp;Dashboard</a></li>
            <li><a href="all_user.php"><i class='fas fa-users' style='font-size:20px'></i>&nbsp;&nbsp;Users</a></li>
            <li><a href="all_admin.php"><i class='fas fa-user-tie' style='font-size:20px'></i>&nbsp;&nbsp;Admins</a></li>
            <li><a href="all_staff.php"><i class='fas fa-user-tag' style='font-size:20px'></i>&nbsp;&nbsp;Staff</a></li>
            <li><a href="all_emp.php"><i class='fas fa-user-alt' style='font-size:20px'></i>&nbsp;&nbsp;Employers</a></li>
            <li><a href="all_watar_bills.php"><i class='fas fa-water' style='font-size:20px'></i>&nbsp;&nbsp;Water Bills</a></li>
            <li><a href="all_elec_bills.php"><i class='fas fa-lightbulb' style='font-size:20px'></i>&nbsp;&nbsp;Electicity Bills</a></li>
            <li><a href="all_tele_bills.php"><i class='fas fa-phone-alt' style='font-size:20px'></i>&nbsp;&nbsp;Telephone Bills</a></li>
            <li><a href="admin_account.php"><i class='fas fa-phone-alt' style='font-size:20px'></i>&nbsp;&nbsp;My Account</a></li>
        </ul>

    </section>
    <section class="admin-panel">
        <div class="container-fluid">
          <h1 class="display-4">All Admins</h1>
          <hr>

          <div class="row">
          <div class="col-auto" style="width: 490px; margin-top:10px; margin-bottom:50px">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <h4><i class='fas fa-user-graduate' style='font-size:40px'></i>&nbsp;Active Users</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php active_users(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-auto" style="width: 490px; margin-top:10px; margin-bottom:50px">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h4><i class='fas fa-chalkboard-teacher' style='font-size:40px'></i>&nbsp;Deactive Users</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php deactive_users(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <h2>All Users</h2>
            <table class="table table-fluid" id="myTable">
            <thead>
            <tr>
                <th>
                ID
                </th>
                <th>
                Username
                </th>
                <th>
                Email
                </th>
                <th>
                Roll
                </th>
                <th>
                Account Type
                </th>
                <th>
                Join Date
                </th>
                <th>
                Account Status
                </th>
            </tr>
            </thead>
            <tbody>
           <?php //all_admins(); ?>

            </tbody>
            </table>           
         
    </section>
</div>

<script src="../../../js/script.js"></script>
