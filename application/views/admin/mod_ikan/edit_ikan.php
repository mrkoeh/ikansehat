<div class="box-header with-border">
  <h3 class="box-title">Edut Jenis Ikan</h3>
</div>
<form action="<?php echo base_url();?>Ikan/aksi_edit_ikan" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<input type="hidden" name="id" value="<?php echo $id; ?>">
  <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Nama Ikan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama_ikan" value="<?php echo $nama_ikan;?>">
                </div>
              </div>

              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Gambar Lama</label>
                <div class="col-sm-8">
                  <?php
                    if($gambar != null){ ?>
                    <img src="<?php echo base_url();?>assets/upload/gambar_ikan/thumbnail/<?php echo $gambar;?>">
                  <?php 
                  }else{ 
                  ?>
                  <img src="<?php echo base_url();?>assets/images/noimage.jpg">
                  <?php } ?>
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Gambar Ikan</label>
                <div class="col-sm-8">
                  <input type="file" class="form-control" name="fupload">
                </div>
              </div>
            </div>
        </div>
      </div>
    <div class="box-footer text-center">
      <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>Ikan/semua_ikan'"><i class="fa fa-arrow-circle-left "></i> Kembali</button>
      <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </div>
</form> 
