<?php 
  include_once("../function/function.php");

  if(empty($_SESSION['loginSession'])){
      header('location:../views/login.php');
  }

  include_once("../layouts/header.php");
  include_once("../layouts/nav_loged.php");
?>

<div class="admin-content">
    <section class="sidebar">
        <ul class="nav-bar">
            <li><a href="#"><i class='fas fa-tachometer-alt' style='font-size:20px'></i>&nbsp;&nbsp;Dashboard</a></li>
            <li><a href="admin/all_user.php"><i class='fas fa-user-alt' style='font-size:20px'></i>&nbsp;&nbsp;Users</a></li>
            <li><a href="#"><i class='fas fa-water' style='font-size:20px'></i>&nbsp;&nbsp;Water Bills</a></li>
            <li><a href="#"><i class='fas fa-lightbulb' style='font-size:20px'></i>&nbsp;&nbsp;Electicity Bills</a></li>
            <li><a href="#"><i class='fas fa-phone-alt' style='font-size:20px'></i>&nbsp;&nbsp;Telephone Bills</a></li>

        </ul>

    </section>
    <section class="admin-panel">
        <div class="container-fluid">
          <h1 class="display-4">Welcome to Dashboard</h1>
          <hr>

          <div class="row">
          <h3>All Active User Rolls</h3>
            <div class="col-md-3">
              <div class="card bg-primary text-white">
                <div class="card-body">
                  <h4><i class='fas fa-users' style='font-size:40px'></i>&nbsp;Users</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php count_users(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <h4><i class='fas fa-user-tie' style='font-size:40px'></i>&nbsp;Admins</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php count_admins(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-info text-white">
                <div class="card-body">
                  <h4><i class='fas fa-user-tag' style='font-size:40px'></i>&nbsp;Staff</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php count_staff(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-warning text-white">
                <div class="card-body">
                  <h4><i class='fas fa-user-alt' style='font-size:40px'></i>&nbsp;Employeers</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php count_emp(); ?></b>
                  </h5>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
          <h3>All Deactive User Rolls</h3>
            <div class="col-md-3">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h4><i class='fas fa-users' style='font-size:40px'></i>&nbsp;Users</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php count_users(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h4><i class='fas fa-user-tie' style='font-size:40px'></i>&nbsp;Admins</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php count_admins(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h4><i class='fas fa-user-tag' style='font-size:40px'></i>&nbsp;Staff</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php count_staff(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h4><i class='fas fa-user-alt' style='font-size:40px'></i>&nbsp;Employeers</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php count_emp(); ?></b>
                  </h5>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
          <h3>All Paid Bills</h3>
            <div class="col-md-3">
              <div class="card bg-primary text-white">
                <div class="card-body">
                  <h4><i class='fas fa-file' style='font-size:40px'></i>&nbsp;Bills</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php all_bills(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-warning text-white">
                <div class="card-body">
                  <h4><i class='fas fa-water' style='font-size:40px'></i>&nbsp;Water</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php water_bills(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <h4><i class='fas fa-lightbulb' style='font-size:40px'></i>&nbsp;Electicity</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php elec_bills(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-info text-white">
                <div class="card-body">
                  <h4><i class='fas fa-phone-alt' style='font-size:40px'></i>&nbsp;Telephone</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php tele_bills(); ?></b>
                  </h5>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
          <h3>All Unpaid Bills</h3>
            <div class="col-md-3">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h4><i class='fas fa-file' style='font-size:40px'></i>&nbsp;Bills</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php all_bills(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h4><i class='fas fa-water' style='font-size:40px'></i>&nbsp;Water</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php water_bills(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h4><i class='fas fa-lightbulb' style='font-size:40px'></i>&nbsp;Electicity</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php elec_bills(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <h4><i class='fas fa-phone-alt' style='font-size:40px'></i>&nbsp;Telephone</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php tele_bills(); ?></b>
                  </h5>
                </div>
              </div>
            </div>
          </div>        
    </section>
</div>
