<?php
include"../koneksi/koneksi.php";
$qw=mysql_query("delete from tb_video where id_video='$_GET[id_video]'");
echo "<script>document.location='../beranda.php?p=data_video'</script>";
?>