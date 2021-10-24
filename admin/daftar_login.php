<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <h3 class="card-title text-center">Login</h3>
              </div>
              <h4 class="text-center">Buat Akun</h4>
              <form action="prosesdaftar.php" method="POST" class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Username">
                </div>
                  <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="ulangi" id="ulangi" placeholder="Ulangi Password">
                </div>
                 <div class="form-group">
        <select class="form-control" name="level">
           <option>Level</option>
          <option>Operator</option>
          <option>Tatausaha</option>
          <option>Wakakurikulum</option>
        </select>
      </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" value="DAFTAR" type="Submit">Simpan Login</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Sudah Ada Akun? <a href="login.html" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
