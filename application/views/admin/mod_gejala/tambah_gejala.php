<div class="box-header with-border">
    <h3 class="box-title">Tambah Gejala Penyakit</h3>
</div>

<form action="<?php echo base_url();?>gejala/simpan_gejala" method="post" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Kode Gejala</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kode" value="<?php echo $kode;?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Gejala Penyakit</label>
                        <div class="col-sm-8">
                            <textarea name="nama_gejala" cols="80"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="kategori"> Jika iya maka: </label>
                        <div class="col-sm-5">
                            <select class="form-control select2" style="width: 100%;" name="ya" required>
                                <option value="0">--pilih gejala atau solusi--</option>
                                <?php
                                foreach($gejalas->result_array() as $g){
                                ?>
                                    <option value="<?php echo $g['kode'];?>">Kode Gejala: <?php echo $g['kode'];?> - <?php echo $g['nama_gejala'];?></option>
                                <?php 
                                }
                                ?>
                                <?php
                                foreach($solusis as $s){
                                ?>
                                    <option value="<?php echo $s['kode'];?>">Kode Solusi: <?php echo $s['kode'];?> - <?php echo $s['jenis_solusi'];?></option>
                                <?php 
                                }
                                ?>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="kategori"> Jika tidak maka: </label>
                        <div class="col-sm-5">
                            <select class="form-control select2" style="width: 100%;" name="tidak" required>
                                <option value="0">--pilih gejala atau solusi--</option>
                                <?php
                                foreach($gejalas->result_array() as $g){
                                ?>
                                    <option value="<?php echo $g['kode'];?>">Kode Gejala: <?php echo $g['kode'];?> - <?php echo $g['nama_gejala'];?></option>
                                <?php 
                                }
                                ?>
                                <?php
                                foreach($solusis as $s){
                                ?>
                                    <option value="<?php echo $s['kode'];?>">Kode Solusi: <?php echo $s['kode'];?> - <?php echo $s['jenis_solusi'];?></option>
                                <?php 
                                }
                                ?>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3  control-label" for="kategori"> Jenis Penyakit </label>
                        <div class="col-sm-5">
                            <select class="form-control select2" style="width: 100%;" name="penyakit_kode" required="required">
                                    <option value="0">--pilih penyakit--</option>
                                    <?php
                                    foreach($penyakits as $p){
                                    ?>
                                    <option value="<?php echo $p['kode'];?>">Kode Penyakit: <?php echo $p['kode'];?> - <?php echo $p['jenis_penyakit'];?></option>
                                    <?php 
                                    }
                                    ?>
                            </select>
                        
                        </div>
                    </div>

                </div>
                <br><br>
                <div class="col-xs-9">
                    <div class="box">
                        <div class="box-body no-padding">
                            <table class="table table table-bordered table-hover">
                                <thead>
                                    <th><input type="checkbox"></th>
                                    <th>Nama Ikan</th>
                                </thead>
                                <tbody>
                                    <?php foreach($ikans->result_array() as $ra){ ?>
                                    <tr>
                                        <td width="10px"><input type="checkbox" name="ikan_id[]" value="<?php echo $ra['id'];?>"></td>
                                        <td><?php echo $ra['nama_ikan'];?></td>
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
            <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>Gejala/semua_gejala'"><i class="fa fa-arrow-circle-left "></i> Kembali</button>
            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
        </div>
    </div>
</form>