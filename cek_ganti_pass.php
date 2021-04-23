<?php
include_once "adm_krkd/koneksi.php";
session_start();
include "cek_sesi.php";
$id_user = $_SESSION['kode'];
$pass_lama = $_POST['pass_lama'];
$pass_baru = $_POST['pass_baru'];
// cek apakah password lama sudah benar
$a=mysql_fetch_array(mysql_query("SELECT * FROM tbmember WHERE kode_member='$id_user'"));
if($pass_lama == $a['passw']){
	$update_pass = mysql_query("update tbmember set passw='$_POST[pass_baru]' where kode_member='$a[kode_member]'");
	echo '<script language="javascript" type="text/javascript">alert("Ganti Password Berhasil, Silahkan login kembali")</script>';
	echo "<meta http-equiv='refresh' content='0; url=home.php?page=ganti_password&info=Ganti password berhasil'>";
	}else{
			header("location:home.php?page=ganti_password&info=Ganti password gagal");
	}
?>