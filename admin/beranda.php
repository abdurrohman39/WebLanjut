<style type="text/css">
  .sidebar .nav .nav-item .nav-link{
    color: #fff !important;
  }
  .sidebar .nav .nav-item .nav-link:hover{
    color: #B66DFF !important;
  }
  .sidebar .nav .nav-item:hover{
  background: #2c3e50 !important;
  }
  .sidebar .nav .nav-item.active{
    background: #2c3e50 !important;
  }
  .navbar.default-layout-navbar{
    background: #34495e !important;
  }
  .text-black{
    color: #fff !important;
  }
  .navbar.default-layout-navbar .navbar-brand-wrapper{
    background: #18151E !important;
  }
  .navbar.default-layout-navbar .navbar-brand-wrapper .navbar-brand{
    color: #fff !important;
  }
  .navbar.default-layout-navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i{
    color: #fff;
  }
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown{
    width: 300px;
  }
</style>

<?php
                  
include 'koneksi/koneksi.php';
session_start();
if(!isset($_SESSION['user'])){
  header ('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">Logo </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">Logo </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
           <!--  <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>                
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
            </div> -->
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <!-- Ambil gambar dari database -->
                <img src="images/faces-clipart/pic-1.png" alt="image">
<!--                 <i class="mdi mdi-account-circle mr-5 text-primary"></i>
 -->                <span class="availability-status online"></span>             
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"><?=$_SESSION['user'];?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="beranda.php?p=data_setting_admin">
                <i class="mdi mdi-account-settings-variant mr-2 text-primary"></i>
                Setting
              </a>
              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Signout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav ">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                 <img src="images/faces-clipart/pic-1.png" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?=$_SESSION['user'];?></span>
                <span class="text-secondary text-small"><?=$_SESSION['level'];?></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="beranda.php?p=home">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="beranda.php?p=data_berita">
              <span class="menu-title">Berita</span>
             
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="beranda.php?p=data_video">
              <span class="menu-title">Video</span>
             
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="beranda.php?p=data_download">
              <span class="menu-title">Download</span>
  
            </a>
          </li>
        
            <li class="nav-item">
            <a class="nav-link" href="beranda.php?p=data_login">
              <span class="menu-title">Login</span>
              
            </a>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" href="pages/kendaraan-keluar/kendaraan_keluar.html">
              <span class="menu-title">Kendaraan Keluar</span>
              <i class="mdi mdi-arrow-up-bold menu-icon"></i>
            </a>
          </li> -->
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          </div>
           <?php
           if(empty($_GET['p'])){
            echo"<script>document.location.href='beranda.php?p=home'</script>";
          }else{
            $r=$_GET['p'];
            include"module/$r.php";
          }

          ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="#" target="_blank">Dadi Mulyo Dealer</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script type="text/javascript" src="vendors/js/jquery-1.11.3.min.js"></script>

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>

  
</body>

</html>

