<?php
session_start();
//session pencegah masuk dari url
if(!isset($_SESSION["loginAdmin"])){
    header("Location: ../user/login.php");
    exit;
}
include 'functions.php';
$id = $_GET['id_karyawan'];
$karyawan = query("SELECT * FROM identitas_karyawan WHERE id_karyawan='$id'")[0];
if (isset($_POST['submit']))
{
  if (update_employee($_POST) > 0) 
  {
    echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'employeeAdmin.php';
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
    <!--form-->
    <form style="padding: 20px;" action="" method="post">
          <tr>
            <label>Nama Lengkap</label>
            <td><input type="text" class="form-control" id="nama" name="nama" value="<?= $karyawan['nama']; ?>"required></td>
          </tr>
          <tr>
            <label>NIP</label>
            <td><input type="text" class="form-control" id="nip" name="nip" value="<?= $karyawan['nip']; ?>"required></td>
          </tr>
          <tr>
            <label>Tempat Lahir</label>
            <td><input type="text" class="form-control" id="tpt_lahir" name="tpt_lahir" value="<?= $karyawan['tpt_lahir']; ?>"required></td>
          </tr>
          <tr>
            <label>Tanggal Lahir</label>
            <td><input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $karyawan['tgl_lahir']; ?>"required></td>
          </tr>
          <tr>
            <label>Gender</label>
            <select class="form-control" name="gender" id="gender">
                <option value="">- Gender -</option>
                <option value="Laki-Laki" <?php if ($karyawan['gender'] == "Laki-Laki") echo "selected" ?>>Laki-Laki</option>
                <option value="Perempuan" <?php if ($karyawan['gender'] == "Perempuan") echo "selected" ?>>Perempuan</option>
            </select>
          </tr>
          <tr>
            <label>Kewarganegaraan</label>
            <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                <option value="">- Kewarganegaraan -</option>
                <option value="Indonesia" <?php if ($karyawan['kewarganegaraan'] == "Indonesia") echo "selected" ?>>Indonesia</option>
                <option value="Warga Negara Asing" <?php if ($karyawan['kewarganegaraan'] == "Warga Negara Asing") echo "selected" ?>>Warga Negara Asing</option>
            </select>
          </tr>
          <tr>
            <label>Agama</label>
            <select class="form-control" name="agama" id="agama">
                <option value="">- Agama -</option>
                <option value="Islam" <?php if ($karyawan['agama'] == "Islam") echo "selected" ?>>Islam</option>
                <option value="Hindu" <?php if ($karyawan['agama'] == "Hindu") echo "selected" ?>>Hindu</option>
                <option value="Budha" <?php if ($karyawan['agama'] == "Budha") echo "selected" ?>>Budha</option>
                <option value="Katholik" <?php if ($karyawan['agama'] == "Katholik") echo "selected" ?>>Katholik</option>
                <option value="Protestan" <?php if ($karyawan['agama'] == "Protestan") echo "selected" ?>>Protestan</option>
            </select>
          </tr>
          <tr>
            <label>Pendidikan Terakhir</label>
            <select class="form-control" name="pdk_terakhir" id="pdk_terakhir">
              <option value="">- Pendidikan Terakhir -</option>
              <option value="SMA/K Sederajat" <?php if ($karyawan['pdk_terakhir'] == "SMA/K Sederajat") echo "selected" ?>>SMA/K Sederajat</option>
              <option value="D3" <?php if ($karyawan['pdk_terakhir'] == "D3") echo "selected" ?>>D3</option>
              <option value="D4/S1" <?php if ($karyawan['pdk_terakhir'] == "D4/S1") echo "selected" ?>>D4/S1</option>
              <option value="S2" <?php if ($karyawan['pdk_terakhir'] == "S2") echo "selected" ?>>S2</option>
              <option value="S3" <?php if ($karyawan['pdk_terakhir'] == "S3") echo "selected" ?>>S3</option>
            </select>
          </tr>
          <tr>
            <label>Status Perkawinan</label>
            <select class="form-control" name="status_perkawinan" id="status_perkawinan">
                <option value="">- Status Perkawinan -</option>
                <option value="Single" <?php if ($karyawan['status_perkawinan'] == "Single") echo "selected" ?>>Single</option>
                <option value="Menikah" <?php if ($karyawan['status_perkawinan'] == "Menikah") echo "selected" ?>>Menikah</option>
                <option value="Cerai" <?php if ($karyawan['status_perkawinan'] == "Cerai") echo "selected" ?>>Cerai</option>
            </select>
          </tr>
          <tr>
            <td>Tanggungan</td>
            <td><input type="text" class="form-control" id="tanggungan" name="tanggungan" value="<?= $karyawan['tanggungan']; ?>"required></td>
          </tr>
          <tr>
            <label>Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $karyawan['alamat']; ?>"required rows="3"></input>
          </tr>
          <tr>
            <label>Mulai Bekerja</label>
            <input type="text" class="form-control" id="mulai_bekerja" name="mulai_bekerja" value="<?= $karyawan['mulai_bekerja']; ?>"required></input>
          </tr>
          <tr>
            <label>Kontrak</label>
            <input type="text" class="form-control" id="kontrak" name="kontrak" value="<?= $karyawan['kontrak']; ?>"required></input>
          </tr>
          <tr>
            <label>No. Telepon</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $karyawan['no_telp']; ?>"required></input>
          </tr>
          <tr>
            <td><input type="hidden"  name="id_user" value="<?= $j['id_user']; ?>"></td>
          </tr>
                <td>
                    <div class="text-center pt-2">
                        <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-edit" onclick="return confirm('Apakah Anda Yakin?')"></i>UPDATE</button>
                        <a href="employeeAdmin.php" class="btn btn-danger">Cancel</a>
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