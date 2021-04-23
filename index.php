<?php require_once('adm_krkd/koneksi.php'); ?>

    <!DOCTYPE html>
    <html>
    <head>
    	<title>E-Tiket KRKD</title>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cek Tiket</title>
        <link type="text/css" href="adm_krkd/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="adm_krkd/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="adm_krkd/css/theme.css" rel="stylesheet">
        <link type="text/css" href="adm_krkd/css/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href="adm_krkd/assets/pace/flash.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <style type="text/css">
.modal-window {
  position: fixed;
  background-color: rgba(200, 200, 200, 0.75);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  opacity: 0;
  pointer-events: none;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}
 
.modal-window:target {
  opacity: 1;
  pointer-events: auto;
}
 
.modal-window>div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 2rem;
  background: #fff;
  color: #444;
}
 
.modal-window header {
  font-weight: bold;
}
 
.modal-close {
  color: #aaa;
  line-height: 50px;
  font-size: 80%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}
 
.modal-close:hover {
  color: #000;
}
 
.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}
        </style>
    </head>
    <body>
    	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    
                    <a class="brand" href="#">
                        <img src="logo.png">
                    </a>
                 
                    <!-- /.nav-collapse -->
                </div>
            </div>
   
 <div class="wrapper">
        <div class="container">

            <?php
    if(isset($_GET['info'])){
      $display = "block";
      $pemberitahuan = $_GET['info'];
      }
    else{
      $display = "none";  
      $pemberitahuan = "";
      }
    ?>
          <div class="alert alert-error" style="display:<?php echo $display ?>"><?php echo $pemberitahuan; ?>
        <button class="close" data-dismiss="alert">&times;</button>
      </div>
            <div class="row">
    
    <div class="module span4 offset4">
        <div id="open-modal" class="modal-window">
  <div>
    <a href="#modal-close" title="Close" class="btn btn-primary">X</a>
    <h1>E-Tiket</h1>
    <table>
        <tr><td>
    <div class="control-group">Merupakan Tiket untuk masuk<br>Kolam Renang Kampoeng Duren Berbasis elektronik.</div>
    <br>Dengan menjadi Member E-Tiket KRKD,<br> setiap pembelian tiket 10 atau lebih maka akan<br> didapat hanya dengan harga Rp.4000/tiket.<br>
    <div>dan jika 20 atau lebih maka akan didapat hanya dengan<br> harga Rp.3500/tiket, dari tiket umum Rp.5000/tiket.<br>
    <div>setelah mendaftar akan mendapat sebuah kartu E-tiket<br> yang memiliki QR Code guna discan saat masuk kolam,<br> dan diberi akun E-tiket. Dengan sistem saldo E-tiket.<br><br></div>
        </td></tr>
    </table>
  </div>
</div>
        <form action="home.php?page=proses_login" method="post" accept-charset="utf-8" autocomplete="off" class="form-vertical">
            <div class="module-head">
                <h3>Cek Tiket Member KRKD</h3>
                 <a href="#open-modal" class="btn btn-default"><i class='icon-info-sign'></i></a>
            </div>
            <div class="module-body">
               
                <div class="control-group">
                    <div class="controls row-fluid">
                    	<label class="control-label">Kode </label>
                        <input class="span12" name="kode" type="text" placeholder="Kode" value="" autofocus required>
                        
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls row-fluid">
                    	<label class="control-label">Password </label>
                        <input class="span12" name="password" type="password" placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="module-foot">
                <div class="control-group">
                    <div class="controls clearfix">
                        <button type="submit" class="btn btn-large btn-primary pull-right">Login</button>
                    </div>
                </div>
            </div>
        
    </div>
</div>

        </div>
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
        <script data-pace-options='' src="assets/pace/pace.min.js" type="text/javascript"></script>
        <script src="assets/jquery-1.9.1.min.js" type="text/javascript"></script>
       <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                <script type="text/javascript">
            $( document ).ready(function() {
                $("body").show();
            });
        </script>
    </body>
</html>