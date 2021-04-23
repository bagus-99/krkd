<?php 
$kode=$_GET['id'];
include 'cek_session_qr.php';
echo "<meta http-equiv='refresh' content='0; url=adm_krkd/home.php?page=cek_tiket_qr&kode=$kode'>";


 ?>