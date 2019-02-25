<br><br><br><br><br><br><br>
<h3>Riwayat Konsultasi:</h3>
<table border="1" cellspacing="0" bgcolor="#fff">
	<thead>
	<tr>
		<th>No.</th>
		<th>Tgl. Konsultasi</th>
		<th>Penyakit</th>
		<th>Jenis Ikan</th>
	</tr>
	</thead>	
	<tbody>

		<?php 
		$no=1;
		foreach($riwayat as $r ){ ?>
	<tr>
		<td>
			<?php echo $no;?>
		</td>
		<td>
			<?php echo $r['tanggal_konsultasi'];?>
		</td> 
		<td>
			<?php echo $r['jenis_penyakit'];?>
		</td>
		<td>
			<?php echo $r['nama_ikan'];?>
		</td>
	</tr>
	<?php $no++; }?>

</tbody>
</table>