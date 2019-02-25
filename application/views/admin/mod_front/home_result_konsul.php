<br><br><br><br><br><br><br>
<h3><center>HASIL PEMERIKSAAN</center></h3>
<center><?php echo $this->session->flashdata("k");?></center><br><br>
<p style="text-align: center;">Terima kasih, berikut Nomor konsultasi anda, silahkan klik untuk melihat detail :
<b><a href="<?php echo base_url();?>Konsultasi/detail_konsultasi/<?php echo $id;?>"><?php echo $id;?></a></b></p>
<br><br><br><br>