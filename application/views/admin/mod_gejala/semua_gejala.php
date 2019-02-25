
  <div class="box-header">
    <h3 class="box-title">Gejala Penyakit</h3>
  </div>
    <button type="button" class="btn btn-info" onclick="window.location.href='<?php echo base_url();?>Gejala/tambah_gejala'">
    <i class="fa fa-plus-square"></i> Tambah</button><br><br>
<?php echo $this->session->flashdata("k");?>    
<div class="box">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
          <th>Kode Gejala</th>
          <th>Jenis Gejala</th>
          <th>Jika iya</th>
          <th>Jika tidak</th>
          <th></th>
      </tr>
      </thead>
      <tbody>
    <?php foreach($gejalas->result_array() as $g){?>
    <tr>
      <td><?php echo $g['kode'];?></td>
      <td><?php echo $g['nama_gejala'];?></td>
      <td><?php echo $g['ya'];?></td>
      <td><?php echo $g['tidak'];?></td>
        <td>
          <button type="button" class="btn btn-xs btn-info" title="Edit Kategori" onclick="window.location.href='<?php echo base_url();?>Gejala/edit_gejala/<?php echo $g['kode'];?>'"><i class="fa fa-pencil-square-o"></i></button>
          <button type="button" class="btn btn-xs btn-danger" title="Hapus Kategori" onclick="window.location.href='<?php echo base_url();?>Gejala/hapus_gejala/<?php echo $g['kode'];?>'"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>
