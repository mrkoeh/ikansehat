
  <div class="box-header">
    <h3 class="box-title">Jenis Ikan</h3>
  </div>
    <button type="button" class="btn btn-info" onclick="window.location.href='<?php echo base_url();?>Ikan/tambah_ikan'">
    <i class="fa fa-plus-square"></i> Tambah</button><br><br>
<?php echo $this->session->flashdata("k");?>    
<div class="box">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
          <th>Nama Ikan</th>
          <th>Gambar Ikan</th>
          <th></th>
      </tr>
      </thead>
      <tbody>
    <?php foreach($ikans->result_array() as $r){?>
    <tr>
      <td><?php echo $r['nama_ikan'];?></td>
      <td>
          <?php if($r['gambar'] != null){ ?>
              <img src="<?php echo base_url();?>assets/upload/gambar_ikan/thumbnail/<?php echo $r['gambar'];?>">
            <?php }else { ?>
                 <img src="<?php echo base_url();?>assets/images/noimage.jpg">
            <?php } ?>
        </td>
        <td>
          <button type="button" class="btn btn-xs btn-info" title="Edit Kategori" onclick="window.location.href='<?php echo base_url();?>Ikan/edit_ikan/<?php echo $r['id'];?>'"><i class="fa fa-pencil-square-o"></i></button>
          <button type="button" class="btn btn-xs btn-danger" title="Hapus Kategori" onclick="window.location.href='<?php echo base_url();?>Ikan/hapus_ikan/<?php echo $r['id'];?>'"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>
