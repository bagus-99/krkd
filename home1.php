<?php
include 'admin/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TKJ SMK N 1 SINTANG
</title>
        <link type="text/css" href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="admin/css/theme.css" rel="stylesheet">
        <link type="text/css" href="admin/css/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href="admin/assets/pace/flash.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body style="display: none;">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>
                    <a class="brand" href="#">
                        <img src="logo.png"> TKJ SMK N 1 SINTANG
                    </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav pull-right">
 <?php 
    $oke=mysql_query("select * from menu order by id_menu");
                    $no=1;
while($data=mysql_fetch_array($oke)){
echo"<li><a href='?page=isi&hal=$data[category_menu]'>$data[category_menu]</a></li> ";
$no++;
}
?>
    <li><a href='?page=artikel'> Daftar Artikel</a></li>
            <li><a href='?page=materi'>Daftar Materi</a></li>
            <li><a href='?page=siswa'>Daftar Siswa</a></li>
        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>

            <!-- /navbar-inner -->
        </div>

        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li><a ><h5><font color="white">ARTIKEL</font></h5></a></li>
                                 <?php 
    $oke=mysql_query("select * from artikel order by id_artikel");
                    $no=1;
while($data=mysql_fetch_array($oke)){
echo"<li><article class='navigasi'>
                        <a href='?page=isiartikel&hal=$data[id_artikel]'><b class='navigasi1'>$data[judul_artikel]</b> <label class='label label-warning'>$data[tanggal_artikel]</label></a>
                        </article></li>";
$no++;
}
?>
                        
                        </li><a href="?page=artikel"><b>All Artikel <i class="menu-icon icon-signout"></i></b></a>
                        </ul>

                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                    <?php 
                            if(isset($_GET['page'])){
                                $page=htmlentities($_GET['page']);
                            }else{
                                $page="welcome";
                            }
                            
                            $file="$page.php";
                            $cek=strlen($page);
                            
                            if($cek>1000 || !file_exists($file) || empty($page)){
                                include ("welcome.php");
                            }else{
                                include ($file);
                            }
                        ?>
                        
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
                   <b class="copyright">Copyright &copy; 2015 - 2016 TKJ SMK N 1 SINTANG - CREW TKJ B Angkatan 2013/2014 </b> All rights reserved.<br>
                     | SMK BISA |
                </center>
            </div>
        </div>
        <script type="text/javascript">
        var site_url = "";
        var base_url = "";
        </script>
        <script data-pace-options='' src="admin/assets/pace/pace.min.js" type="text/javascript"></script>
        <script src="admin/assets/jquery-1.9.1.min.js" type="text/javascript"></script>
       <script src="admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                <script type="text/javascript">
            $( document ).ready(function() {
                $("body").show();
            });
        </script>
    </body>
</html>
