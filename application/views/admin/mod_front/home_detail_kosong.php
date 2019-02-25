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
</table><br>
<table width="670" cellpadding="5">
	<tr align="left" valign="top"><td colspan="3"><b>Hasil Diagnosa :</b></td></tr>
	<tr align="left" valign="top">
		<td><?php echo $hasil;?></td>
	</tr>
</table>
<br>
<center>
<a href='<?php echo base_url();?>Konsultasi/cetak/<?php echo $id;?>'" target="_blank">Cetak</a>
</center>
<br><br><br><br><br>
