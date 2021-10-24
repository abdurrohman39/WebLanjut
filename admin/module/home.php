  <style type="text/css">
    .stretch-card{
      height: 130px;
    }
  </style>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>                 
      </span>
      Dashboard
    </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview
          <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
  </div>

  <div class="row">
          <?php
        //Data mentah yang ditampilkan ke tabel    
          include "koneksi/koneksi.php";
          $sql = mysqli_query($koneksi, "SELECT count(*) AS id_dealer FROM tb_dealer");
          //$query = mysqli_query($sql);
         /// $result = mysqli_fetch_array($sql);  <h2 class="mb-5" style="text-align: center;"><?php echo $result['id_dealer']; ?></h2>
        
       
          <h4 class="font-weight-normal mb-3">
             <i class="mdi mdi-library-books mdi-24px float-right"></i>
        </h4>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
   <?php
        //Data mentah yang ditampilkan ke tabel    
          include "koneksi/koneksi.php";
          $sql = mysqli_query($koneksi,"SELECT count(*) AS id_pegawai FROM tb_pegawai");
          //$query = mysqli_query($sql);
          //$result = mysqli_fetch_array($query);    <h2 class="mb-5" style="text-align: center;"><?php echo $result['id_pegawai']; ?></h2>
        
                     
        <h4 class="font-weight-normal mb-3">
             <i class="mdi mdi-account mdi-24px float-right"></i>
         </h4>
      </div>
    </div>
  </div>
  <div class="col-md-4 stretch-card grid-margin">
     <?php
        //Data mentah yang ditampilkan ke tabel    
          include "koneksi/koneksi.php";
          $sql = mysqli_query($koneksi,"SELECT count(*) AS id_motor_masuk FROM tb_motor_masuk");
          //$query = mysqli_query($sql);
          //$result = mysqli_fetch_array($query);  <h2 class="mb-5" style="text-align: center;"><?php echo $result['id_motor_masuk']; ?></h2>
        
         
          <h4 class="font-weight-normal mb-3">
             <i class=""></i>
        </h4>
      </div>
    </div>
  </div>
</div>