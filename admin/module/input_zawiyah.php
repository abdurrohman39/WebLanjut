<?php
error_reporting(0);
include"koneksi/koneksi.php";
if(empty($_GET['id_zawiyah'])){
  $p="Simpan";
  $query=mysql_query("SELECT * FROM tb_zawiyah ORDER BY id_zawiyah desc");
  $data=mysql_fetch_array($query);
  if(empty($data[0])){
    $nomot="IDZ";
  }else{
    $l=$data[0];
    $hj=substr($l,3,3);
    $nm=$hj+1;
    $nomot="IDZ" .$nm;
  }
  $query="input";
}else{
  $p="Edit";
  $query="Edit";
  $nomot=$_GET['id_zawiyah'];
}

$tquery=mysql_query("SELECT * from tb_zawiyah where id_zawiyah='$_GET[id_zawiyah]'");
$tampil=mysql_fetch_array($tquery);
?>
<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
      <i class="mdi mdi-crosshairs-gps"></i>                 
    </span>
    Tambah Zawiyah
  </h3>
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
        <span></span><a href="beranda.php?p=data_zawiyah">Kembali<i class="mdi mdi-plus icon-md text-primary align-middle"></i></a>
      </li>
    </ul>
  </nav>
</div>
<div class="row">
  <div class="col-md-12">
    <form class="form-sample" action="crud/simpan_zawiyah.php"  method="POST" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
      <div class="row">
        <div class="col-md-12">
          <input type="hidden" name="id_zawiyah" value="<?php echo $nomot; ?>"/>
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Zawiyah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama_zawiyah" value="<?php echo $tampil[nama_zawiyah];?>"/>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kontak</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="alamat_zawiyah" value="<?php echo $tampil[alamat_zawiyah]; ?>" />
            </div>
          </div>
        </div>
         <div class="col-md-12">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <textarea class="form-control" cols="40" rows="20" name="kontak_zawiyah" id="kontak_zawiyah" value="<?php echo $tampil[kontak_zawiyah]; ?>"></textarea>
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