<?php 
//session_start();
include "adm_krkd/koneksi.php";
$kode=$_SESSION['kode'];
$pass=$_SESSION['password'];
$user = mysql_query("select * from tbmember where kode_member='$kode' and passw='$pass'");
$chek = mysql_num_rows($user);
if ($chek==0){
	header("location:index.php?info=AKSES GAGAL");
}

 ?>