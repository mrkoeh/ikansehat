
  <div class="box-header">
    <h3 class="box-title">Pengguna</h3>
  </div>
  <button type="button" class="btn btn-info" onclick="window.location.href='<?php echo base_url();?>user/tambah_pengguna'">
  <i class="fa fa-plus-square"></i> Tambah</button><br><br>
<?php echo $this->session->flashdata("k");?>    
<div class="box">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Level</th>
            <th></th>
      </tr>
      </thead>
      <tbody>
    <?php foreach($penggunas as $p){?>
    <tr>
      <td><?php echo $p['nama'];?></td>
      <td><?php echo $p['email'];?></td>
      <td><?php echo $p['level'];?></td>
        <td>
          <button type="button" class="btn btn-xs btn-info" title="Edit Kategori" onclick="window.location.href='<?php echo base_url();?>user/edit_pengguna/<?php echo $p['id'];?>'"><i class="fa fa-pencil-square-o"></i></button>
          <button type="button" class="btn btn-xs btn-danger" title="Hapus Kategori" onclick="window.location.href='<?php echo base_url();?>user/hapus_pengguna/<?php echo $p['id'];?>'"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>
