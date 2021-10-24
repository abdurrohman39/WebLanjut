<?php
include "../koneksi/koneksi.php";
if (isset($_POST['Simpan'])){
	$query=mysql_query("INSERT INTO tb_video set id_video ='$_POST[id_video]',
		nama_video='$_POST[nama_video]',
		isi_video='$_POST[isi_video]'");
	
	if($query){ 
		echo"<script>alert('Data Anda Berhasil Di Simpan')</script>";
		echo"<script>document.location.href='../beranda.php?p=data_video'</script>";    
	}
	echo"<script>alert('Data Anda Gagal Di Simpan')</script>";
	echo"<script>document.location.href='../beranda.php?p=input_video'</script>";
}  

if(isset($_POST['Edit'])){	
	$query=mysql_query("UPDATE tb_video set id_video ='$_POST[id_video]',
		nama_video='$_POST[nama_video]',
		isi_video='$_POST[isi_video]' where id_video='$_POST[id_video]'");
	if($query){ 
		echo"<script>alert('Data Anda Berhasil Di Edit')</script>";
		echo"<script>document.location.href='../beranda.php?p=data_video'</script>";    
	}
	echo"<script>alert('Data Anda Gagal Di Edit')</script>";
	echo"<script>document.location.href='../beranda.php?p=input_video'</script>";
}
?>