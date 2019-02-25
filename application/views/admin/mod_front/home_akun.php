<br><br><br><br><br><br><br>
<center>
<div class="registrasi">
<center><h3>Setting akun</h3></center><hr>
<center><?php echo $this->session->flashdata("k");?> </center>
<form class="login" action="<?php echo base_url();?>Akun/edit_akun" method="post">
	<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
	<input type="hidden" name="id" value="<?php echo $user_id;?>">
	<table width="300px" cellpadding="5px">
		<tr>
			<td width="50px" align="left">Nama</td><td>:</td><td width="80px"><input type="text" name="nama" value="<?php echo $nama;?>"></td>
		</tr>
		<tr>
			<td align="left">Email</td><td>:</td><td><input type="email" name="email" value="<?php echo $email;?>"></td>
		</tr>
		<tr>
			<td align="left">Username</td><td>:</td><td><input type="text" name="username" value="<?php echo $username;?>" readonly="readonly"></td>
		</tr>
		<tr>
			<td align="left">Password</td><td>:</td><td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="submit" value="Update"></td>
		</tr>
	</table>
</form>
</div>
<br><br><br><br>