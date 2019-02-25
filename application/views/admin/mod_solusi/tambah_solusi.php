<div class="box-header with-border">
  <h3 class="box-title">Tambah Solusi Penyakit</h3>
</div>
<form action="<?php echo base_url();?>Solusi/simpan_solusi" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
  <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Kode</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="kode" value="<?php echo $kode;?>" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Solusi</label>
                <div class="col-sm-8">
                 <textarea name="jenis_solusi" id="ck"></textarea>
                </div>
              </div>
            </div>
                <br><br>
                <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Pilih salah satu penyakit:</h3>
                    </div>
                  <div class="box-body no-padding">
                    <table class="table table table-bordered table-hover" id="example2">
                      <thead>
                        <th><input type="radio"></th>
                        <th>Kode Penyakit</th>
                        <th>Nama Penyakit</th>
                      </thead>
                      <tbody>
                      <?php foreach($penyakits as $p){ ?>
                      <tr>
                         <td><input type="radio" name="kode_penyakit" value="<?php echo $p['kode'];?>"></td>
                         <td><?php echo $p['kode'];?></td>
                         <td><?php echo $p['jenis_penyakit'];?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
      </div>
    <div class="box-footer text-center">
      <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>Solusi/semua_solusi'"><i class="fa fa-arrow-circle-left "></i> Kembali</button>
      <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </div>
</form> 
