<?php
	include "cek_sesi.php";
 ?>
<div class="content">
                            <div class="module">
    <div class="module-head">
        <h3>Ganti Password</h3>
    </div>
    <?php

	?>
    <div class="module-body">
		<form action="cek_ganti_pass.php" method="POST" class="form-horizontal">

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
			<fieldset>
				
                <div class="control-group">
					<label class="control-label">Password Lama</label>
                    <div class="controls">
						<input class="input-xlarge" type="password" name="pass_lama"/>
                    </div>
                </div>
                <div class="control-group">
					<label class="control-label">Password Baru</label>
                    <div class="controls">
						<input class="input-xlarge" type="text" name="pass_baru"/>
                    </div>
                </div>
                <div class="form-actions">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<div class="btn-group">
                     <a href="?page=detail_member" class="btn btn-default">Kembali</a>
                </div>
                </div>
                
			</fieldset>
         </form>
 

</div>
    </div>
    </div>
