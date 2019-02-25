<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pakar Diagnosa Penyakit Ikan Air Tawar</title>
	<link href="<?php echo base_url();?>assets/template/front/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
	<div class="header">
		<div class="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/template/front/images/logo.png" width="100px" height="100px"></a></div>
		<div class="logotext"><b>Sistem Pakar Diagnosa Penyakit Ikan Air Tawar</b></div>

		<div class="form_login">
			 <?php if(!$this->session->userdata('username')){ ?>
        	<form method="post" action="<?php echo base_url();?>Cek_login/index">
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
				<label>Username</label> <input type="text" name="username">
				<label>Password</label> <input type="password" name="password">
				<input type="submit" value="Login">
			</form>
			<p>Klik <a href="<?php echo base_url();?>HomeDashboard/daftar">Disini</a> Untuk Mendaftar</p>
			<?php } else{?>
						<p>Hallo <b><?php echo $this->session->userdata('nama');?></b> | <a href="<?php echo base_url();?>Cek_login/logout">Logout</a></p>
			<?php } ?>

		</div>
	</div>
	<div class="konten_full">
		<?php echo $contents; ?>
	</div>
	<div class="footer">
		<div class="copyright">Sistem Pakar Diagnosa Penyakit Ikan Air Tawar || Copyright &copy; <?php echo date('Y');?></div>
	</div>
</div>
</body>
</html>