<br><br><br><br><br><br>
<center><h3>Form Konsultasi</h3></center>
<table class="table-list" border="0" cellspacing="1" cellpadding="4" width="900px" align="center">
	<tr>
		<td width="1172" bgcolor="#CCCCCC" colspan="6"><b>Pertanyaan Gejala </b></td>
	</tr>
	<tr bgcolor="">
		<td colspan="6">Apakah ikan anda mengalami gejala <b><?php echo $jenis_gejala;?></b> ?</td>
	</tr>
	<tr bgcolor="">
		<td bgcolor="#00CC00" width="50px">
			<i class="ace-icon fa fa-check bigger-110 green"></i> <a href="<?php echo base_url();?>Konsultasi/pertanyaan/<?php echo $ya;?>">Ya</a>
		</td>
		<td bgcolor="#FF0000" width="50px">
			<i class="ace-icon fa fa-check bigger-110 green"></i> <a href="<?php echo base_url();?>Konsultasi/pertanyaan/<?php echo $tidak;?>">Tidak</a>
		</td>
	</tr>
</table>