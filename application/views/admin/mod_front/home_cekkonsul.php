<br><br><br><br><br><br><br>
<form action="<?php echo base_url();?>Konsultasi/hasil_konsultasi" method="post"> 
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<input type="hidden" name="user_id" value="<?php echo $id_user;?>">
<input type="hidden" name="id_ikan" value="<?php echo $id_ikan;?>">
<table width="600" border="0" cellspacing="0" cellpadding="5">
	<tr align="left">
		<td >Nama</td>
		<td width="5px">:</td>
		<td><?php echo $nama;?></td>
	</tr>
	<tr align="left">
		<td >Alamat</td>
		<td>:</td>
		<td><?php echo $alamat;?></td>
	</tr>
	<tr align="left">
		<td>Jenis Ikan</td>
		<td>:</td>
		<td><?php echo $nama_ikan;?></td>
	</tr>
	<tr><td colspan="4" align="left">Gejala yang dipilih:</tr>
	<?php foreach($gejalas as $gejala){ ?>
	<tr align="left" valign="top">
		<td><input type="checkbox" name="gejala_kode[]" value="<?php echo $gejala['gejala_kode'];?>" checked/></td>
		<td colspan="2"><?php echo $gejala['nama_gejala'];?></td>
	</tr>
	<?php } ?>
	<tr><td colspan="3" align="left"><input type="submit" value="Proses"></tr>
</table><br>
</form><br><br><br>