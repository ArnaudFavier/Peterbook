<div class="titlebar_background">
	<div class="in_titlebar">
		<img class="logo" src="assets/img/logo_without_background.png" alt="logo" height="110" width="250"/>
		<form class="connexion" method="post" action="">
			<label>Login: </label><input type="text" name="username" /><?php echo form_error('username'); ?>
			<label>Password: </label><input type="password" name="password" /><?php echo form_error('password'); ?>
			<input type="submit" value="Connexion" />
		</form>
	</div>
</div>
<!-- Add a little shadow -->
<div class="after">
</div>