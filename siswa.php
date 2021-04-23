<div class="content">
                            <div class="module">
    <div class="module-head">
                <h3>Daftar Siswa</h3>
            </div>
    <div class="module-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                     Daftar Siswa</div>
            <div class="panel-body">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th width="7%">NO</th>
                    <th>Kelas</th>
                    <th>Angkatan</th>
                    <th width="15%">Link</th>
                </tr>
            </thead>
            <tbody>
   <?php 
   $oke=mysql_query("SELECT * from kelas_siswa order by id_kelas");
                    $no=1;
while($data=mysql_fetch_array($oke)){
echo"
    <tr>
                    <td>
                    <b>$no</b>
                    </td>
                    <td>
                        <strong class='text-warning'>
                            $data[kelas]
                        </strong>
                    </td>
                    <td>
                        <span class='label label-success'>$data[angkatan]</span>
                    </td>
                    <td>
                        <div class='btn-group'>
                        <a href='?page=isisiswa&kelas=$data[kelas]&angkatan=$data[angkatan]' class='btn btn-default btn-small' target='_tab'><i class='icon-edit'></i> LINK</a>                                                    </div>
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