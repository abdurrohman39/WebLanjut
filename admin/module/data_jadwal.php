 <!-- partial -->

 <div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-crosshairs-gps"></i>                 
    </span>
    Data Jadwal
  </h3>
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
        <span></span><a href="beranda.php?p=input_jadwal">Tambah Data Jadwal<i class="mdi mdi-plus icon-md text-primary align-middle"></i></a>
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
          <th>nama jadwal</th>
          <th>tanggal upload</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
       <?php
        //Data mentah yang ditampilkan ke tabel    
       include "koneksi/koneksi.php";
       $sql = mysql_query("SELECT * FROM tb_jadwal");
       $no = 1;
       while ($r = mysql_fetch_array($sql)) {
        $id_jadwal = $r['id_jadwal'];
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $r['nama_jadwal'] ?></td>
          <td><?php echo $r['tgl_jadwal'] ?></td>
          <td>
            <a href='beranda.php?p=input_jadwal&id_jadwal=<?=$r['id_jadwal'];?>'><button class="btn btn-primary btn-sm">Edit
            </button></a>
            <a href='crud/hapus_jadwal.php?id_jadwal=<?=$r['id_jadwal'];?>'><button class="btn btn-danger btn-sm">Hapus
            </button></a>
          </td>
        </tr>
  <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <th>No</th>
          <th>nama berita</th>
          <th>tanggal upload</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!-- content-wrapper ends -->
<!-- partial -->
      <!-- main-panel ends -->