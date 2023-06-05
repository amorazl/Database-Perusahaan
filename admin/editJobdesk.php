<?php
session_start();
//session pencegah masuk dari url
if(!isset($_SESSION["loginAdmin"])){
    header("Location: ../user/login.php");
    exit;
}
include 'functions.php';
$id = $_GET['id_gaji'];
$j =  query("SELECT * FROM jobdesk_karyawan WHERE id_gaji='$id'")[0];
if (isset($_POST['submit']))
{
  if (update_jobdesk($_POST) > 0) 
  {
    echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'jobdeskAdmin.php';
            </script>
            ";
  } 
  else 
  {
    echo mysqli_error($conn);
  }
}
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

<style>
  .app {
  color: white;
  background-color: var(--theme-bg-color);
  width: 720px;
  height: 1280px;
  display: flex;
  flex-direction: column;
  overflow: scroll;
  position: relative;
  border-radius: 14px;
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  font-size: 15px;
  font-weight: 500;
}
</style>

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
    </div>
    <h3 style="text-align: center;" >Data Karyawan</h3>
    <form style="padding: 20px;" action="" method="post">
        <tr>
          <label>Nama Lengkap</label>
          <td><input type="text" class="form-control" id="nama" name="nama" value="<?= $j['nama']; ?>"required></td>
        </tr>
          <tr>
            <label>Jabatan</label>
            <select class="form-control" name="jabatan" id="jabatan">
              <option value="">- Jabatan -</option>
              <option value="Front-End Dev" <?php if ($j['jabatan'] == "Front-End Dev") echo "selected" ?>>Front-End Dev</option>
              <option value="Back-End Dev" <?php if ($j['jabatan'] == "Back-End Dev") echo "selected" ?>>Back-End Dev</option>
              <option value="Advisor" <?php if ($j['jabatan'] == "Advisor") echo "selected" ?>>Advisor</option>
              <option value="Secretary" <?php if ($j['jabatan'] == "Secretary") echo "selected" ?>>Secretary</option>
            </select>
          </tr>
          <tr>
            <label>Bayaran Per-Jam</label>
            <td><input type="text" class="form-control" id="pay_rate" name="pay_rate" value="<?= $j['pay_rate']; ?>"required></td>
          </tr>
          <tr>
          <tr>
            <label>Jumlah Jam Kerja</label>
            <td><input type="text" class="form-control" id="jam_kerja" name="jam_kerja" value="<?= $j['jam_kerja']; ?>"required></td>
          </tr>
          <tr>
            <td><input type="hidden"  name="id_user" value="<?= $j['id_user']; ?>"></td>
          </tr>
            <tr>
                <td>
                    <div class="text-center pt-2">
                        <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-edit" onclick="return confirm('Apakah Anda Yakin?')"></i>UPDATE</button>
                        <a href="JobdeskAdmin.php" class="btn btn-danger">Cancel</a>
                    </div>
                </td>
            </tr>
      </form>
    
    <!--form-->
  </div>
  <!-- JQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>

  <script src="asset/js/script.js"></script>
</body>

</html>