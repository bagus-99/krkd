<div class="content">
                            <div class="module">
    <div class="module-head">
                <h3>Daftar Artikel</h3>
            </div>
    <div class="module-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                            </div>
            <div class="panel-body">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th width="7%">NO</th>
                    <th>Nama Artikel</th>
                    <th width="15%">Tanggal Artikel</th>
                    <th width="15%">Link</th>
                </tr>
            </thead>
            <tbody>
   <?php 
   $oke=mysql_query("select * from artikel order by id_artikel");
                    $no=1;
while($data=mysql_fetch_array($oke)){
echo"
    <tr>
                    <td>
                    <b>$no</b>
                    </td>
                    <td>
                        <strong class='text-warning'>
                            $data[judul_artikel]
                        </strong>
                    </td>
                    <td>
                        <span class='label label-success'>$data[tanggal_artikel]</span>
                    </td>
                    <td>
                        <div class='btn-group'>
                        <a href='?page=isiartikel&hal=$data[id_artikel]' class='btn btn-default btn-small' target='_tab'><i class='icon-edit'></i> LINK</a>                                                    </div>
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