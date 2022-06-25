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
            <li><a href="#"><i class='fas fa-user-alt' style='font-size:20px'></i>&nbsp;&nbsp;Users</a></li>
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
            <div class="col-md-3">
              <div class="card bg-primary text-white">
                <div class="card-body">
                  <h4><i class='fas fa-user-graduate' style='font-size:40px'></i>&nbsp;Students</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php //count_student(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <h4><i class='fas fa-chalkboard-teacher' style='font-size:40px'></i>&nbsp;Lecturers</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php //count_teacher(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <h4><i class='fas fa-chalkboard-teacher' style='font-size:40px'></i>&nbsp;Lecturers</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php //count_teacher(); ?></b>
                  </h5>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="card bg-primary text-white">
                <div class="card-body">
                  <h4><i class='fas fa-user-graduate' style='font-size:40px'></i>&nbsp;Students</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php //count_student(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <h4><i class='fas fa-chalkboard-teacher' style='font-size:40px'></i>&nbsp;Lecturers</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php //count_teacher(); ?></b>
                  </h5>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <h4><i class='fas fa-chalkboard-teacher' style='font-size:40px'></i>&nbsp;Lecturers</h4>
                  <hr style="background-color:white">
                  <h5>
                    <b><?php //count_teacher(); ?></b>
                  </h5>
                </div>
              </div>
            </div>
          </div>
         
    </section>
</div>
