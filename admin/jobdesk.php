<?php
session_start();
//session pencegah masuk dari url
if(!isset($_SESSION["loginAdmin"])){
    header("Location: ../user/login.php");
    exit;
}
include 'functions.php';
$results = query("SELECT * FROM jobdesk_karyawan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alphadelirium</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
      <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
    </svg>
  </div>
  <div class="app">
    <div class="header">
      <div class="menu-circle"></div>
      <div class="header-menu">
        <a class="menu-link " href="indexAdmin.php">Home</a>
        <a class="menu-link is-active">Jobdesk</a>
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Search">
      </div>
    </div>

    <div class="wrapper">
        <div class="main-container">
            <div class="main-header">
                <a class="menu-link-main" href="#">Alphadelirium Company</a>
            </div>

            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">JOBDESK</h4>
                                <div class="table-responsive table">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th> No </th>
                                                <th> Nama </th>
                                                <th> Position </th>
                                                <th> Pay Rate </th>
                                                <th> Working Hours </th>
                                                <th> Weekly Pay </th>
                                            </tr>
                                        </thead>
                                        <div class="container">
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($results as $karyawan) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $karyawan['nama']; ?></td>
                                                    <td><?= $karyawan['jabatan']; ?></td>
                                                    <td><?= $karyawan['pay_rate']; ?> USD/HOUR</td>
                                                    <td><?= $karyawan['jam_kerja']; ?> HOURS A WEEK</td>
                                                    <td><?= $karyawan['weekly_pay']; ?> USD/WEEK</td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </div>
                                    </table>
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
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
<script src="asset/js/script.js"></script>
<script src="asset/js/chart.js"></script>
</body>

</html>