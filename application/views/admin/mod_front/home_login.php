<center><h3>Login</h3></center>
<form class="login" action="<?php echo base_url();?>Cek_login/index" method="post">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
	<table align="center">
		<tr>
			<td>Username</td><td>:</td><td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td><td>:</td><td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="submit" value="Login"></td>
		</tr>
	</table>
</form>
