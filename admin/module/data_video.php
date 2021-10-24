 <!-- partial -->

 <div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-crosshairs-gps"></i>                 
    </span>
    Data Video
  </h3>
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
        <span></span><a href="beranda.php?p=input_video">Tambah Data Download<i class="mdi mdi-plus icon-md text-primary align-middle"></i></a>
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
          <th>Judul Video</th>
          <th>Video</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
       <?php
        //Data mentah yang ditampilkan ke tabel    
       include "koneksi/koneksi.php";
       $sql = mysqli_query($koneksi,"SELECT * FROM tb_video");
       $no = 1;
       while ($r = mysqli_fetch_array($sql)) {
        $id_video = $r['id_video'];
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $r['nama_video'] ?></td>
           <td><?php echo $r['isi_video'] ?></td>
          <td>
            <a href='crud/hapus_video.php?id_video=<?=$r['id_video'];?>'><button class="btn btn-danger btn-sm">Hapus
            </button></a>
            </td>
        </tr>
  <?php } ?>
      </tbody>
      <tfoot>
        <tr>
         <th>No</th>
          <th>Judul Video</th>
          <th>Video</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!-- content-wrapper ends -->
<!-- partial -->
      <!-- main-panel ends -->