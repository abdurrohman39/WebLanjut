 <!-- partial -->

 <div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-crosshairs-gps"></i>                 
    </span>
    Data Berita
  </h3>
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
        <span></span><a href="beranda.php?p=input_download">Tambah Data Download<i class="mdi mdi-plus icon-md text-primary align-middle"></i></a>
      </li>
    </ul>
  </nav>
</div>
<div class="row">
  <div class="col-md-12">
    <table id="daftar_dealer" class="table  table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Berkas</th>
          <th>Foto</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
       <?php
        //Data mentah yang ditampilkan ke tabel    
       include "koneksi/koneksi.php";
       $sql =mysqli_query($koneksi, "SELECT * FROM tb_download");
       $no = 1;
       while ($r = mysqli_fetch_array($sql)) {
        $id_download = $r['id_download'];
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $r['ket_berkas'] ?></td>
          <td><img src="foto/<?=$r['foto'];?>" style="width: 50px; height: 50px;"></td>
          <td>
            <a href='crud/hapus_download.php?id_download=<?=$r['id_download'];?>'><button class="btn btn-danger btn-sm">Hapus
            </button></a>
            <td><a href="foto/<?=$r['foto'];?>">Download</a></td>
            </td>
        </tr>
  <?php } ?>
      </tbody>
      <tfoot>
        <tr>
         <th>No</th>
          <th>Nama Berkas</th>
          <th>Berkas</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!-- content-wrapper ends -->
<!-- partial -->
      <!-- main-panel ends -->