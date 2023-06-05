<?php
session_start();
//session pencegah masuk dari url
if(!isset($_SESSION["login"])){
  header("Location: user/login.php");
  exit;
}
include 'user/functions.php';
$usernameS = $_SESSION["username"];
$akun = query("SELECT * FROM user WHERE username='$usernameS'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alphadelirium</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="shortcut icon" href="asset/images/orangkerja.png" type="image/x-icon">
</head>

<body>
  <div class="video-bg">
    <video width="320" height="240" autoplay loop muted>
      <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
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
        <a class="menu-link is-active" href="#home">Home</a>
        <a class="menu-link " href="#discover">Discover</a>
        <a class="menu-link notify" href="#find">Find Us</a>
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Search">
      </div>
      <div class="header-profile">
        <a href="admin/logout.php" class="btn content-button" style="margin-bottom: 15px;">Logout</a>
        <?php foreach($akun as $a) : ?>
        <p style="margin-left:30px; margin-top:13px; color:white;">
          <?= $a['username']; ?>
        </p>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="wrapper">
      <div class="left-side">
        <div class="side-wrapper">
          <div class="side-title">Categories</div>
          <div class="side-menu">
            <a href="user/project report.php">
              <svg viewBox="0 0 512 512" fill="currentColor">
                <path
                  d="M0 331v112.295a14.996 14.996 0 007.559 13.023L106 512V391L0 331zM136 391v121l105-60V331zM271 331v121l105 60V391zM406 391v121l98.441-55.682A14.995 14.995 0 00512 443.296V331l-106 60zM391 241l-115.754 57.876L391 365.026l116.754-66.15zM262.709 1.583a15.006 15.006 0 00-13.418 0L140.246 57.876 256 124.026l115.754-66.151L262.709 1.583zM136 90v124.955l105 52.5V150zM121 241L4.246 298.876 121 365.026l115.754-66.15zM271 150v117.455l105-52.5V90z" />
                </svg>
                Project Reports
              </a>
              <a href="user/traffic.php">
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
          <h5 class="menu-link-main">Alphadelirium Company</h5>
        </div>
        <div class="content-wrapper">
          <div id="home" class="content-wrapper-header">
            <div class="content-wrapper-context">
              <h3 class="img-content">
                Traffic Sources
              </h3>
              <div class="content-text">Cybersecurity Detection Specialist Company.
                Automate investigations across workload, control plane, and data plane layers of the cloud.</div>
              <a href="user/traffic.php"><button class="content-button">Open</button></a>
            </div>
            <img class="content-wrapper-img" src="https://assets.codepen.io/3364143/glass.png" alt="">
          </div>

          <div class="content-section">
            <div class="content-section-title">Apps in your plan</div>
            <div class="apps-card">
              <div class="app-card">
                <span>
                    <g xmlns="http://www.w3.org/2000/svg">
                      <svg viewBox="0 0 511.441 511.441" fill="currentColor">
                        <path d="M255.721 347.484L90.22 266.751v106.57l165.51 73.503 165.509-73.503V266.742z" />
                        <path d="M511.441 189.361L255.721 64.617 0 189.361l255.721 124.744 195.522-95.378v111.032h30V204.092z" />
                      </svg>
                    </g>
                  Directors
                </span>
                <div class="app-card__subtext">Founder of Professional Cybersecurity Specialist</div>
                <div class="app-card-buttons">
                  <a href="user/directors.html" class="content-button status-button text-decoration-none">Detail</a>
                  <div class="menu"></div>
                </div>
              </div>

              <div class="app-card">
                <span>
                    <g xmlns="http://www.w3.org/2000/svg">
                      <svg viewBox="0 0 450 450" fill="currentColor">
                        <circle cx="295.099" cy="327.254" r="110.96" transform="rotate(-45 295.062 327.332)" />
                        <path d="M471.854 338.281V163.146H296.72v41.169a123.1 123.1 0 01121.339 122.939c0 3.717-.176 7.393-.5 11.027zM172.14 327.254a123.16 123.16 0 01100.59-120.915L195.082 73.786 40.146 338.281H172.64c-.325-3.634-.5-7.31-.5-11.027z" />
                      </svg>
                    </g>
                  Jobdesk
                </span>
                <div class="app-card__subtext">Tasks documentation and qualifications of a job</div>
                <div class="app-card-buttons">
                  <?php foreach($akun as $a) : ?>
                  <a href="user/jobdesk.php?id_user=<?= $a['id_user']; ?>" class="content-button status-button text-decoration-none">Detail</a>
                  <?php endforeach; ?>
                  <div class="menu"></div>
                </div>
              </div>

              <div class="app-card">
                <span>
                    <g xmlns="http://www.w3.org/2000/svg">
                      <svg viewBox="0 0 58 58" fill="currentColor">
                        <path d="M57 6H1a1 1 0 00-1 1v44a1 1 0 001 1h56a1 1 0 001-1V7a1 1 0 00-1-1zM10 50H2v-9h8v9zm0-11H2v-9h8v9zm0-11H2v-9h8v9zm0-11H2V8h8v9zm26.537 12.844l-11 7a1.007 1.007 0 01-1.018.033A1.001 1.001 0 0124 36V22a1.001 1.001 0 011.538-.844l11 7a1.003 1.003 0 01-.001 1.688zM56 50h-8v-9h8v9zm0-11h-8v-9h8v9zm0-11h-8v-9h8v9zm0-11h-8V8h8v9z" />
                      </svg>
                    </g>
                  Employee
                </span>
                <div class="app-card__subtext">Personal data and information of workers</div>
                <div class="app-card-buttons">
                  <?php foreach($akun as $a) : ?>
                  <a href="user/employee.php?id_user=<?= $a['id_user']; ?>" class="content-button status-button text-decoration-none">Detail</a>
                  <?php endforeach; ?>
                  <div class="menu"></div>
                </div>
              </div>
            </div>

            <div id="discover" class="content-section">
            <div class="content-section-title">Discover</div>
            <div class="canvas">
              <div class="con">
                <div class="text first-text">Alphadelirium's</div> &ensp;
                <span class="text sec-text"></span>
              </div>
            </div>
            <script>
              const text = document.querySelector(".sec-text");
              const textLoad = () => {
                setTimeout(() => {
                  text.textContent = "Secure";
                }, 0);
                setTimeout(() => {
                  text.textContent = "Caring";
                }, 3000);
                setTimeout(() => {
                  text.textContent = "Versed";
                }, 6000);
                setTimeout(() => {
                  text.textContent = "Concern";
                }, 9000);
              }
              textLoad();
              setInterval(textLoad, 12000);
            </script>
            <div class="discover">
              <p>Active scanning, agents, passive monitoring, cloud connectors, 
                external attack surface management and CMDB integrations provide 
                unified visibility and a continuous view of all of your assets—both known 
                and previously unknown. Combine vulnerability data, threat intelligence and data science 
                for easy-to-understand risk scores to quickly assess risk to fix first.
                We provide protection against sophisticated attacks through endpoints, cloud, and infrastructure.
              </p>
              <p>
                Instead of employing single-purpose vulnerability tools for different platforms in your 
                tech stack, then manually merging massive amounts of security data to determine what is 
                happening across your environment, <b>Alphadelirium</b> delivers everything you need for a comprehensive 
                risk-based vulnerability management solution, integrated and ready to use.
                We help organizations and individuals to protect their systems and data from unauthorized access.
              </p>
              <a href="user/project report.php"><button class="content-button">Work Sheet</button></a>
            </div>

            <div id="find" class="content-section">
            <div class="content-section-title">Where you can find us</div>
            </div>

            <iframe class="products" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d806.9512385490733!2d106.03297126702294!3d-5.996027490687781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4191e77ae94593%3A0xdd081a742acb8e6c!2sTakol%20Cilegon!5e0!3m2!1sid!2sid!4v1670264971866!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>
        </div>
      </div>
    </div>
    <div class="overlay-app"></div>
  </div>
  <!-- JQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>

  <script src="asset/js/script.js"></script>
</body>

</html>