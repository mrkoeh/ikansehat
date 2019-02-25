<br><br><br><br><br><br>
<table border="0" width="800px">
	<tr>
		<td>
			<h3>Detail Pengetahuan</h3>
		</td>
	</tr>
	<tr>
		<td>
			<h4><?php echo $jenis_penyakit;?></h4>
		</td>
	</tr>
	<tr>
		<td>
			<?php if($gambar != null) { ?>
				<img src="<?php echo base_url();?>assets/upload/<?php echo $gambar;?>">
			<?php }  ?>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Gejala Penyakit :</h4>
		</td>
	</tr>
	<tr>
		<td>
			<?php foreach ($gejalas as $key => $value) {
				echo '</b>&nbsp;-&nbsp;'.$value['nama_gejala'].'<br>';
			}
			?>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Penanganan Penyakit:</h4>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $jenis_solusi; ?>
		</td>
	</tr>
</table>
<br><br><br><br><br><br>