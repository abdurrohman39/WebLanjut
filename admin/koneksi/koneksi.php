<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa_db";

$koneksi = mysqli_connect($host, $username, $password);
$pilihdatabase = mysqli_select_db($koneksi,$database);
	
?>