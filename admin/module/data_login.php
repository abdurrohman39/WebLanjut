<!-- partial -->
<!-- <?php
session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
?>
 --> <div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-crosshairs-gps"></i>                 
    </span>
    Data Dealer
  </h3>
</div>
<div class="row">
  <div class="col-md-12">
    <table id="daftar_dealer" class="table  table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
         <th>No</th> 
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>

        </tr>
      </thead>
      <tbody>
       <?php
        //Data mentah yang ditampilkan ke tabel    
      include "koneksi/koneksi.php";
      if ($_SESSION['level'] == "Operator") {
      $sql = mysql_query('SELECT * FROM tb_login');
      }else{
      $sql = mysql_query("SELECT * FROM tb_login where username = '$_SESSION[user]'");
      }
      $no = 1;
      while ($r = mysql_fetch_array($sql)) {
        $id_login = $r['id_login'];
        ?>
        <tr>
           <td><?php echo $no++; ?></td>
          <td><?php echo $r['username'] ?></td>
           <td><?php echo $decode=base64_decode($r['password']); ?></td>
            <td><?php echo $r['level'] ?></td>
    
        </tr>
  <?php } ?>
      </tbody>
      <tfoot>
        <tr>
           <th>No</th> 
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!-- content-wrapper ends -->
<!-- partial -->
      <!-- main-panel ends -->