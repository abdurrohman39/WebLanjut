<?php
error_reporting(0);
include"koneksi/koneksi.php";
if(empty($_GET['id_video'])){
  $p="Simpan";
  $query=mysql_query("SELECT * FROM tb_video ORDER BY id_video desc");
  $data=mysql_fetch_array($query);
  if(empty($data[0])){
    $nomot="IDV101";
  }else{
    $l=$data[0];
    $hj=substr($l,3,3);
    $nm=$hj+1;
    $nomot="IDV" .$nm;
  }
  $query="input";
}else{
  $p="Edit";
  $query="Edit";
  $nomot=$_GET['id_video'];
}

$tquery=mysql_query("SELECT * from tb_video where id_video='$_GET[id_video]'");
$tampil=mysql_fetch_array($tquery);
?>
<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-crosshairs-gps"></i>                 
    </span>
    Tambah Video
  </h3>
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
        <span></span><a href="beranda.php?p=data_berita">Kembali<i class="mdi mdi-plus icon-md text-primary align-middle"></i></a>
      </li>
    </ul>
  </nav>
</div>
<div class="row">
  <div class="col-md-12">
    <form class="form-sample" action="crud/simpan_video.php"  method="POST" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
      <div class="row">
        <div class="col-md-12">
          <input type="hidden" name="id_video" value="<?php echo $nomot; ?>"/>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Judul Video</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama_video" value="<?php echo $tampil[nama_video];?>"/>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tanggal Jadwal</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="isi_video" value="<?php echo $tampil[isi_video]; ?>" />
            </div>
          </div>
        </div>
         
      </div>
       
      </div>
        <div class="col-md-6">
          <button class="btn btn-block btn-lg btn-gradient-primary mt-4" value="<?php echo $p;?>"  name="<?php echo $p ;?>">Simpan Data</button>
        </div>
        <div class="col-md-6">
          <button class="btn btn-block btn-lg btn-gradient-primary mt-4" type="riset" value="batal">Hapus Data</button>

        </div>
      </form>
    </div>

    <script type="text/javascript">

      function validateForm() {
        var x = document.forms["myForm"]["nama_dealer"].value;
        if (x == "") {
          alert("Name Dealer Harus Di Isi");
          return false;
        }
        var x = document.forms["myForm"]["alamat_dealer"].value;
        if (x == "") {
          alert("Alamat Dealer Harus Di Isi");
          return false;
        }
        var x = document.forms["myForm"]["penanggung_jawab_dealer"].value;
        if (x == "") {
          alert("Peanggung Jawab Dealer Harus Di Isi");
          return false;
        }
      }
    </script>