<?php 
include "cek_sesi.php";
 ?>

<div class="content">
                            <div class="module">
    <div class="module-head">
                <h3>Detail Member</h3>
            </div>
    <div class="module-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>Profil Member</strong>
                            </div>
            <div class="panel-body">
            <?php
            include  "adm_krkd/koneksi.php";
            $a=mysql_fetch_array(mysql_query("SELECT * FROM tbmember WHERE kode_member='$kode'"));
             
            echo "<table class='table'>
                    <tr>
                    <tr>";
                        if(file_exists("image_member/$kode.jpg")){
                            echo " <td colspan='2'>Foto<br><a href='image_member/$kode.jpg'><img style='border-radius:50% ; height:150px ; width:150px' src='image_small/$kode.jpg'></a></td>";
                        }else{
                            echo " <td colspan='2'>Foto<br><a href='image_small/none.jpg'><img style='border-radius:50% ; height:150px ; width:150px' src='image_small/none.jpg'></a></td>";
                        }
                       

            echo"        </tr>
                        <td colspan='2'>QR Code<br><a href='qr_image/$kode.png'><img src='qr_image/$a[kode_member].png'></a></td>
                    </tr>
                    <tr>
                        <th bgcolor='#FBFBFB' width='25%'' style='border-top: 0px;''>Kode</th>
                        <td style='border-top: 0px;''>$a[kode_member]</td>
                    </tr>
                    <tr>
                        <th bgcolor='#FBFBFB'>Tgl Daftar</th>
                        <td>$a[tgl_daftar]</td>
                    </tr>
                    <tr>
                        <th bgcolor='#FBFBFB'>Nama</th>
                        <td>$a[nama_member]</td>
                    </tr>
                    <tr>
                        <th bgcolor='#FBFBFB'>Alamat</th>
                        <td>$a[alamat_member]</td>
                    </tr>
                    <tr>
                        <th bgcolor='#FBFBFB'>No. HP</th>
                        <td>$a[hp_member]</td>
                    </tr>
                    <tr>
                        <th bgcolor='#FBFBFB'>Sisa Tiket</th>
                        <td><h3>$a[sisa_tiket]</h3></td>
                    </tr>
                    
                    
                </table>
            </div>
        </div>";
                        ?>
                
                    </div>
                </div>
            </div>
        </div>
            </div>
</div>
                        </div>