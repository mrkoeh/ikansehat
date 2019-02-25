<br><br><br><br><br><br><br>
<h3><center>Informasi Jenis Penyakit</center></h3>
		<?php foreach($penyakits->result_array() as $penyakit){ ?>
		<div class="box">

			 	<?php if($penyakit['gambar'] != null){ ?>
                 <img src="<?php echo base_url();?>assets/upload/thumbnail/<?php echo $penyakit['gambar'];?>" width="100" height="100">
                 <?php } else{ ?>
                 <img src="<?php echo base_url();?>assets/images/noimage.jpg">
                <?php
                 }
                 ?>
			<br>
			<a href="<?php echo base_url();?>UserDashboard/detail_pengetahuan/<?php echo $penyakit['kode'];?>"><?php echo $penyakit['jenis_penyakit'];?></a>
		</div>
		
		<?php } ?><br><br><br>
		<div align="center">
		<?php echo  $pagination;?>
		</div>
