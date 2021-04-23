<?php 

include "cek_sesi.php";

$kode=$_SESSION['kode'];

 ?>



<!DOCTYPE html>

<html>

<head>

    <title>LOG</title>
<style type="text/css">
table {display:block;height:350px;overflow:auto;}
</style>

</head>

<body>



<div class="content">

                            <div class="module">

    <div class="module-head">

    <?php

  //  $kelas=$_GET['kelas'];

    //$angkatan=$_GET['angkatan'];

       echo " <h3>LOG MEMBER</h3>";

        ?>

    </div>

    <div class="module-body">

                        

           



        <br>



        <table class="table table-striped">

            <thead>

                <tr>

                    <th width="7%">NO</th>

                    <th>Aktifitas</th>

                    <th>Jumlah</th>

                    <th>Nama Admin</th>

                    <th>Tanggal</th>

                </tr>

            </thead>

            <tbody>

            <?php 



    $oke=mysql_query("SELECT * from log WHERE kode_member='$kode' AND lev=0 order by id DESC");

                    $no=1;

while($data=mysql_fetch_array($oke)){



    //--------- ambil data

    $member=mysql_fetch_array(mysql_query("SELECT * from tbmember WHERE kode_member='$data[kode_member]'"));

    $admin=mysql_fetch_array(mysql_query("SELECT * from admin WHERE id_admin='$data[id_admin]'"));

    $aksi=mysql_fetch_array(mysql_query("SELECT * from aksi WHERE id='$data[action]'"));

echo"<tr>

                    <td>

                    <b>$no</b>

                    </td>

                    <td>

                        <strong class=''>

                            $aksi[tindakan]

                        </strong>

                    </td>

                    <td>

                        <strong class=''>

                            $data[jml_tiket]

                        </strong>

                    </td>

                    <td>

                        <strong class=''>

                            $admin[nama_admin]

                        </strong>

                    </td>

                    <td>

                        <strong class=''>

                            $data[waktu]

                        </strong>

                    </td>";



                   

                    

echo           "";

$no++;

}

?>





                                                    

                            </tbody>

        </table>

        <br>

        <div class="row-fluid">

                <div class="span7"><div class="pagination pull-right" style="margin-top:0px;">

                <ul></ul>

                </div>

            </div>

        </div>



    </div>

</div>

                        </div>



</body>

</html>

