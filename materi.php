<div class="content">
                            <div class="module">
    <div class="module-head">
                <h3>Daftar Materi</h3>
            </div>
    <div class="module-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                     Daftar Materi Tertulis       </div>
            <div class="panel-body">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th width="7%">NO</th>
                    <th>Nama Materi</th>
                    <th>Kelas</th>
                    <th width="15%">Tanggal Materi</th>
                    <th width="15%">Link</th>
                </tr>
            </thead>
            <tbody>
   <?php 
   $oke=mysql_query("SELECT * from materi where tipe_materi like 'tertulis'");
                    $no=1;
while($data=mysql_fetch_array($oke)){
echo"
    <tr>
                    <td>
                    <b>$no</b>
                    </td>
                    <td>
                        <strong class='text-warning'>
                            $data[judul_materi]
                        </strong>
                    </td>
                    <td>
                        <span class='label label-success'>$data[kelas_materi]</span>
                    </td>
                    <td>
                        <span class='label label-success'>$data[tanggal_materi]</span>
                    </td>
                    <td>
                        <div class='btn-group'>
                        <a href='?page=isimateri&hal=$data[id_materi]' class='btn btn-default btn-small' target='_tab'><i class='icon-edit'></i> LINK</a>                                                    </div>
                    </td>
                </tr>";
$no++;
}
?>
 </tbody>
        </table>
        <br>
            </div>
        </div>
            </div>
            <br>
                <div class="module-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                     Daftar Materi File       </div>
            <div class="panel-body">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th width="7%">NO</th>
                    <th>Nama Materi</th>
                    <th width="15%">Kelas</th>
                    <th width="15%">Tanggal Materi</th>
                    <th width="15%">Link</th>
                </tr>
            </thead>
            <tbody>
   <?php 
   $oke=mysql_query("SELECT * from materi where tipe_materi like 'file'");
                    $no=1;
while($data=mysql_fetch_array($oke)){
echo"
    <tr>
                    <td>
                    <b>$no</b>
                    </td>
                    <td>
                        <strong class='text-warning'>
                            $data[judul_materi]
                        </strong>
                    </td>
                    <td>
                        <span class='label label-success'>$data[kelas_materi]</span>
                    </td>
                    <td>
                        <span class='label label-success'>$data[tanggal_materi]</span>
                    </td>
                    <td>
                        <div class='btn-group'>
                        <a href='admin/file/$data[konten_materi]' class='btn btn-default btn-small' target='_tab'><i class='icon-edit'></i> LINK</a>                                                    </div>
                    </td>
                </tr>";
$no++;
}
?>
 </tbody>
        </table>
        <br>
            </div>
        </div>
            </div>
</div>
                        </div>