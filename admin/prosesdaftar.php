<?php
session_start();
include "koneksi/koneksi.php";
$query=mysql_query("SELECT * FROM tb_login ORDER by id_login desc");
$data=mysql_fetch_array($query);
if(empty($data[0])){
	$nomot="ILG101";
}else{
	$tambah=$data[0];
	$ngambil=substr($tambah,3,3);
	$hasil=$ngambil+1;
	$nomot="ILG" .$hasil;
}
$username=$_POST['username'];
$pass=$_POST['password'];
$password=$_POST['ulangi'];
$level=$_POST['level'];
$cekuser=mysql_query("SELECT * FROM tb_login where username='$username'");
$arraydata = mysql_fetch_array($cekuser);
$encode=base64_encode($password);
if(mysql_num_rows($cekuser) <> 0){
	$_SESSION['level'] = $arraydata['level'];
	$_SESSION['username'] = $arraydata['username'];
 	echo"<script>alert('Data Login Anda Sudah Terdaftar>";
	echo"<script>document.location.href='daftar_login.php'</script>";
}else{
	if($pass <> $password){
		echo"<script>alert('Maaf Password Tidak Sama')</script>";
		echo"<script>document.location.href='daftar_login.php'</script>";
	}else{
		$simpan=mysql_query("INSERT INTO tb_login(id_login, username, password,level) VALUES('$nomot','$username','$encode','$level')");
		if($simpan){
			echo"<script>alert('silahkan Lougout Terus login')</script>";
			echo"<script>document.location.href='index.php'</script>";
			
		}else{
			echo"<script>alert('proses Gagal')</script>";
			// echo"<script>document.location.href='daftar_login.php'</script>";
		}
	}
}
?>