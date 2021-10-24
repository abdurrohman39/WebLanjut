<?php
include"../koneksi/koneksi.php";
if(isset($_POST['Simpan'])){
	$nama_foto=$_FILES['foto']['name'];
	$alamat_foto=$_FILES['foto']['tmp_name'];
	if(empty($nama_foto)){	
		$qw=mysql_query("INSERT INTO tb_download SET id_download='$_POST[id_download]',
			ket_berkas='$_POST[ket_berkas]'");
	}else{
		move_uploaded_file($alamat_foto,'../foto/'.$nama_foto);
		$qw=mysql_query("INSERT INTO tb_download SET id_download='$_POST[id_download]',
			ket_berkas='$_POST[ket_berkas]',
			foto='$nama_foto'");
	}
	if($qw){ 
		echo"<script>alert('Berhasil di simpan')</script>";
		echo"<script>document.location.href='../beranda.php?p=data_download'</script>";    
	}
	echo"<script>alert('Gagal')</script>";
	echo"<script>document.location.href='../beranda.php?p=input_download'</script>";
}  
?>