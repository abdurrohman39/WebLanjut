<?php
include"../koneksi/koneksi.php";
$qw=mysql_query("delete from tb_download where id_download='$_GET[id_download]'");
echo "<script>document.location='../beranda.php?p=data_download'</script>";
