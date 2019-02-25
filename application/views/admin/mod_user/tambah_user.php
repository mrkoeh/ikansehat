<div class="box-header with-border">
  <h3 class="box-title">Tambah Pengguna</h3>
</div>
<form action="<?php echo base_url();?>user/simpan_pengguna" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
  <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Nama Pengguna</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama" required="required">
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Level</label>
                <div class="col-sm-5">
                 <select class="form-control select2" style="width: 100%;" name="level" required>
                  <option value="0">--pilih level--</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-8">
                  <textarea name="alamat" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="username" required>
                </div>
              </div>

              <div class="form-group">
                <label for="nama" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="password" required>
                </div>
              </div>

            </div>
        </div>
      </div>
    <div class="box-footer text-center">
      <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>user/semua_pengguna'"><i class="fa fa-arrow-circle-left "></i> Kembali</button>
      <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </div>
</form> 
