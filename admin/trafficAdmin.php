<?php
session_start();
//session pencegah masuk dari url
if(!isset($_SESSION["loginAdmin"])){
    header("Location: ../user/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alphadelirium</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../asset/css/style.css">
  <link rel="shortcut icon" href="../asset/images/orangkerja.png" type="image/x-icon">
</head>

<body>
  <div class="video-bg">
    <video width="320" height="240" autoplay loop muted>
      <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  <div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"
      stroke-linejoin="round">
      <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
  </div>
  <div class="app">
    <div class="header">
      <div class="menu-circle"></div>
      <div class="header-menu">
        <a class="menu-link " href="indexAdmin.php">Home</a>
        <a class="menu-link is-active" href="#">Traffic</a>
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Search">
      </div>
      <div class="header-profile">
        <a href="logout.php" class="btn content-button" style="margin-bottom: 15px;">Logout</a>
      </div>
    </div>
    <div class="wrapper">
      <div class="left-side">
        <div class="side-wrapper">
          <div class="side-title">Admin</div>
          <div class="side-menu">
            <a href="ingput.php">
              <svg viewBox="0 0 512 512">
                <g xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                  <path d="M0 0h128v128H0zm0 0M192 0h128v128H192zm0 0M384 0h128v128H384zm0 0M0 192h128v128H0zm0 0"
                    data-original="#bfc9d1" />
                </g>
                <path xmlns="http://www.w3.org/2000/svg" d="M192 192h128v128H192zm0 0" fill="currentColor"
                  data-original="#82b1ff" />
                <path xmlns="http://www.w3.org/2000/svg"
                  d="M384 192h128v128H384zm0 0M0 384h128v128H0zm0 0M192 384h128v128H192zm0 0M384 384h128v128H384zm0 0"
                  fill="currentColor" data-original="#bfc9d1" />
              </svg>
              Input Data
            </a>
            <a href="jobdeskAdmin.php">
              <svg viewBox="0 0 488.932 488.932" fill="currentColor">
                <path
                  d="M243.158 61.361v-57.6c0-3.2 4-4.9 6.7-2.9l118.4 87c2 1.5 2 4.4 0 5.9l-118.4 87c-2.7 2-6.7.2-6.7-2.9v-57.5c-87.8 1.4-158.1 76-152.1 165.4 5.1 76.8 67.7 139.1 144.5 144 81.4 5.2 150.6-53 163-129.9 2.3-14.3 14.7-24.7 29.2-24.7 17.9 0 31.8 15.9 29 33.5-17.4 109.7-118.5 192-235.7 178.9-98-11-176.7-89.4-187.8-187.4-14.7-128.2 84.9-237.4 209.9-238.8z" />
              </svg>
              Update Jobdesk
            </a>
            <a href="employeeAdmin.php">
              <svg viewBox="0 0 488.932 488.932" fill="currentColor">
                <path
                  d="M243.158 61.361v-57.6c0-3.2 4-4.9 6.7-2.9l118.4 87c2 1.5 2 4.4 0 5.9l-118.4 87c-2.7 2-6.7.2-6.7-2.9v-57.5c-87.8 1.4-158.1 76-152.1 165.4 5.1 76.8 67.7 139.1 144.5 144 81.4 5.2 150.6-53 163-129.9 2.3-14.3 14.7-24.7 29.2-24.7 17.9 0 31.8 15.9 29 33.5-17.4 109.7-118.5 192-235.7 178.9-98-11-176.7-89.4-187.8-187.4-14.7-128.2 84.9-237.4 209.9-238.8z" />
              </svg>
              Update Employee
            </a>
          </div>
        </div>
        <div class="side-wrapper">
          <div class="side-title">Categories</div>
          <div class="side-menu">
            <a href="project_reportAdmin.php">
              <svg viewBox="0 0 512 512" fill="currentColor">
                <path
                  d="M0 331v112.295a14.996 14.996 0 007.559 13.023L106 512V391L0 331zM136 391v121l105-60V331zM271 331v121l105 60V391zM406 391v121l98.441-55.682A14.995 14.995 0 00512 443.296V331l-106 60zM391 241l-115.754 57.876L391 365.026l116.754-66.15zM262.709 1.583a15.006 15.006 0 00-13.418 0L140.246 57.876 256 124.026l115.754-66.151L262.709 1.583zM136 90v124.955l105 52.5V150zM121 241L4.246 298.876 121 365.026l115.754-66.15zM271 150v117.455l105-52.5V90z" />
              </svg>
              Project Reports
            </a>
            <a href="#">
              <svg viewBox="0 0 512 512" fill="currentColor">
                <path
                  d="M497 151H316c-8.401 0-15 6.599-15 15v300c0 8.401 6.599 15 15 15h181c8.401 0 15-6.599 15-15V166c0-8.401-6.599-15-15-15zm-76 270h-30c-8.401 0-15-6.599-15-15s6.599-15 15-15h30c8.401 0 15 6.599 15 15s-6.599 15-15 15zm0-180h-30c-8.401 0-15-6.599-15-15s6.599-15 15-15h30c8.401 0 15 6.599 15 15s-6.599 15-15 15z" />
                <path
                  d="M15 331h196v60h-75c-8.291 0-15 6.709-15 15s6.709 15 15 15h135v-30h-30v-60h30V166c0-24.814 20.186-45 45-45h135V46c0-8.284-6.716-15-15-15H15C6.716 31 0 37.716 0 46v270c0 8.284 6.716 15 15 15z" />
              </svg>
              Traffic
            </a>
          </div>
        </div>
      </div>

      <div class="main-container">
        <div class="main-header">
          <a class="menu-link-main" href="#">Alphadelirium Company</a>
        </div>

        <div class="content-wrapper">
            <div class="content-section-title">Company Traffic </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-danger card-img-holder text-white">
                      <div class="card-body">
                          <img src="../asset/images/circle.svg" class="card-img-absolute" />
                          <h6 class="mb-3">Weekly Sales</h6>
                          <h2 class="mb-5">$ 25,000</h2>
                          <h7>Increased by 60%</h7>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-info card-img-holder text-white">
                      <div class="card-body">
                          <img src="../asset/images/circle.svg" class="card-img-absolute" />
                          <h6 class="mb-3">Weekly Orders</h6>
                          <h2 class="mb-5">45,132</h2>
                          <h7>Decreased by 10%</h7>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-success card-img-holder text-white">
                      <div class="card-body">
                          <img src="../asset/images/circle.svg" class="card-img-absolute" />
                          <h6 class="mb-3">Visitors Online</h6>
                          <h2 class="mb-5">95,574</h2>
                          <h7>Increased by 5%</h7>
                      </div>
                  </div>
              </div>

              <div class="content-section-title">Charts</div>
                  <div class="row">
                    <div class="col-md-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                                    <div class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Traffic Sources</h4>
                                <canvas id="rounded"></canvas>
                                <div class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="overlay-app"></div>
  </div>
  <!-- JQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
  <script src="../asset/js/script.js"></script>
  <script src="../asset/js/chart.js"></script>
</body>

</html>