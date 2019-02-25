<br><br>
<center>
<div class="registrasi">
<center><h3>Daftar</h3></center><hr>
<form class="login" action="<?php echo base_url();?>HomeDashboard/simpan_daftar" method="post">
	<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
	<?php echo $this->session->flashdata("k");?> 
	<table align="" width="300px" cellpadding="5px">
		<tr>
			<td width="70px">Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><br><input type="submit" value="Daftar"></td>
		</tr>
	</table>
</form>
</div>
</center>