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
        <span></span><a href="beranda.php?p=input_berita">Tambah Data Berita<i class="mdi mdi-plus icon-md text-primary align-middle"></i></a>
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
          <th>nama berita</th>
          <th>tanggal upload</th>
          <th>isi berita</th>
          <th>nama penulis</th>
          <th>kategori</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
       <?php
        //Data mentah yang ditampilkan ke tabel    
       include "koneksi/koneksi.php";
       $sql = mysqli_query($koneksi,"SELECT * FROM tb_berita");
       $no = 1;
       while ($r = mysqli_fetch_array($sql)) {
        $id_berita = $r['id_berita'];
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $r['nama_berita'] ?></td>
          <td><?php echo $r['tanggal_upload'] ?></td>
          <td><?php echo $r['isi_berita'] ?></td>
          <td><?php echo $r['nama_penulis'] ?></td>
          <td><?php echo $r['kategori'] ?></td>
          <td>
           <a href='beranda.php?p=input_berita&id_berita=<?=$r['id_berita'];?>'><button class="btn btn-primary btn-sm">Edit
            </button></a>
            <a href='crud/hapus_berita.php?id_berita=<?=$r['id_berita'];?>'><button class="btn btn-danger btn-sm">Hapus
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
          <th>isi berita</th>
          <th>nama penulis</th>
          <th>kategori</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!-- content-wrapper ends -->
<!-- partial -->
      <!-- main-panel ends -->