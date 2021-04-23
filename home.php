<?php session_start();
include 'adm_krkd/koneksi.php';
include "cek_sesi.php";
$kode=$_SESSION['kode'];
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cek Tiket</title>
        <link type="text/css" href="adm_krkd/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="adm_krkd/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="adm_krkd/css/theme.css" rel="stylesheet">
        <link type="text/css" href="adm_krkd/css/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href="adm_krkd/assets/pace/flash.css" rel="stylesheet">
        <link rel="shortcut icon" type="adm_krkd/image/x-icon" href="favicon.ico">
    </head>
    <body style="">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav pull-right">
                        <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php $a=mysql_fetch_array(mysql_query("SELECT * FROM tbmember WHERE kode_member='$kode'"));
                        echo "$a[nama_member]"; ?>
                                <span class="pull-right">
                                <img src="adm_krkd/images/default_pl.png" class="nav-avatar img-polaroid" />
                                </span>
                            </li>
                        </ul>
                    
                   
                    <a class="brand" href="?page=tiket">
                        <img src="adm_krkd/logo.png">
                                     
                        
                    </a>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>

        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                   
                    
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
    <div class="btn-box-row row-fluid">
        <div class="span12">
            <div class="widget-usage" style="padding: 10px 15px;">
                <small class="pull-left"><?php
//menentukan hari
$a_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
$hari = $a_hari[date("N")];

//menentukan tanggal
$tanggal = date ("j");

//menentukan bulan
$a_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
$bulan = $a_bulan[date("n")];

//menentukan tahun
$tahun = date("Y");

//dan untuk menampilkan nya dengan format contoh Jumat, 22 Februari 2013
echo $hari . ", " . $tanggal ." ". $bulan ." ". $tahun; 
?></small>
                <br>Selamat datang di <b>E-tiket KRKD</b>
                <br>
                <i class="icon icon-map-marker"></i> Ds. Tirukidul Kec. Gurah Kab. Kediri<br>
                                <i class="icon icon-phone"></i> 000000
                            </div>
        </div>
    </div>
    <br>
     <?php 
                            if(isset($_GET['page'])){
                                $page=htmlentities($_GET['page']);
                            }else{
                                $page="tiket";
                            }
                            
                            $file="$page.php";
                            $cek=strlen($page);
                            
                            if($cek>1000 || !file_exists($file) || empty($page)){
                                include ("detail_member.php");
                            }else{
                                include ($file);
                            }
                        ?>

                        <div class="span3">
        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li><a href="?page=detail_member"><i class="menu-icon icon-tag"></i>Tiket</a></li>
                                <li><a href="?page=log_member"><i class="menu-icon icon-book"></i>Log</a></li>
                                <li><a href="?page=ganti_password"><i class="menu-icon icon-user"></i>Ganti Password </a></li> 
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="?page=logout"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
        </div>
    
    
</div>
<!--/#btn-controls-->

                        </div>

                    </div>
                    <!--/.span9-->

                </div>

            </div>

            <!--/.container-->
        </div>
        <!--/.wrapper-->

        <div class="footer">
            <div class="container">
                <center>
                   <b class="copyright">Copyright &copy; Kolam Renang Kampoeng Duren </b> All rights reserved.<br>
                     | Ds. Tirukidul Kec. Gurah Kab. Kediri |
                </center>
            </div>
        </div>
        <script type="text/javascript">
        var site_url = "";
        var base_url = "";
        </script>
        <script data-pace-options='' src="adm_krkd/assets/pace/pace.min.js" type="text/javascript"></script>
        <script src="assets/jquery-1.9.1.min.js" type="text/javascript"></script>
       <script src="adm_krkd/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                <script type="text/javascript">
            $( document ).ready(function() {
                $("body").show();
            });
        </script>
    </body>
</html>
