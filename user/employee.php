<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: user/login.php");
  exit;
}
$id = $_GET['id_user'];
include 'functions.php';
// if(isset($_POST['cari']))
// {
// 	$keyword = $_POST['keyword'];
// 	$employee = query("SELECT * FROM identitas_karyawan WHERE nama LIKE '%$keyword%'")[0];
// }
$employee = query("SELECT * FROM identitas_karyawan WHERE id_karyawan='$id'");
?>
<!doctype html>
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
  <form action="" method="post">
    <input type="text" name="keyword">
    <button type="submit" name="cari"></button>
  </form>
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
        <a class="menu-link " href="../index.php">Home</a>
        <a class="menu-link is-active" href="#">Personal Data</a>
      </div>
      <div class="search-bar">
  
      </div>
      <div class="header-profile">
      
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
                  <h4 class="card-title">PERSONAL DATA</h4>
                  <div class="table-responsive table">
                    <table style="color: black;" class="table">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <td>
                            <?php foreach($employee as $r)
                            {
                              echo $r['nama'];
                            }
                             
                            ?>
                          </td>
                        </tr>
                      </thead>
                      <div class="container">
                        <tbody>
                          <tr>
                            <td>NIP</td>
                            <th>
                              <?php foreach($employee as $r) 
                            {
                              echo $r['nip'];
                            } 
                           
                            ?>
                          </th>	
                        </tr>
                        <tr>
                          <th>Tempat Lahir</th>
                          <td>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['tpt_lahir'];
                            } 
                           
                            ?>
                          </td>	
                        </tr>
                        <tr>
                          <td>Tanggal Lahir</td>
                          <th>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['tgl_lahir'];
                            } 
                           
                            ?>
                          </th>	
                        </tr>
                        <tr>
                          <th>Gender</th>
                          <td>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['gender'];
                            } 
                           
                            ?>
                          </td>	
                        </tr>
                        <tr>
                          <td>Kewarganegaraan</td>
                          <th>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['kewarganegaraan'];
                            } 
                           
                            ?>
                          </th>
                        </tr>
                        <tr>
                          <th>Agama</th>
                          <td>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['agama'];
                            } 
                           
                            ?>
                          </td>	
                        </tr>
                        <tr>
                          <td>Pendidikan Terakhir</td>
                          <th>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['pdk_terakhir'];
                            } 
                           
                            ?>
                          </th>
                        </tr>
                        <tr>
                          <th>Status Perkawinan</th>
                          <td>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['status_perkawinan'];
                            } 
                           
                            ?>
                          </td>	
                        </tr>
                        <tr>
                          <td>Tanggungan</td>
                          <th>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['tanggungan'];
                            } 
                           
                            ?>
                          </th>	
                        </tr>
                        <tr>
                          <th>Alamat</th>
                          <td>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['alamat'];
                            } 
                           
                            ?>
                          </td>	
                        </tr>
                        <tr>
                          <td>Mulai Bekerja</td>
                          <th>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['mulai_bekerja'];
                            } 
                           
                            ?>
                          </th>	
                        </tr>
                        <tr>
                          <th>Kontrak</th>
                          <td>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['kontrak']." Tahun";
                            } 
                           
                            ?>
                          </td>	
                        </tr>
                        <tr>
                          <td>No. Telepon</td>
                          <th>
                            <?php foreach($employee as $r) 
                            {
                              echo $r['no_telp'];
                            } 
                           
                            ?>
                          </th>	
                        </tr>
                        <!-- <tr>
                          <th>Gaji</th>
                          <td>
                            <?php //foreach($employee as $r) :
                            {
                              //echo $employee['gaji'];
                            } 
                            ?>
                          </td>	
                        </tr> -->
                      </tbody>
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
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
  <script src="asset/js/script.js"></script>
  <script src="asset/js/chart.js"></script>
</body>

</html>