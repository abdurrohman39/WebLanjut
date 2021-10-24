<?php
include "../koneksi/koneksi.php";

if (isset($_POST['Simpan'])){
	$query=mysql_query("INSERT INTO tb_berita set id_berita ='$_POST[id_berita]',
		nama_berita='$_POST[nama_berita]',
		tanggal_upload='$_POST[tanggal_upload]',
		isi_berita='$_POST[isi_berita]',
		nama_penulis='$_POST[nama_penulis]',
		kategori='$_POST[kategori]'");
	
	if($query){ 
		echo"<script>alert('Data Anda Berhasil Di Simpan')</script>";
		echo"<script>document.location.href='../beranda.php?p=data_berita'</script>";    
	}
	echo"<script>alert('Data Anda Gagal Di Simpan')</script>";
	echo"<script>document.location.href='../beranda.php?p=input_berita'</script>";
}  

if(isset($_POST['Edit'])){	
	$query=mysql_query("UPDATE tb_berita set id_berita ='$_POST[id_berita]',
		nama_berita='$_POST[nama_berita]',
		tanggal_upload='$_POST[tanggal_upload]',
		isi_berita='$_POST[isi_berita]',
		nama_penulis='$_POST[nama_penulis]',
		kategori='$_POST[kategori]' where id_berita='$_POST[id_berita]'");
	if($query){ 
		echo"<script>alert('Data Anda Berhasil Di Edit')</script>";
		echo"<script>document.location.href='../beranda.php?p=data_berita'</script>";    
	}
	echo"<script>alert('Data Anda Gagal Di Edit')</script>";
	echo"<script>document.location.href='../beranda.php?p=input_berita'</script>";
}
?>