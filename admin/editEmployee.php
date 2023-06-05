<?php
include 'functions.php';
$id = $_GET['id_karyawan'];
$karyawan =  query("SELECT * FROM identitas_karyawan WHERE id_karyawan='$id'")[0];

if( isset($_POST['submit']) )
{
   if(update_employee($_POST) > 0)
   {
        echo"
        <script>
            alert('DATA BERHASIL DIUBAH!');
            document.location.href = 'employeeAdmin.php';
        </script>
        ";
   }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>

    .card{
    margin-left: 15px;
    margin-bottom: 15px;
    }
    .navbar{
    position: relative;
    display: block;
    width: 80%;
    border-radius: auto;
    text-align: center;
    margin: auto;
    margin-bottom: 0px;
    font-size: medium;
    }
    @media only screen and (min-width: 768px) {
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;} 
    .col-13 {width: 25%;}
    .col-17 {width: 27.5%}
    }

    </style>
  </head>
  <body style="background-image : url('https://p4.wallpaperbetter.com/wallpaper/922/821/102/purple-is-my-color-wallpaper-preview.jpg');"></body>
    <div class="col-12 navbar" style="background-color: #ba4db5;">
      <nav class="container-fluid col-12">
        <h2 style="padding: 2%; color: whitesmoke; padding-left: 40%;" class="text-center"><center>Data Karyawan</center></h2>
      </nav>
    </div>
    <div style="padding: 15%; padding-top: 2%;">
    <div class="card" >
      <div class="card-header"><h5>Silahkan Isi Data Diri Anda : </h5></div>
      <div class="card-body">
        <form action="" method="post">
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
            <td><input type="hidden"  name="id_user" value="<?= $karyawan['id_user']; ?>"></td>
          </tr>
            <tr>
                <td>
                    <div class="text-center pt-2">
                        <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-edit" onclick="return confirm('Apakah Anda Yakin?')"></i>UPDATE</button>
                        <a href="employeeAdmin.php" class="btn btn-danger">Cancel</a>
                    </div>
                </td>
            </tr>
          </form>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>