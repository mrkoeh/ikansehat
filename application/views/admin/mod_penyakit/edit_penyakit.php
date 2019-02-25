<div class="box-header with-border">
  <h3 class="box-title">Tambah Penyakit</h3>
</div>
<form action="<?php echo base_url();?>Penyakit/aksi_edit_penyakit" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
  <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Kode Penyakit</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="kode" value="<?php echo $kode;?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Nama Penyakit</label>
                <div class="col-sm-8">
                 <input type="text" class="form-control" name="jenis_penyakit" value="<?php echo $jenis_penyakit;?>">
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Gambar lama</label>
                <div class="col-sm-8">
                 <?php if($gambar != null){ ?>
                 <img src="<?php echo base_url();?>assets/upload/thumbnail/<?php echo $gambar;?>">
                 <?php } else{ ?>
                 <img src="<?php echo base_url();?>assets/images/noimage.jpg">
                <?php
                 }
                 ?>
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Ganti Gambar</label>
                <div class="col-sm-8">
                 <input type="file" class="form-control" name="fupload">
                </div>
              </div>
            
            <div class="form-group">
                <label class="col-xs-3 control-label" for="kategori"> Gejala Awal </label>
                <div class="col-sm-5">
                  <select class="form-control select2" style="width: 100%;" name="kode_gejala_awal" required>
                    <option value="0">--pilih gejala awal--</option>
                    <?php
                    foreach($gejalas->result_array() as $g){
                    if($g['kode'] == $kode_gejala_awal){
                    ?>
                    <option value="<?php echo $g['kode'];?>" selected> Kode: <?php echo $g['kode'];?> - <?php echo $g['nama_gejala'];?></option>
                    <?php 
                    }else{ ?>
                    <option value="<?php echo $g['kode'];?>"> Kode: <?php echo $g['kode'];?> - <?php echo $g['nama_gejala'];?></option>                          
                       <?php 
                      }
                    }
                    ?>
                  </select>
                
                </div>
              </div>
              </div>
            </div>
        </div>
      </div>
    <div class="box-footer text-center">
      <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>Penyakit/semua_penyakit'"><i class="fa fa-arrow-circle-left "></i> Kembali</button>
      <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </div>
</form> 
