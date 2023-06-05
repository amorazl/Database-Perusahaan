<?php 
session_start();
if(isset($_SESSION["login"])){
    header("Location: ../index.php");
    exit;
}
else if(isset($_SESSION["loginAdmin"])){
  header("Location: ../admin/indexAdmin.php");
  exit;
}

$server = "localhost";
$user = "root";
$pass = "";
$db = "apiz_inc";

$conn = mysqli_connect($server, $user, $pass, $db);

//jika menekan submit
if(isset($_POST["login"])){
    //narik data dari form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;

    //querry dari database
    $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
    
    //cek username
    if(mysqli_num_rows($result) === 1){

        //cek password
        $row = mysqli_fetch_assoc($result);
        if($password == 321 && $username == strtolower("admin")){
            echo "<script>
                alert('login berhasil');
            </script>";

            //set session
            $_SESSION["loginAdmin"] = true;

            header("Location: ../admin/indexAdmin.php");
            exit;
        }
        else if($password == $row["password"])
        {
          echo "<script>
          alert('login berhasil');
          </script>";

          //set session
          $_SESSION["login"] = true;

          header("Location: ../index.php");
          exit;
          }
    }
    $error = true;
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

<style>
  .app {
  color: white;
  background-color: var(--theme-bg-color);
  max-width: 480px;
  max-height: 360px;
  height: 90vh;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  position: relative;
  width: 100%;
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

    <!--form-->
    <div class="container">
      <form action="" method="post">
        <h1 style="text-align: center;">LOGIN</h1>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn content-button" name="login">Login</button>
        
        <?php if(isset($error)) : ?>
                <script>
                    alert('username atau password tidak terdaftar');
                </script>
        <?php endif; ?>
      </form>
    </div>
    
    <!--form-->
  </div>
  <!-- JQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>

  <script src="asset/js/script.js"></script>
</body>

</html>