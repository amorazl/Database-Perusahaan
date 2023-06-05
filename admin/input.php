<?php
session_start();
//session pencegah masuk dari url
if(!isset($_SESSION["loginAdmin"])){
    header("Location: ../user/login.php");
    exit;
}
include 'functions.php';
if (isset($_POST['submit'])) {
  if (ingput($_POST) > 0) {
    echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'employeeAdmin.php';
            </script>
            ";
  } else {
    echo mysqli_error($conn);
  }
}
$type = " ";
$akun = query("SELECT * FROM user WHERE username NOT IN ('admin')");
// $id_user = query("SELECT identitas_karyawan.id_user, user.username FROM identitas_karyawan INNER JOIN user ON identitas_karyawan.id_user = user.id_user");
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
          <td><input type="text" class="form-control" id="nama" name="nama" required></td>
        </tr>
        <p></p>
        <tr>
          <label>NIP</label>
          <td><input type="text" class="form-control" id="nip" name="nip" required></td>
        </tr>
        <p></p>
        <tr>
          <td>Tempat Lahir</td>
          <td><input type="text" class="form-control" id="tpt_lahir" name="tpt_lahir" required></td>
        </tr>
        <p></p>
        <tr>
          <label>Tanggal Lahir</label>
          <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required rows="3"></input>
        </tr>
        <p></p>
        <tr>
          <label>Jenis Kelamin</label>
          <select class="form-control" name="gender" id="gender">
            <option value="">- jenis kelamin -</option>
            <option value="laki-laki" <?php if ($type == "laki-laki") echo "selected" ?>>Laki-Laki</option>
            <option value="perempuan" <?php if ($type == "perempuan") echo "selected" ?>>Perempuan</option>
          </select>
        </tr>
        <p></p>
        <tr>
          <label>Kewarganegaraan</label>
          <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
            <option value="">- warga negara -</option>
            <option value="wni" <?php if ($type == "wni") echo "selected" ?>>Indonesia</option>
            <option value="wna" <?php if ($type == "wna") echo "selected" ?>>Warga Negara Asing</option>
          </select>
        </tr>
        <p></p>
        <tr>
          <label>Agama</label>
          <select class="form-control" name="agama" id="agama">
            <option value="">- Agama -</option>
            <option value="islam" <?php if ($type == "islam") echo "selected" ?>>Islam</option>
            <option value="hindu" <?php if ($type == "hindu") echo "selected" ?>>Hindu</option>
            <option value="budha" <?php if ($type == "budha") echo "selected" ?>>Budha</option>
            <option value="katholik" <?php if ($type == "katholik") echo "selected" ?>>Katholik</option>
            <option value="protestan" <?php if ($type == "protestan") echo "selected" ?>>Protestan</option>
          </select>
        </tr>
        <p></p>
        <tr>
          <label>Pendidikan Terakhir</label>
          <select class="form-control" name="pdk_terakhir" id="pdk_terakhir">
            <option value="">- Pendidikan Terakhir -</option>
            <option value="SMA/K Sederajat" <?php if ($type == "SMA/K Sederajat") echo "selected" ?>>SMA/K Sederajat</option>
            <option value="D3" <?php if ($type == "D3") echo "selected" ?>>D3</option>
            <option value="D4/S1" <?php if ($type == "D4/S1") echo "selected" ?>>D4/S1</option>
            <option value="S2" <?php if ($type == "S2") echo "selected" ?>>S2</option>
            <option value="S3" <?php if ($type == "S3") echo "selected" ?>>S3</option>
          </select>
        </tr>
        <p></p>
        <tr>
          <label>Status Perkawinan</label>
          <select class="form-control" name="status_perkawinan" id="status_perkawinan">
            <option value="">- status kawin -</option>
            <option value="menikah" <?php if ($type == "menikah") echo "selected" ?>>Menikah</option>
            <option value="cerai" <?php if ($type == "cerai") echo "selected" ?>>Bercerai</option>
            <option value="single" <?php if ($type == "single") echo "selected" ?>>Single</option>
          </select>
        </tr>
        <p></p>
        <tr>
          <label>Tanggungan</label>
          <td><input type="text" class="form-control" id="tanggungan" name="tanggungan" required></td>
        </tr>
        <p></p>
        <tr>
          <label>Alamat</label>
          <td> <input type="text" class="form-control" id="alamat" name="alamat" required>
          </td>
        </tr>
        <p></p>
        <tr>
          <label>Mulai Bekerja</label>
          <td><input type="date" class="form-control" id="mulai_bekerja" name="mulai_bekerja" required></td>
        </tr>
        <p></p>
        <tr>
          <label>Kontrak</label>
          <td><input type="text" class="form-control" id="kontrak" name="kontrak" required></td>
        </tr>
        <p></p>
        <tr>
          <label>No Telephone</label>
          <td><input type="text" class="form-control" id="no_tlp" name="no_telp" required></td>
        </tr>
        <tr>
          <label>User</label>
          <select class="form-control" name="id_user" id="id_user">
            <option value="">- User -</option>
            <?php foreach($akun as $a) : ?>
            <option value="<?= $a['id_user'] ?>" <?php if ($type == $a['id_user']) echo "selected" ?>><?= $a['id_user']." - ".$a['username']; ?></option>
            <?php endforeach; ?>
          </select>
        </tr>
        <tr>
          <label>Jabatan</label>
          <select class="form-control" name="jabatan" id="jabatan">
            <option value="">- Jabatan -</option>
            <option value="Front-End Dev" <?php if ($type == "Front-End Dev") echo "selected" ?>>Front-End Dev</option>
            <option value="Back-End Dev" <?php if ($type == "Back-End Dev") echo "selected" ?>>Back-End Dev</option>
            <option value="Advisor" <?php if ($type == "Advisor") echo "selected" ?>>Advisor</option>
            <option value="Secretary" <?php if ($type == "Secretary") echo "selected" ?>>Secretary</option>
          </select>
        </tr>
        <p></p>
        <tr>
          <td>Bayaran Per-Jam</td>
          <td><input type="text" class="form-control" id="pay_rate" name="pay_rate" required></td>
        </tr>
        <p></p>
        <tr>
          <label>Jumlah Jam Kerja</label>
          <input type="text" class="form-control" id="jam_kerja" name="jam_kerja" required rows="3"></input>
        </tr>
        <p></p>
        <p></p>
        <td>
          <div class="text-center pt-2">
            <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-edit"></i>Simpan</button>
            <a href="indexAdmin.php" class="btn btn-danger">Cancel</a>
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