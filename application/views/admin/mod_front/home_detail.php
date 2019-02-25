<br><br><br><br><br><br><br><br>
<h3><center>Detail Penyakit</center></h3>
<table width="670" cellpadding="5" valign="top">
	<tr align="left" valign="top">
		<td>Tgl.</td>
		<td>:</td>
		<td><?php echo $tgl_konsul;?></td>
	</tr>
	<tr align="left" valign="top">
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $nama_user;?></td>
	</tr>
	<tr align="left" valign="top">
		<td >Alamat</td>
		<td>:</td>
		<td><?php echo $alamat_user;?></td>
	</tr>
	<!-- <tr align="left" valign="top">
		<td >Jenis Ikan</td>
		<td>:</td>
		<td><strong><?php //echo $nama_ikan;?></strong></td>
	</tr> -->
	<tr align="left" valign="top">
		<td>Penyakit</td>
		<td>:</td>
		<td><b><?php echo $nama_penyakit;?> </b></td>
	</tr> 
</table><br>
<table width="670" cellpadding="5">
	<tr align="left" valign="top"><td colspan="3"><b>Gejala yang dialami:</b></td></tr>
	<?php foreach($gejalas as $gejala){ ?>
	<tr align="left" valign="top">
		<td><input type="checkbox" checked></td>
		<td><?php echo $gejala['nama_gejala'];?></td>
	</tr>
	<?php } ?>
</table>
<br>
<table width="670">
		<?php if(count($solusi_penyakit) > 0 ){ ?>
		<tr align="left"><td colspan="3"><b>Penanganan Penyakit:</b></td></tr>
		<?php foreach($solusi_penyakit as $solusi){ ?>
			<tr align="left">
				<td colspan="3"><?php echo $solusi['jenis_solusi'];?></td>
			</tr> 
		<?php } } else{ echo "Tidak ada solusi terkait"; }?>
</table>
<br>
<center>
<a href='<?php echo base_url();?>Konsultasi/cetak/<?php echo $id;?>'" target="_blank">Cetak</a>
</center>
<br><br><br><br><br>
