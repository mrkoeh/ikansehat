<br><br><br><br><br><br>
<center><h3>Solusi Penyakit</h3></center>
<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="4">
	<tr>
		<td width="1172" bgcolor="#CCCCCC"><b>Pertanyaan Gejala </b></td>
	</tr>
	<tr bgcolor="">
		<td>Gejala yang dialami : <br><b><?php echo $jenis_gejala;?></b> ?</td>
	</tr>
	<tr bgcolor="">
		<td>
			<i class="ace-icon fa fa-check bigger-110 green"></i> <a href="<?php echo base_url();?>Konsultasi/pertanyaan/<?php echo $ya;?>">Ya</a> | 
			<i class="ace-icon fa fa-check bigger-110 green"></i> <a href="<?php echo base_url();?>Konsultasi/pertanyaan/<?php echo $tidak;?>">Tidak</a>
		</td>
	</tr>
</table>

<div class="page-header">
<h1>Solusi Penyakit </h1>
</div>
<div class="alert alert-info hidden-sm hidden-xs"><span class="blue bolder"> Nama : <?php echo $nama;?></span> <br><br>
<div class="alert alert-info hidden-sm hidden-xs"><span class="blue bolder"> JENIS PENYAKIT : <?php echo $jenis_penyakit;?></span> <br><br>
<span class="blue bolder"> SOLUSI PENGENDALIAN :</span><br><br>
<?php echo $jenis_solusi;?></div>
