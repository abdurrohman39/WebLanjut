<?php
include"../koneksi/koneksi.php";
$qw=mysql_query("delete from tb_berita where id_berita='$_GET[id_berita]'");
echo "<script>document.location='../beranda.php?p=data_berita'</script>";
