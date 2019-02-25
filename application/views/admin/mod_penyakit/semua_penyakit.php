
  <div class="box-header">
    <h3 class="box-title">Penyakit</h3>
  </div>
    <button type="button" class="btn btn-info" onclick="window.location.href='<?php echo base_url();?>Penyakit/tambah_penyakit'">
    <i class="fa fa-plus-square"></i> Tambah</button><br><br>
<?php echo $this->session->flashdata("k");?>    
<div class="box">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
          <th>Kode Penyakit</th>
          <th>Gambar</th>
          <th>Jenis Penyakit</th>
          <th>Gejala Awal</th>
          <th></th>
      </tr>
      </thead>
      <tbody>
    <?php foreach($penyakits as $p){?>
    <tr>
      <td><?php echo $p['kode'];?></td>
      <td>
          <?php if($p['gambar'] != null){ ?>
              <img src="<?php echo base_url();?>assets/upload/thumbnail/<?php echo $p['gambar'];?>">
            <?php }else { ?>
                 <img src="<?php echo base_url();?>assets/images/noimage.jpg">
            <?php } ?>
        </td>
      <td><?php echo $p['jenis_penyakit'];?></td>
      <td><b>Kode Gejala: <?php echo $p['gejala_kode'];?></b> - <?php echo $p['nama_gejala'];?></td>
        <td>
          <button type="button" class="btn btn-xs btn-info" title="Edit Kategori" onclick="window.location.href='<?php echo base_url();?>Penyakit/edit_penyakit/<?php echo $p['kode'];?>'"><i class="fa fa-pencil-square-o"></i></button>
          <button type="button" class="btn btn-xs btn-danger" title="Hapus Kategori" onclick="window.location.href='<?php echo base_url();?>Penyakit/hapus_penyakit/<?php echo $p['kode'];?>'"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>


<?php // detail aset modal ?>
<div class="modal fade" id="modal-default" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Penyakit Ikan</h4>
      </div>
      <div class="modal-body">
        <div id="penyakitdetail"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>