<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pakar Diagnosa Penyakit Ikan Air Tawar</title>
	<link href="<?php echo base_url();?>assets/template/front/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
	<div class="header">
		<div class="logo"><img src="<?php echo base_url();?>assets/template/front/images/logo.png" width="100px" height="100px"></div>
		<div class="logotext"><b>Sistem Pakar Diagnosa Penyakit Ikan Air Tawar</b></div>

		<div class="form_login">
			<?php if(!$this->session->userdata('username')){ echo "";}else{ ?>
			<p>Hallo <b><?php echo $this->session->userdata('nama');?></b> | <a href="<?php echo base_url();?>Cek_login/logout">Logout</a></p>
			<?php } ?>
		</div>
	</div>
	<?php $uriMethod_name=$this->router->fetch_method(); ?>
	<div class="sidebar">
		<br><br><br><br><br><br>
		<nav>
		    <ul>
			    <li <?php if($uriMethod_name == "penyakit"){ echo "class='selected'"; }else{echo "class=''";
                }?>><a href="<?php echo base_url();?>UserDashboard/penyakit">Informasi Penyakit</a></li>

			    <li <?php if($uriMethod_name == "konsultasi"){ echo "class='selected'"; }else{ echo "class=''";
                }?>><a href="<?php echo base_url();?>Konsultasi/konsultasi">Konsultasi</a></li>

			    <li <?php if($uriMethod_name == "riwayat"){ echo "class='selected'"; }else{ echo "class=''";
                }?>><a href="<?php echo base_url();?>Konsultasi/riwayat">Riwayat Konsultasi</a></li>

			    <li <?php if($uriMethod_name == "akun"){ echo "class='selected'"; }else{ echo "class=''";
                }?>><a href="<?php echo base_url();?>Akun/akun">Setting Akun</a></li>
		    </ul>
		</nav>

	</div>
	<div class="konten">
			<?php echo $contents; ?>
	</div>
	<div class="footer">
		<div class="copyright">Sistem Pakar Diagnosa Penyakit Ikan Air Tawar || copyright &copy; <?php echo date('Y');?> </div>
	</div>
</div>
</body>
</html>