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
        <a class="menu-link" href="indexAdmin.php">Home</a>
        <a class="menu-link is-active" href="#">Founders</a>
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Search">
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
          <div class="content-section-title">MEET OUR FOUNDER</div>
          <div class="apps-card">
            <div class="app-card">
              <span>
                  <g xmlns="http://www.w3.org/2000/svg">
                    <svg viewBox="0 0 511.441 511.441" fill="currentColor">
                      <path d="M255.721 347.484L90.22 266.751v106.57l165.51 73.503 165.509-73.503V266.742z" />
                      <path d="M511.441 189.361L255.721 64.617 0 189.361l255.721 124.744 195.522-95.378v111.032h30V204.092z" />
                    </svg>
                  </g>
                Hafiz Ibrahim
              </span>
              <div class="app-card__subtext">3337210012 <br> Universitas Sultan Ageng Tirtayasa</div>
              <div class="app-card-buttons">
                <a href="https://www.instagram.com/hafizibrahimm_/"><button class="content-button status-button">Find me</button></a>
                <div class="menu"></div>
              </div>
            </div>

            <div class="app-card">
              <span>
                  <g xmlns="http://www.w3.org/2000/svg">
                    <svg viewBox="0 0 511.441 511.441" fill="currentColor">
                      <path d="M255.721 347.484L90.22 266.751v106.57l165.51 73.503 165.509-73.503V266.742z" />
                      <path d="M511.441 189.361L255.721 64.617 0 189.361l255.721 124.744 195.522-95.378v111.032h30V204.092z" />
                    </svg>
                  </g>
                David Saputra
              </span>
              <div class="app-card__subtext">3337210029 <br> Universitas Sultan Ageng Tirtayasa</div>
              <div class="app-card-buttons">
                <a href="https://www.instagram.com/davidwae_/"><button class="content-button status-button">Find me</button></a>
                <div class="menu"></div>
              </div>
            </div>

            <div class="app-card">
              <span>
                  <g xmlns="http://www.w3.org/2000/svg">
                    <svg viewBox="0 0 511.441 511.441" fill="currentColor">
                      <path d="M255.721 347.484L90.22 266.751v106.57l165.51 73.503 165.509-73.503V266.742z" />
                      <path d="M511.441 189.361L255.721 64.617 0 189.361l255.721 124.744 195.522-95.378v111.032h30V204.092z" />
                    </svg>
                  </g>
                Alfhiyana
              </span>
              <div class="app-card__subtext">3337210032 <br> Universitas Sultan Ageng Tirtayasa</div>
              <div class="app-card-buttons">
                <a href="https://www.instagram.com/amorazl_/"><button class="content-button status-button">Find me</button></a>
                <div class="menu"></div>
              </div>
            </div>
          </div>

          <br>
          <div class="col grid-margin stretch-card">
            <div class="founders-image">
              <div class="discover"><h5>Alphadelirium Team</h5></div>
              <img src="../asset/images/alphadelirium team.png" alt="orangkerja">
            </div>
          </div>

          <div class="apps-card">
            <div class="app-card">
              <span>
                  <g xmlns="http://www.w3.org/2000/svg">
                    <svg viewBox="0 0 511.441 511.441" fill="currentColor">
                      <path d="M255.721 347.484L90.22 266.751v106.57l165.51 73.503 165.509-73.503V266.742z" />
                      <path d="M511.441 189.361L255.721 64.617 0 189.361l255.721 124.744 195.522-95.378v111.032h30V204.092z" />
                    </svg>
                  </g>
                Shofie Muthia Putri H.
              </span>
              <div class="app-card__subtext">3337210041 <br> Universitas Sultan Ageng Tirtayasa</div>
              <div class="app-card-buttons">
                <a href="https://www.instagram.com/shofiemuthia/"><button class="content-button status-button">Find me</button></a>
                <div class="menu"></div>
              </div>
            </div>

            <div class="app-card">
              <span>
                  <g xmlns="http://www.w3.org/2000/svg">
                    <svg viewBox="0 0 511.441 511.441" fill="currentColor">
                      <path d="M255.721 347.484L90.22 266.751v106.57l165.51 73.503 165.509-73.503V266.742z" />
                      <path d="M511.441 189.361L255.721 64.617 0 189.361l255.721 124.744 195.522-95.378v111.032h30V204.092z" />
                    </svg>
                  </g>
                Dhafin Rizky Aulia
              </span>
              <div class="app-card__subtext">3337210045 <br> Universitas Sultan Ageng Tirtayasa</div>
              <div class="app-card-buttons">
                <a href="https://www.instagram.com/skittleswithchocolateinside/"><button class="content-button status-button">Find me</button></a>
                <div class="menu"></div>
              </div>
            </div>

            

            <div class="app-card">
              <span>
                  <g xmlns="http://www.w3.org/2000/svg">
                    <svg viewBox="0 0 511.441 511.441" fill="currentColor">
                      <path d="M255.721 347.484L90.22 266.751v106.57l165.51 73.503 165.509-73.503V266.742z" />
                      <path d="M511.441 189.361L255.721 64.617 0 189.361l255.721 124.744 195.522-95.378v111.032h30V204.092z" />
                    </svg>
                  </g>
                  A'idah Eka Septiana
              </span>
              <div class="app-card__subtext">3337210063 <br> Universitas Sultan Ageng Tirtayasa</div>
              <div class="app-card-buttons">
                <a href="https://www.instagram.com/aidaheka.s/"><button class="content-button status-button">Find me</button></a>
                <div class="menu"></div>
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