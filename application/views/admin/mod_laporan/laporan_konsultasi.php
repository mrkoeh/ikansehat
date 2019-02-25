
<div class="box">
  <div class="box-body">
    <legend>Laporan Konsultasi</legend>
    <table class="table table table-hover" id="example2">
      <thead>
      <tr>
            <th>No.</th>
            <th>Tgl. Konsultasi</th>
            <th>User</th>
            <th>Jenis Ikan</th>
            <th>Jenis Penyakit</th>
            <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
    <?php 
    $i=1;
    foreach($reports as $r){

    ?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $r['tanggal_konsultasi'];?></td>
      <td><?php echo $r['nama'];?></td>
      <td><?php echo $r['nama_ikan'];?></td>
      <td><?php echo $r['jenis_penyakit'];?></td>
      <td>
          <button type="button" class="btn btn-xs btn-info konsultasi_detail" title="Detail Konsultasi" id="<?php echo $r['id'];?>"><i class="fa fa-eye"></i></button>
          <a href="<?php echo base_url();?>Laporan/cetak/<?php echo $r['id'];?>" class="btn btn-xs btn-info data_detail" target="_blank"><i class="fa fa-print"></i></a>
      </td>
      </tr>
      <?php 
      $i++;
      } ?>
      </tbody>
    </table>
  </div>
</div>


<div class="modal fade" id="modal-default" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Detail Konsultasi</h4>
      </div>
      <div class="modal-body">
        <div id="konsultasidetail"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>