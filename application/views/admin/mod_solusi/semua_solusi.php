
  <div class="box-header">
    <h3 class="box-title">Solusi Penyakit</h3>
  </div>
    <button type="button" class="btn btn-info" onclick="window.location.href='<?php echo base_url();?>Solusi/tambah_solusi'">
    <i class="fa fa-plus-square"></i> Tambah</button><br><br>
<?php echo $this->session->flashdata("k");?>    
<div class="box">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
          <th>Kode</th>
          <th>Solusi Penyakit</th>
          <th></th>
      </tr>
      </thead>
      <tbody>
    <?php foreach($solusis as $s){
      $detail_solusi = htmlspecialchars_decode($s['jenis_solusi']); 
      $isi = substr($detail_solusi,0,100); 
      $isi = substr($detail_solusi,0,strrpos($isi," ")); 
      $sol = html_entity_decode(strip_tags($isi));
    ?>
    <tr>
      <td><?php echo $s['kode'];?></td>
      <td><?php echo $sol;?></td>
        <td>
          <button type="button" class="btn btn-xs btn-info" title="Edit Kategori" onclick="window.location.href='<?php echo base_url();?>Solusi/edit_solusi/<?php echo $s['kode'];?>'"><i class="fa fa-pencil-square-o"></i></button>
          <button type="button" class="btn btn-xs btn-danger" title="Hapus Kategori" onclick="window.location.href='<?php echo base_url();?>Solusi/hapus_solusi/<?php echo $s['kode'];?>'"><i class="fa fa-trash"></i></button>
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
        <h4 class="modal-title">Detail Solusi</h4>
      </div>
      <div class="modal-body">
        <div id="solusidetail"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
