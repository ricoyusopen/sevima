<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Upload Berkas </h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
    	<div class="col-lg-12">
    		 <!-- Success Upload -->
	        <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
	            <div class="alert alert-success">
	                <?php echo session()->getFlashdata('berhasil');?>
	            </div>
	        <?php } ?>
	        
	        <?php 
	            $errors = $validation->getErrors();
	            if(!empty($errors))
	            {
	                echo $validation->listErrors('list');
	            }
	        ?>

    		<?= form_open_multipart(base_url('berkas/proses')); ?>
    		<div class="row">
    			<div class="col-md-4">
    				<label>Judul</label>
    				<div class="form-group">
                   		 <input type="text" name="judul" class="form-control"> 
                	</div>	
    			</div>
    			<div class="col-md-4">
    				<label>File</label>
    				<div class="form-group">
                   		 <input type="file" name="file_upload" class="form-control"> 
                	</div>	    			
                </div>
    			<div class="col-md-4">
    				<label>Aksi</label>
    				<div class="form-group">
                   		  <?= form_submit('Send', 'Simpan') ?> 
                	</div>	
    			</div>
    		</div>
    		<?= form_close() ?>

    	</div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
			<table class="table table-bordered">
		        <tr>
		            <th>No</th>
		            <th>Keterangan</th>
		            <th>Gambar</th>
		        </tr>
		        	<?php foreach($gambar as $row):?>
		        <tr>
		        	<td><?=$row['id'];?></td>
		            <td><?=$row['keterangan'];?></td>
		            <td><img src="<?=base_url('uploads/berkas/'.$row['image']);?>" width="100"></td>
		        </tr>
		        <?php endforeach;?>
		    </table>
		</div>
	</div>