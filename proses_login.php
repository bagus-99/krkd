<?php
$kode   = $_POST['kode'];
$pass       = $_POST['password'];

include 'adm_krkd/koneksi.php';

$user = mysql_query("select * from tbmember where kode_member='$kode' and passw='$pass'");
$chek = mysql_num_rows($user);
if($chek==0)
{
    header("location:index.php?info=Username atau password tidak cocok");
}else
{
    
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['kode'] = $_POST['kode'];
    $_SESSION['password'] = $_POST['password'];
    header("location:home.php?page=detail_member");
}
?>