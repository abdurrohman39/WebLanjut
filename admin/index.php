<?php
session_start();
if(isset($_SESSION['user'])){
  echo"<script>document.location.href='beranda.php?p=home'</script>";
}else{
  echo "";
}
?>
  <?php
   include "koneksi/koneksi.php";
    if(isset($_POST['masuk'])){
      $kt=mysqli_query($koneksi,"SELECT * FROM tb_login where username='$_POST[user]'");
      $jumlah=mysqli_num_rows($kt);
      $jk=mysqli_fetch_array($kt);
      if($jumlah<>0){
        $decode=base64_decode($jk['password']);
          if($_POST['pass']==$decode){
          $_SESSION['user']=$jk['username'];
          $_SESSION['level']=$jk['level'];
          $_SESSION['password']=$jk['password'];
          echo"<script>alert('Selamat Datang')</script>";
          echo "<script>document.location.href='beranda.php?p=home'</script>";
          
        }if($jumlah == 0){
          echo"<script>alert('Username Belum terdaftar')</script>";
          echo"<script>document.location.href='index.php'</script>";
        }else{
          echo"<script>alert('Password Salah')</script>";
          echo"<script>document.location.href='index.php'</script>";
        }
      }
    }
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
              <form class="pt-3" action="" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="user" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="pass" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="masuk" id="masuk" value="Login" type="submit" onclick="cek()">Login</button>
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
